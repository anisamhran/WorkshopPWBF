@extends('admin.partials.main')

@section('title')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pekerja</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Province</li>
    </ol>
  </div>
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card mb-4">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('master-pekerja') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('update-pekerja', $pekerja->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="nama_pekerja" class="col-sm-2 col-form-label">Nama Pekerja</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm @error('nama_pekerja') is-invalid @enderror"
                            id="nama_pekerja" name="nama_pekerja" value="{{ $pekerja->nama_pekerja }}">
                        @error('nama_pekerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm @error('tgl_lahir') is-invalid @enderror"
                            id="tgl_lahir" name="tgl_lahir" value="{{ $pekerja->tgl_lahir }}">
                        @error('tgl_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat_pekerja" class="col-sm-2 col-form-label">Alamat Pekerja</label>
                    <div class="col-sm-10">
                        <textarea
                            class="form-control form-control-sm @error('alamat_pekerja') is-invalid @enderror"
                            id="alamat_pekerja" name="alamat_pekerja"
                            rows="3">{{ $pekerja->alamat_pekerja }}</textarea>
                        @error('alamat_pekerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="no_hp_ewallet" class="col-sm-2 col-form-label">No. HP E-Wallet</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-sm @error('no_hp_ewallet') is-invalid @enderror"
                            id="no_hp_ewallet" name="no_hp_ewallet" value="{{ $pekerja->no_hp_ewallet }}">
                        @error('no_hp_ewallet')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto_pekerja" class="col-sm-2 col-form-label">Foto Pekerja</label>
                    <div class="col-sm-10">
                        <input type="file"
                            class="form-control-file @error('foto_pekerja') is-invalid @enderror"
                            id="foto_pekerja" name="foto_pekerja">
                        @error('foto_pekerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img src="{{ asset('uploads/foto_pekerja/' . $pekerja->foto_pekerja) }}" alt="Foto Pekerja" width="50">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ktp_pekerja" class="col-sm-2 col-form-label">KTP Pekerja</label>
                    <div class="col-sm-10">
                        <input type="file"
                            class="form-control-file @error('ktp_pekerja') is-invalid @enderror"
                            id="ktp_pekerja" name="ktp_pekerja">
                        @error('ktp_pekerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <img src="{{ asset('uploads/ktp_pekerja/' . $pekerja->ktp_pekerja) }}" alt="KTP Pekerja" width="50">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi_pekerja" class="col-sm-2 col-form-label">Deskripsi Pekerja</label>
                    <div class="col-sm-10">
                        <textarea
                            class="form-control form-control-sm @error('deskripsi_pekerja') is-invalid @enderror"
                            id="deskripsi_pekerja" name="deskripsi_pekerja"
                            rows="5">{{ $pekerja->deskripsi_pekerja }}</textarea>
                        @error('deskripsi_pekerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi_pekerja" class="col-sm-2 col-form-label">Gaji Pekerja</label>
                    <div class="col-sm-10">
                        <textarea
                            class="form-control form-control-sm @error('deskripsi_pekerja') is-invalid @enderror"
                            id="deskripsi_pekerja" name="gaji"
                            rows="5">{{ $pekerja->gaji }}</textarea>
                        @error('deskripsi_pekerja')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kota_id" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-sm @error('kota_id') is-invalid @enderror"
                            id="kota_id" name="kota_id">
                            <option value="">Pilih Kota</option>
                            @foreach ($kotas as $kota)
                                <option value="{{ $kota->id }}" {{ $kota->id == $pekerja->kota_id ? 'selected' : '' }}>
                                    {{ $kota->nama_kota }}</option>
                            @endforeach
                        </select>
                        @error('kota_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kategoripekerja_id" class="col-sm-2 col-form-label">Kategori Pekerja</label>
                    <div class="col-sm-10">
                        <select
                            class="form-control form-control-sm @error('kategoripekerja_id') is-invalid @enderror"
                            id="kategoripekerja_id" name="kategoripekerja_id">
                            <option value="">Pilih Kategori Pekerja</option>
                            @foreach ($kategori_pekerja as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ $kategori->id == $pekerja->kategoripekerja_id ? 'selected' : '' }}>
                                    {{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                        @error('kategoripekerja_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12">
                    <button type="submit" class="btn btn-sm btn-success" style="float: right; display: inline-block;">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
