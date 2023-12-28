@extends('admin.partials.main')

@section('title')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Province</h1>
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
                <form method="POST" action="{{ route('save-pekerja') }}" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row mb-3">
                        <label for="nama_pekerja" class="col-sm-2 col-form-label">Nama Pekerja</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm " id="nama_pekerja" name="nama_pekerja">
                        </div>
                    </div>
                
                    <div class="row mb-3">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control form-control-sm " id="tgl_lahir" name="tgl_lahir">
                        </div>
                    </div>
                
                    <div class="row mb-3">
                        <label for="alamat_pekerja" class="col-sm-2 col-form-label">Alamat Pekerja</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm " id="alamat_pekerja" name="alamat_pekerja" rows="3"></textarea>
                        </div>
                    </div>
                
                    <div class="row mb-3">
                        <label for="no_hp_ewallet" class="col-sm-2 col-form-label">No. HP E-Wallet</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm " id="no_hp_ewallet" name="no_hp_ewallet">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="no_hp_ewallet" class="col-sm-2 col-form-label">Gaji</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control form-control-sm " id="no_hp_ewallet" name="gaji">
                        </div>
                    </div>
                
                    <!-- File Input for Foto Pekerja -->
                    <div class="row mb-3">
                        <label for="foto_pekerja" class="col-sm-2 col-form-label">Foto Pekerja</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file " id="foto_pekerja" name="foto_pekerja">
                        </div>
                    </div>
                
                    <!-- File Input for KTP Pekerja -->
                    <div class="row mb-3">
                        <label for="ktp_pekerja" class="col-sm-2 col-form-label">KTP Pekerja</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file " id="ktp_pekerja" name="ktp_pekerja">
                        </div>
                    </div>
                
                    <!-- Textarea for Deskripsi Pekerja -->
                    <div class="row mb-3">
                        <label for="deskripsi_pekerja" class="col-sm-2 col-form-label">Deskripsi Pekerja</label>
                        <div class="col-sm-10">
                            <textarea class="form-control form-control-sm" name="deskripsi_pekerja" rows="5"></textarea>
                        </div>
                    </div>
                
                    <!-- Select Dropdown for Kota -->
                    <div class="row mb-3">
                        <label for="kota_id" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <select class="form-control form-control-sm"  id="kota_id" name="kota_id">
                                <option value="">Pilih Kota</option>
                                @foreach ($kotas as $kota)
                                    <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                    <!-- Submit Button -->
                    <div class="row mb-3">
                        <label for="kategoripekerja_id" class="col-sm-2 col-form-label">Kategori Pekerja</label>
                        <div class="col-sm-10">
                            <select class="form-control form-control-sm " id="kategoripekerja_id" name="kategoripekerja_id">
                                @foreach ($kategori_pekerja as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
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
