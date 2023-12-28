<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Models\KategoriPekerjaModel;
use App\Models\KotaModel;
use App\Models\PekerjaModel;
use App\Models\ProvinsiModel;
use App\Models\transaksi_kontrak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $provinsis = ProvinsiModel::all();
        $kotas = KotaModel::all();
        $pekerjas = PekerjaModel::all()->take(5);
        return view('frontend.homepage',compact('provinsis', 'kotas','pekerjas'));
    }
    public function transaction()
    {
        $transactions = transaksi_kontrak::all();

        return view('admin.admtransaksi', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pekerja()
    {
        $provinsis = ProvinsiModel::all();
        $kotas = KotaModel::all();
        $pekerjas = PekerjaModel::all();
        $kategoris = KategoriPekerjaModel::all();
        return view('frontend.pekerja',compact('provinsis', 'kotas', 'pekerjas', 'kategoris'));
    }
    public function detail_pekerja($id)
    {
        $pekerja = PekerjaModel::findOrFail($id); // Sesuaikan dengan model dan query Anda
        return view('frontend.pekerja-details', compact('pekerja'));    
    }


    public function review()
    {
        return view('frontend.review');
    }

    public function admcontact()
    {
        
        $messages = ContactModel::all();
        return view('admin.admessages',compact('messages'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
  
    // public function form_pembayaran($id)
    // {
    //     $transaksi_kontrak = transaksi_kontrak::findOrFail($id);
    //     return view('frontend.pembayaran', compact('transaksi_kontrak'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function storemessage(Request $request)
    {
        $message = new ContactModel();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->messages = $request->input('messages');
        $message->save();
    
        return redirect()->route('pekerja')->with('Message berhasil dikirim');
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
