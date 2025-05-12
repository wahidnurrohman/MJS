<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        $databarang = Barang::all();
        return view('Admin.databarang', compact('databarang'));
    }

    public function create()
    {
        return view('Admin.databarang-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,jpg|max:5048',
            'price' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ]);

        // Simpan gambar ke storage
        $imagePath = $request->file('image')->store('databarang', 'public');

        // Simpan ke database
        Barang::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $imagePath,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect()->route('databarang')->with('success', 'Data berhasil ditambahkan');
    }

    // Hapus user
    public function destroy($id)
    {
        $databarang = Barang::findOrFail($id);
        $databarang->delete();

        return redirect()->route('databarang')->with('success', 'User berhasil dihapus');
    }

    // public function show($id)
    // {
    //     $databarang = Barang::findOrFail($id);
    //     return view('databarang.show', compact('databarang'));
    // }

    public function welcome()
    {
        $databarang = Barang::all();
        return view('welcome', compact('databarang'));
    }

    // public function welcome()
    // {
    //     $databarang = Barang::all();
    //     // $pricing = Pricing::all();
    //     // $experience = Experience::all();
    //     return view('welcome', compact('databarang'));
    // }
}
