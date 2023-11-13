<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi_kontrak; // Replace kontrak with the actual model you are using
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KontrakController extends Controller
{

    public function notifikasi()
    {
        return view('frontend.notification');
    }
    public function form_kontrak()
    {
        return view('frontend.kontrak');
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'lama_kontrak' => 'required|integer',
            'nomor_hp' => 'required|string',
            'email' => 'required|email',
            'kebutuhan' => 'required|string',
            'tgl_mulai_kontrak' => 'required|date',
            'tgl_akhir_kontrak' => 'required|date',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation as needed
        ]);

        // Handle file upload (Fotocopy KTP)
        if ($request->hasFile('foto_ktp')) {
            $file = $request->file('foto_ktp');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads/ktp_customer', $fileName, 'public'); // Save the file to the storage/uploads/ktp_customer directory
        } else {
            $fileName = null;
        }

        // Create a new instance of your model
        $kontrak = new transaksi_kontrak(); // Replace kontrak with the actual model you are using

        // Set the model attributes with the form data
        $kontrak->nama = $request->input('nama');
        $kontrak->alamat = $request->input('alamat');
        $kontrak->lama_kontrak = $request->input('lama_kontrak');
        $kontrak->nomor_hp = $request->input('nomor_hp');
        $kontrak->email = $request->input('email');
        $kontrak->kebutuhan = $request->input('kebutuhan');
        $kontrak->tgl_mulai_kontrak = $request->input('tgl_mulai_kontrak');
        $kontrak->tgl_akhir_kontrak = $request->input('tgl_akhir_kontrak');
        $kontrak->foto_ktp = $fileName; // Save the file name in the database
        $kontrak->users_id = Auth::id();
        $kontrak->pekerja_id = $request->input('pekerja_id');
        // Save the model to the database
        $kontrak->save();

        // Redirect back or to a success page
        return redirect()->route('notifikasi')->with('success', 'Data provinsi berhasil disimpan');
    }
}
