<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPekerjaModel;

class KategoriPekerjaController extends Controller
{
    public function index(){
        $kategoris = KategoriPekerjaModel::all();
        return view('admin.kategoripekerja.data-kategori', compact('kategoris'));
    }

    public function create()
    { 
        $lastId = KategoriPekerjaModel::max('id');

        // Menambahkan 1 untuk mendapatkan ID baru
        $newlyCreatedId = $lastId + 1;
        return view('admin.kategoripekerja.create-kategori', compact('newlyCreatedId'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new KategoriPekerjaModel();
        $kategori->nama_kategori = $request->input('nama_kategori');
        $kategori->id;
        $kategori->save();
    
        return redirect()->route('master-kategori')->with('success', 'Data kategori berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // Menambahkan 1 untuk mendapatkan ID baru
        $kategori = KategoriPekerjaModel::find($id);
        return view('admin.kategoripekerja.edit-kategori', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = KategoriPekerjaModel::find($id);
    
        $kategori->nama_kategori = $request->input('nama_kategori');
        
        $kategori->save();
        
        return redirect()->route('master-kategori')->with('success', 'Data kategori berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = KategoriPekerjaModel::find($id);
    
        // Delete the kategori model.
        $kategori->delete();
    
        // Redirect to the data-kategori route with a success message.
        return redirect()->route('master-kategori')->with('success', 'Data kategori berhasil dihapus secara permanen');
    }

    public function deleted()
    {
        $trashes = KategoriPekerjaModel::onlyTrashed()->get();

        return view('admin.kategoripekerja.deleted-kategori', compact('trashes'));
    }

    public function restore($id)
    {
        $kategori = KategoriPekerjaModel::withTrashed()->find($id);
    
        $kategori->restore();
    
        $kategori->deleted_at = null;
        $kategori->save();
    
        return redirect()->route('master-kategori')->with('success', 'Data kategori berhasil dikembalikan');
    }
}
