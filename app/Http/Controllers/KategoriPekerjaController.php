<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriPekerjaController extends Controller
{
    public function index(){
        $kategoris = KategoriPekerjaModel::all();
        return view('frontend.homepage', compact('kategoris'))
    };
}
