<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // === PUBLIC METHODS ===
    public function publicIndex()
    {
        $galeris = Galeri::orderBy('tanggal_upload', 'desc')->paginate(12);
        return view('galeri', compact('galeris'));
    }

    // === ADMIN METHODS ===
    public function index()
    {
        $galeris = Galeri::orderBy('tanggal_upload', 'desc')->paginate(12);
        return view('admin.galeri.index', compact('galeris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_foto' => 'required|string|max:255',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
        ]);

        $data = $request->all();
        $data['tanggal_upload'] = now();

        if ($request->hasFile('file_foto')) {
            $path = $request->file('file_foto')->store('galeri', 'public');
            $data['file_foto'] = $path;
        }

        Galeri::create($data);

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil ditambahkan ke galeri');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        
        if ($galeri->file_foto && Storage::disk('public')->exists($galeri->file_foto)) {
            Storage::disk('public')->delete($galeri->file_foto);
        }
        
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil dihapus dari galeri');
    }
}
