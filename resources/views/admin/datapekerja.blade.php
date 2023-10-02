@extends('admin.partials.main')

@section('content')
<h3>Data Pekerja</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('pekerja/add') }}'">
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
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Pekerja</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Foto</th>
                    <th>KTP</th>
                    <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pekerja as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $row->txtid}}</td>
                    <td>{{ $row->txtnama }}</td>
                    <td>{{ $row->txttgl }}</td>
                    <td>{{ $row->txtalamat }}</td>
                    <td>{{ $row->txtnohp }}</td>
                    <td>{{ $row->formfoto }}</td>
                    <td>{{ $row->formktp }}</td>
                    {{-- <td>{{ $row->id }}</td> --}}

                </tr>
            @endforeach
        </tbody>
     </table>
    </div>
  </div>   
@endsection