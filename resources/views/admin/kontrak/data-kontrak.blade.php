@extends('frontend.partials.main')

@section('title')
    <h1>Data Pengajuan Kontrak</h1>
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
      </div>
      <div class="table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>



{{-- <div class="register-area" style="background-color: rgb(249, 249, 249);">
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
</div> --}}
@endsection
