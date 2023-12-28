@extends('admin.partials.main')

@section('title')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">City</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Province</li>
    </ol>
  </div>
@endsection

@section('content')
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('create-kota') }}'">
        <i class="fas fa-plus-circle"></i> Add City
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
                    <th>ID Kota</th>
                    <th>Nama Kota</th>
                    <th>Provinsi</th>
                    <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kotas as $kota)
                <tr>
                    <th>{{ $kota->id }}</th>
                    <td>{{ $kota->nama_kota}}</td>
                    <td>{{ $kota->provinsi->nama_provinsi }}</td>
                    <td>
                      <button onclick="window.location='{{ route('edit-kota', $kota->id) }}'" type="button" class="btn btn-sm btn-warning" title="Edit data" >
                          <i class="fas fa-edit"></i> Edit
                      </button>
                      <form method="POST" action="{{ route('destroy-kota', $kota->id) }}" style="display: inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" title="Hapus data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                              <i class="fas fa-trash-alt"></i>Delete
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