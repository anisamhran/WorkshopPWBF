<?php

namespace App\Http\Controllers;

use App\Models\transaksi_kontrak;
use Illuminate\Http\Request;
use App\Models\pembayaran; // Replace kontrak with the actual model you are using

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        
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
        // Validate the form data
        $request->validate([
            'formktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload (Bukti Pembayaran)
        if ($request->hasFile('formktp')) {
            $file = $request->file('formktp');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads/bukti_pembayaran', $fileName, 'public'); // Save the file to the storage/uploads/bukti_pembayaran directory
        } else {
            // Handle the case where no file is uploaded
            return redirect()->back()->with('error', 'Please upload the proof of payment.');
        }

        // Create a new instance of your model
        $pembayaran = new pembayaran(); // Replace Pembayaran with the actual model you are using

        // Set the model attributes with the form data
        $pembayaran->kode_pembayaran = '827392736327'; // You may generate a unique code here
        $pembayaran->bukti_pembayaran = $fileName; // Save the file name in the database
        $pembayaran->transaksi_kontrak_id = $request->input('transaksi_kontrak');

        // Save the model to the database
        $pembayaran->save();

        // Redirect back or to a success page
        return redirect()->route('notifikasi')->with('success', 'Pembayaran berhasil disimpan.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
