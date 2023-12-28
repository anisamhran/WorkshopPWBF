<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $user = User::find($id);

        return view('frontend.profil',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
        {
            $user = User::find($id);

            return view('frontend.edit-profil', compact('user'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Temukan data Kota berdasarkan ID
        $user = User::find($id);

        // Update kolom-kolom yang diperlukan
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat');
        $user->no_hp = $request->input('no_hp');
        $user->tgl_lahir = $request->input('tgl_lahir');

        // Simpan perubahan
        $user->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('profil',$user->id)->with('success', 'Data provinsi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
