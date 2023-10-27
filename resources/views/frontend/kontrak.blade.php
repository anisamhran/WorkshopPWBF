@extends('frontend.partials.main')

@section('title')
   <h1>Form Pengajuan Kontrak</h1> 
@endsection

@section('content')
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="content-area recent-property padding-top-40">
        <div class="container">  
            <div class="row">
                <div class="col-md-8 col-md-offset-2"> 
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Form Pengajuan Kontrak : </h2> 
                            <form action="#" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Tujuan</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                    <div class="form-group">
                                        <label for="lama_kontrak">Lama Kontrak </label>
                                        <select name="lama_kontrak" class="form-control" id="lama_kontrak" type="number">
                                            <option value="1">1 Bulan</option>
                                            <option value="2">2 Bulan</option>
                                            <option value="3">3 Bulan</option>
                                        </select>
                                    </div>
                                <div class="form-group">
                                    <label for="nomor_hp">Nomor Whatsapp</label>
                                    <input type="text" name="nomor_hp" class="form-control" id="nohp">
                                </div>
                                <div class="form-group">
                                    <label for="nomor_hp">Email</label>
                                    <input type="text" name="nomor_hp" class="form-control" id="nohp">
                                </div>
                                <div class="form-group">
                                    <label for="kebutuhan">Deskripsi Kebutuhan</label>
                                    <input type="text" name="kebutuhan" class="form-control" id="kebutuhan">
                                </div>
                                <div class="form-group">
                                    <label for="kebutuhan">Fotocopy KTP</label>
                                    <input class="form-control form-control-sm @error('formktp') is-invalid @enderror" id="formktp" type="file">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Kirim Pengajuan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
           
        </div>
    </div> 

@endsection