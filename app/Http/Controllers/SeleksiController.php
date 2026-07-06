<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormulirPendaftaran;
use App\Models\HasilSeleksi;

class SeleksiController extends Controller
{
    public function index(Request $request)
    {
        // Hanya ambil yang sudah disetujui
        $query = FormulirPendaftaran::with('user', 'hasilSeleksi')
                    ->where('status_pendaftaran', 'approved')
                    ->orderBy('created_at', 'desc');

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_panggilan', 'like', "%{$search}%")
                  ->orWhereHas('user', function($uq) use ($search) {
                      $uq->where('nama_lengkap', 'like', "%{$search}%")
                         ->orWhere('nisn', 'like', "%{$search}%");
                  });
            });
        }

        $pesertas = $query->paginate(10);
        return view('admin.seleksi.index', compact('pesertas'));
    }

    public function show($id)
    {
        $pendaftaran = FormulirPendaftaran::with(['user', 'hasilSeleksi' => function($q) {
            $q->orderBy('created_at', 'desc');
        }])->findOrFail($id);
        
        return view('admin.seleksi.show', compact('pendaftaran'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'jenis_seleksi' => 'required|string|max:255',
            'nilai' => 'required|string|max:255',
            'status_lulus' => 'required|in:1,0',
            'keterangan' => 'nullable|string',
        ]);

        $pendaftaran = FormulirPendaftaran::findOrFail($id);

        HasilSeleksi::create([
            'formulir_pendaftaran_id' => $pendaftaran->id,
            'jenis_seleksi' => $request->jenis_seleksi,
            'nilai' => $request->nilai,
            'status_lulus' => $request->status_lulus,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Nilai seleksi berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $hasil = HasilSeleksi::findOrFail($id);
        $hasil->delete();

        return redirect()->back()->with('success', 'Nilai seleksi berhasil dihapus.');
    }
}
