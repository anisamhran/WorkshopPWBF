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
                            <h2>Form Pembayaran </h2> 
                            <form action="#" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Kode Pembayaran Anda : 827392736327</label>
                                       <br>
                                       Silakan lakukan pembayaran sebelum 21 Oktober 14.56                               
                                     </div>
                                     <div class="form-group">
                                    <label for="kebutuhan">Unggah Bukti Pembayaran</label>
                                    <input class="form-control form-control-sm @error('formktp') is-invalid @enderror" id="formktp" type="file">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
           
        </div>
    </div> 

@endsection