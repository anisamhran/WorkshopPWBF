@extends('frontend.partials.main')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Pembayaran') }}</div>

                <div class="card-body">
                        <div class="mb-3">
                          <label for="nama">Nama Lengkap: {{ $user->nama }}</label>                             
                        </div>

                        <div class="mb-3">
                          <label for="nama">Alamat: {{ $user->alamat }}</label>                          
                        </div>

                        <div class="mb-3">
                          <label for="nama">Nomor Whatsapp: {{ $user->no_hp }}</label>                          
                        </div>

                        <div class="mb-3">
                          <label for="nama">Total Bayar: Rp {{ number_format( $kontrak->total_price , 0, ',', '.') }}</label>                          
                        </div>

                        <div class="mb-3">
                          <label for="nama">Status Bayar: {{ $kontrak->status }}</label>                          
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

