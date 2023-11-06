@extends('admin.partials.main')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('master-kota') }}'">
         Kembali
      </button>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('update-kota', $kota->id) }}">
            @csrf
            @method('PUT')
        <form>
            <div class="row mb-3">
                <label for="nama_provinsi" class="col-sm-2 col-form-label">Nama Kota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" id="nama_provinsi" name="nama_kota" value="{{ old('nama_kota', $kota->nama_kota) }}">
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