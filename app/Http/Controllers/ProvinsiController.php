<?php

namespace App\Http\Controllers;

use App\Models\ProvinsiModel;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsis = ProvinsiModel::all();
        return view('admin.masterprovinsi.data-provinsi',compact('provinsis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masterprovinsi.create-provinsi');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $provinsi = new ProvinsiModel();
        $provinsi->nama_provinsi = $request->input('nama_provinsi');
        $provinsi->id;
        $provinsi->save();
    
        return redirect()->route('master-provinsi')->with('success', 'Data provinsi berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provinsi = ProvinsiModel::find($id);
        return view('admin.masterprovinsi.edit-provinsi', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $provinsi = ProvinsiModel::find($id);
    
        $provinsi->nama_provinsi = $request->input('nama_provinsi');
        
        $provinsi->save();
        
        return redirect()->route('masterprovinsi')->with('success', 'Data provinsi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $provinsi = ProvinsiModel::find($id);
    
        // Delete the provinsi model.
        $provinsi->delete();
    
        // Redirect to the data-provinsi route with a success message.
        return redirect()->route('master-provinsi')->with('success', 'Data provinsi berhasil dihapus secara permanen');
    }

    public function deleted()
    {
        $trashes = ProvinsiModel::onlyTrashed()->get();

        return view('admin.masterprovinsi.deleted-provinsi', compact('trashes'));
    }

    public function restore($id)
    {
        $provinsi = ProvinsiModel::withTrashed()->find($id);
    
        $provinsi->restore();
    
        $provinsi->deleted_at = null;
        $provinsi->save();
    
        return redirect()->route('master-provinsi')->with('success', 'Data provinsi berhasil dikembalikan');
    }
}
