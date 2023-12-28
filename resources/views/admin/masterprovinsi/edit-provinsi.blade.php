@extends('admin.partials.main')

@section('title')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Province</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Province</li>
    </ol>
  </div>
@endsection

@section('content')
<div class="col-lg-12">
  <!-- Form Basic -->
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('master-provinsi') }}'">
        Back
     </button>    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('update-provinsi', $provinsi->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group row mb-3">
          <label for="id_provinsi" class="col-sm-2 col-form-label">ID</label>
          <div class="col-sm-2">
              <input type="text" class="form-control form-control-sm" id="id_provinsi" name="id_provinsi" readonly value="{{ $provinsi->id }}">
          </div>
      </div>      
            <div class="form-group row mb-3">
              <label for="nama_provinsi" class="col-sm-2 col-form-label">Nama Provinsi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="nama_provinsi" name="nama_provinsi" value="{{ old('nama_provinsi', $provinsi->nama_provinsi) }}">
            </div>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-sm btn-success" style="float: right; display: inline-block;">
                  Save
              </button>
          </div>          
      </form>
    </div>
  </div>
</div>
@endsection