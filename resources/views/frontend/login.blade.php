@extends('frontend.partials.main')
@section('title')
    Login
@endsection

@section('content')
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="content-area recent-property padding-top-40">
        <div class="container">  
            <div class="row">
                <div class="col-md-8 col-md-offset-2"> 
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
                            <form action="{{ route('login-proses') }}" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label for="role">Login Sebagai </label>
                                        <select name="role_id" class="form-control" id="role" type="number">
                                            <option value="2">Customer</option>
                                            <option value="1">Admin</option>
                                            <option value="3">Manager</option>
                                        </select>
                                    </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default"> Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
           
        </div>
    </div> 
@endsection

