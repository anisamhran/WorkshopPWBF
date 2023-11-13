<?php

namespace App\Http\Controllers;

use App\Models\KotaModel;
use App\Models\PekerjaModel;
use App\Models\ProvinsiModel;
use Illuminate\Http\Request;

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
    public function notifikasi()
    {
        // $provinsis = ProvinsiModel::all();
        // $kotas = KotaModel::all();

        return view('frontend.notification');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pekerja()
    {
        $provinsis = ProvinsiModel::all();
        $kotas = KotaModel::all();
        return view('frontend.pekerja',compact('provinsis', 'kotas'));
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

    public function contact()
    {
        return view('frontend.contact');
    }
  
    public function form_pembayaran()
    {
        return view('frontend.pembayaran');
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
