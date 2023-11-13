@extends('frontend.partials.main')

@section('title')
    <h1>Data Pengajuan Kontrak</h1>
@endsection

@section('content')
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="content-area recent-property padding-top-40">
        <div class="container">  
            <div class="row">
                <div class="col-md-8 col-md-offset-2"> 
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Data Pengajuan Kontrak</h2> 
                            <div class="form-group">
                                <label for="nama">Nama Lengkap:</label>
                                <p>{{ $data->nama }}</p>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Tujuan:</label>
                                <p>{{ $data->alamat }}</p>
                            </div>
                            <div class="form-group">
                                <label for="lama_kontrak">Lama Kontrak:</label>
                                <p>{{ $data->lama_kontrak }} Bulan</p>
                            </div>
                            <div class="form-group">
                                <label for="nomor_hp">Nomor Whatsapp:</label>
                                <p>{{ $data->nomor_hp }}</p>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <p>{{ $data->email }}</p>
                            </div>
                            <div class="form-group">
                                <label for="kebutuhan">Deskripsi Kebutuhan:</label>
                                <p>{{ $data->kebutuhan }}</p>
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp">Fotocopy KTP:</label>
                                <p>{{ $data->foto_ktp }}</p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div> 
</div>
@endsection
