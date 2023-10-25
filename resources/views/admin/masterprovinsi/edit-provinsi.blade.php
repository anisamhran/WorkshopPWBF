@extends('admin.partials.main')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('master-provinsi') }}'">
         Kembali
      </button>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('update-provinsi', $provinsi->id) }}">
            @csrf
            @method('PUT')
        <form>
            <div class="row mb-3">
              <label for="nama_provinsi" class="col-sm-2 col-form-label">Nama provinsi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('nama_provinsi') is-invalid @enderror" id="nama_provinsi" name="nama_provinsi" value="{{old('nama_provinsi', $provinsi->nama_provinsi)}}">                @error('nama_provinsi')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
            @enderror
            </div>
            </div>
                      <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-success">
                            Simpan
                        </button>
                      </div>
                    </div>
              </div>
            </div>
          </form>
    </div>
  </div>
</div>

@endsection