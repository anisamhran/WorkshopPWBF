@extends('admin.partials.main')

@section('content')
<h3>Form Data Pekerja Baru</h3>
<div class="card">
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
                    <input type="text" class="form-control form-control-sm @error('nama_pekerja') is-invalid @enderror" id="nama_pekerja" name="nama_pekerja">
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
                    <input type="date" class="form-control form-control-sm @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir">
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
                    <textarea class="form-control form-control-sm @error('alamat_pekerja') is-invalid @enderror" id="alamat_pekerja" name="alamat_pekerja" rows="3"></textarea>
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
                    <input type="text" class="form-control form-control-sm @error('no_hp_ewallet') is-invalid @enderror" id="no_hp_ewallet" name="no_hp_ewallet">
                    @error('no_hp_ewallet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_hp_ewallet" class="col-sm-2 col-form-label">Gaji</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm @error('no_hp_ewallet') is-invalid @enderror" id="no_hp_ewallet" name="gaji">
                    @error('no_hp_ewallet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        
            <!-- File Input for Foto Pekerja -->
            <div class="row mb-3">
                <label for="foto_pekerja" class="col-sm-2 col-form-label">Foto Pekerja</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file @error('foto_pekerja') is-invalid @enderror" id="foto_pekerja" name="foto_pekerja">
                    @error('foto_pekerja')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        
            <!-- File Input for KTP Pekerja -->
            <div class="row mb-3">
                <label for="ktp_pekerja" class="col-sm-2 col-form-label">KTP Pekerja</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file @error('ktp_pekerja') is-invalid @enderror" id="ktp_pekerja" name="ktp_pekerja">
                    @error('ktp_pekerja')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        
            <!-- Textarea for Deskripsi Pekerja -->
            <div class="row mb-3">
                <label for="deskripsi_pekerja" class="col-sm-2 col-form-label">Deskripsi Pekerja</label>
                <div class="col-sm-10">
                    <textarea class="form-control form-control-sm @error('deskripsi_pekerja') is-invalid @enderror" id="deskripsi_pekerja" name="deskripsi_pekerja" rows="5"></textarea>
                    @error('deskripsi_pekerja')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        
            <!-- Select Dropdown for Kota -->
            <div class="row mb-3">
                <label for="kota_id" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-sm @error('kota_id') is-invalid @enderror" id="kota_id" name="kota_id">
                        <option value="">Pilih Kota</option>
                        @foreach ($kotas as $kota)
                            <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                        @endforeach
                    </select>
                    @error('kota_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        
            <!-- Submit Button -->
            <div class="row mb-3">
                <label for="kategoripekerja_id" class="col-sm-2 col-form-label">Kategori Pekerja</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-sm @error('kategoripekerja_id') is-invalid @enderror" id="kategoripekerja_id" name="kategoripekerja_id">
                        @foreach ($kategori_pekerja as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
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

@endsection
