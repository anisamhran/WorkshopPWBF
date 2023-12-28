@extends('frontend.partials.main')

@section('content')
    @foreach ($orders as $item)
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Pembayaran') }}</div>
    
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama">Waktu Transaksi: {{ $item->created_at }}</label>                          
                        </div>

                        <div class="mb-3">
                            <label for="nama">Tanggal Interview : {{ $item->tgl_mulai_kontrak }}</label>                          
                        </div>
    
                        <div class="mb-3">
                            <label for="nama">Total Bayar: Rp 150.000</label>                          
                        </div>
    
                        <div class="mb-3">
                            <label for="nama">Status Bayar: {{ $item->status }}</label>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="d-flex justify-content-center mt-3">
        {{ $orders->links() }}
    </div> --}}
@endsection