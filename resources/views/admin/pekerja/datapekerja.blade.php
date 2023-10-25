@extends('admin.partials.main')

@section('content')
<h3>Data Pekerja</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('addpekerja') }}'">
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
                    <th>Foto</th> 
                    <th>KTP</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach ($pekerjas as $pekerja)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $pekerja->txtid}}</td>
                    <td>{{ $pekerja->txtnama }}</td>
                    <td>{{ $pekerja->txttgl }}</td>
                    <td>{{ $pekerja->txtalamat }}</td>
                    <td>{{ $pekerja->txtnohp }}</td>
                    <td>{{ $pekerja->formfoto }}</td>
                    <td>{{ $pekerja->formktp }}</td>
                    <td>{{ $pekerja->id }}</td>

                </tr>
            @endforeach
        </tbody> --}}
     </table>
    </div>
  </div>   
@endsection