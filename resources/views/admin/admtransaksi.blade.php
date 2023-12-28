@extends('admin.partials.main')

@section('title')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Province</li>
    </ol>
  </div>
@endsection

@section('content')
<div class="col lg-12">
<div class="card">
    {{-- <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('addpekerja') }}'">
        <i class="fas fa-plus-circle"></i> Tambah Pekerja
      </button>
    </div> --}}
    <div class="card-body">
     <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                    <th>ID Transaksi</th>
                    <th>ID User</th>
                    <th>Waktu</th>
                    <th>Tgl Interview</th>
                    <th>Status Pembayaran</th>
                    <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->users_id }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->tgl_mulai_kontrak }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                      <select name="status_penanganan">
                      <option value="sudah_wawancara" {{ $item->status_penanganan == 'sudah_wawancara' ? 'selected' : '' }}>Belum Wawancara</option>
                      <option value="belum_wawancara" {{ $item->status_penanganan == 'belum_wawancara' ? 'selected' : '' }}>Sudah Wawancara</option>
                      </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
     </table>
    </div>
  </div>   
</div>
@endsection