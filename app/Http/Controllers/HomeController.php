<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('frontend.homepage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pekerja()
    {
        return view('frontend.pekerja');
    }
    public function detail_pekerja()
    {
        return view('frontend.detailpekerja.pekerja-1');
    }


    public function review()
    {
        return view('frontend.review');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function form_kontrak()
    {
        return view('frontend.kontrak');
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
