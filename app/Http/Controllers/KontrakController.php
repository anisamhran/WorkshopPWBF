<?php

namespace App\Http\Controllers;

use App\Models\PekerjaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\transaksi_kontrak; // Replace kontrak with the actual model you are using
use App\Models\User;

class KontrakController extends Controller
{
    
    public function notifikasi($id)
    {
        $user = auth()->user();
        $kontrak = transaksi_kontrak::find($id);
        return view('frontend.detail-pembayaran', compact('kontrak','user'));
    }
    
    public function form_kontrak($id)
    {
        $pekerja = PekerjaModel::find($id);
        return view('frontend.kontrak', compact('pekerja'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kebutuhan' => 'required|string',
            'tgl_mulai_kontrak' => 'required|date',
            'pekerja_id' => 'required',
        ]);


        $pekerja = PekerjaModel::find($request->input('pekerja_id'));
         $gaji = $pekerja->gaji;

        // Create a new instance of your model
        $kontrak = new transaksi_kontrak(); // Replace kontrak with the actual model you are using
        $user = auth()->user();

        $kontrak->status = 'unpaid';

        // Set the model attributes with the form data
        // $kontrak->status = 'unpaid';
        $kontrak->kebutuhan = $request->input('kebutuhan');
        $kontrak->tgl_mulai_kontrak = $request->input('tgl_mulai_kontrak');
        $kontrak->users_id = Auth::id();
        $pekerja_id = $request->input('pekerja_id');
        $kontrak->pekerja_id = $pekerja_id;
        $kontrak->pekerja_id = $request->input('pekerja_id');


        $tgl_mulai = strtotime($request->input('tgl_mulai_kontrak'));
        // $kontrak->lama_kontrak = $diff_in_days;

        $interview = 150000;
        // $kontrak->gaji = $gaji; // Assuming 'gaji' is provided in the form
        $kontrak->total_price = $interview;
        // Save the model to the database
        $kontrak->save();

           // Set Midtrans configuration
    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    \Midtrans\Config::$isProduction = false; // Set to true for production
    \Midtrans\Config::$isSanitized = true; // Set to true for production
    \Midtrans\Config::$is3ds = true; // Set to true for production

    // Create Snap API parameters
    $params = [
        'transaction_details' => [
            'order_id' => $kontrak->id,
            'gross_amount' => $kontrak->total_price,
        ],
        'customer_details' => [
            'nama' => $user->nama,
            'nomor_hp' => $user->no_hp,
        ],
    ];

    // Get Snap token
    $snapToken = \Midtrans\Snap::getSnapToken($params);
            // dd($snapToken);
                    // Redirect back or to a success page
    return view('frontend.pembayaran', compact('kontrak', 'snapToken', 'user'));    
}

        public function callback(Request $request)
        {   
            $serverKey = config('midtrans.server_key');
            $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
            if ($hashed == $request->signature_key) {
                Log::info('Callback Data: ' . json_encode($request->all()));
            
                if ($request->transaction_status == 'capture') {
                    Log::info('Updating status to paid...');
                    $kontrak = transaksi_kontrak::find($request->order_id);
                    $kontrak->update(['status' => 'paid']);
                    Log::info('Status updated successfully.');
                }
            }
            
        }

        public function history()
        {
            // Get the currently authenticated user
            $user = Auth::user();
        
            // Retrieve all transactions associated with the user
            $orders = transaksi_kontrak::where('users_id', $user->id)->get();
        
            // Pass the transactions to the view
            return view('frontend.transaction-history', compact('orders'));
        }

        
}
