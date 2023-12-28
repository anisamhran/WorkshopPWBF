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
<div class="card">
    {{-- <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('addpekerja') }}'">
        <i class="fas fa-plus-circle"></i> Tambah Pekerja
      </button>
    </div> --}}
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $item)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->subject }}</td>
                    <td>{{ $item->messages }}</td>
                </tr>
            @endforeach
        </tbody>
     </table>
    </div>
  </div>   
@endsection