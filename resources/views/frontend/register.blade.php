@extends('frontend.partials.main')
@section('title')
    Register
@endsection
@section('content')
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="content-area recent-property padding-top-40">
        <div class="container">  
            <div class="row">
                <div class="col-md-8 col-md-offset-2"> 
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>New account : </h2> 
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No hp</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                                </div>
                                <div class="form-group">
                                    <label for="password">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="password">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
           
        </div>
    </div>
</div>  
@endsection
