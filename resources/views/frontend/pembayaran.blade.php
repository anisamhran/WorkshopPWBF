@extends('frontend.partials.main')

@section('content')
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>


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
                          <label for="nama">Total Bayar: Rp 150.000</label>                          
                        </div>

                        <div class="mb-3">
                            <label for="nama">Status Bayar: {{ $kontrak->status }}</label>                          
                          </div>    
                        
                        <button type="submit" class="btn btn-primary float-end" id="pay-button">Bayar</button>

                </div>
            </div>
        </div>
    </div>
</div>
 
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{ $snapToken }}', {
              onSuccess: function(result){
                  /* You may add your own implementation here */
                  alert("payment success!"); 
                  window.location.href = '/notifikasi/{{$kontrak->id}}'
                  console.log(result);
              },
              onPending: function(result){
                  /* You may add your own implementation here */
                  alert("waiting for your payment!"); console.log(result);
              },
              onError: function(result){
                  /* You may add your own implementation here */
                  alert("payment failed!"); console.log(result);
              },
              onClose: function(){
                  /* You may add your own implementation here */
                  alert('you closed the popup without finishing the payment');
              }
          })
      });
  </script>
@endsection
