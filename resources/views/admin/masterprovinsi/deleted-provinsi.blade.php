@extends('admin.partials.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Provinsi</th>
                        <th>Nama Provinsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trashes as $trash)
                    <tr>
                        <th>{{ $trash->id}}</th>
                        <td>{{ $trash->nama_provinsi }}</td>
                        <td>
                            <a href="{{ route('restore-provinsi', $trash->id) }}" class="btn btn-outline-primary btn-sm mr-2" title="Kembalikan Data" onclick="return confirm('Kembalikan data provinsi ini?')">
                                <i class="fas fa-download"></i> Kembalikan
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection