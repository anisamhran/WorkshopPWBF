@extends('admin.partials.main')

@section('content')
<h3>Data Pekerja</h3>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('create-pekerja') }}'">
            <i class="fas fa-plus-circle"></i> Tambah Pekerja
        </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

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
                    <td>{{ $pekerja->deskripsi_pekerja }}</td>
                    <td>
                        <a href="{{ route('edit-pekerja', $pekerja->id) }}" class="btn btn-sm btn-warning" title="Edit data">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form method="POST" action="{{ route('destroy-pekerja', $pekerja->id) }}" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
@endsection
