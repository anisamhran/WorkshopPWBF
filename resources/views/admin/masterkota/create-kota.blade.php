@extends('admin.partials.main')

@section('content')
<h3>Form Data Pekerja Baru</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('master-kota') }}'">
         Kembali
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('save-kota') }}">
        @csrf
        <form>
            <div class="row mb-3">
              <label for="nama_kota" class="col-sm-2 col-form-label">Nama Kota</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('nama_kota') is-invalid @enderror" id="nama_kota" name="nama_kota">
                @error('nama_kota')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
            @enderror
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
          
                      <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-success">
                            Save
                        </button>
                      </div>
                    </div>
              </div>
            </div>
          </form>

@endsection