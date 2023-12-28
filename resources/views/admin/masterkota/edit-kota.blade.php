@extends('admin.partials.main')

@section('title')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit City</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Province</li>
    </ol>
  </div>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('master-kota') }}'">
         Back
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('update-kota', $kota->id) }}">
        @csrf
        @method('PUT')
            <div class="form-group row mb-3">
              <label for="id_provinsi" class="col-sm-2 col-form-label">ID</label>
              <div class="col-sm-2">
                  <input type="text" class="form-control form-control-sm" id="id_provinsi" name="id_provinsi" readonly value="{{ $kota->id }}">
              </div>
            </div>      
            <div class="row mb-3">
              <label for="nama_kota" class="col-sm-2 col-form-label">Nama Kota</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="nama_kota" name="nama_kota" value="{{ old('nama_kota', $kota->nama_kota) }}">
            </div>
            </div>
            <div class="row mb-3">
              <label for="nama_provinsi" class="col-sm-2 col-form-label">Provinsi</label>
              <div class="col-sm-10">
                  <select name="provinsi_id" class="form-control" id="nama_provinsi">
                      @foreach ($provinsis as $provinsi)
                          <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                      @endforeach
                  </select>
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