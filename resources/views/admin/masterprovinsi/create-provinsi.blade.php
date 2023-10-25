@extends('admin.partials.main')

@section('content')
<h3>Form Data Provinsi Baru</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('master-provinsi') }}'">
         Kembali
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('save-provinsi') }}">
        @csrf
        <form>
            <div class="row mb-3">
              <label for="nama_provinsi" class="col-sm-2 col-form-label">Nama Provinsi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('nama_provinsi') is-invalid @enderror" id="nama_provinsi" name="nama_provinsi">
                @error('nama_provinsi')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
            @enderror
            </div>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-sm btn-success" style="float: right; display: inline-block;">
                  Save
              </button>
          </div>          
              </div>
            </form>
</div>

@endsection