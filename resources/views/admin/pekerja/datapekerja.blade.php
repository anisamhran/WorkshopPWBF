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
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('create-pekerja') }}'">
                <i class="fas fa-plus-circle"></i> Tambah Pekerja
            </button>
        </div>
        <div class="table-responsive p-3">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID Pekerja</th>
                        <th>Nama Pekerja</th>
                        <th>Tanggal Lahir</th>
                        <th>Kota</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Gaji</th>
                        <th>Foto</th>
                        <th>KTP</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pekerjas as $pekerja)
                    <tr>
                        <td>{{ $pekerja->id }}</td>
                        <td>{{ $pekerja->nama_pekerja }}</td>
                        <td>{{ $pekerja->tgl_lahir }}</td>
                        <td>{{ $pekerja->kota->nama_kota }}</td>
                        <td>{{ $pekerja->alamat_pekerja }}</td>
                        <td>{{ $pekerja->no_hp_ewallet }}</td>
                        <td>{{ $pekerja->gaji }}</td>
                        <td><img src="{{ asset('uploads/foto_pekerja/' . $pekerja->foto_pekerja) }}" alt="Foto Pekerja" width="50"></td>
                        <td><img src="{{ asset('uploads/ktp_pekerja/' . $pekerja->ktp_pekerja)}}" alt="KTP Pekerja" width="50"></td>                    
                        <td>{{ $pekerja->kategori_pekerja->nama_kategori }}</td>
                        <td>{{ $pekerja->deskripsi_pekerja }}</td>
                        <td>
                            <a href="{{ route('edit-pekerja', $pekerja->id) }}" class="btn btn-sm btn-warning" title="Edit data">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form method="POST" action="{{ route('destroy-pekerja', $pekerja->id) }}" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mt-2" title="Hapus data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
