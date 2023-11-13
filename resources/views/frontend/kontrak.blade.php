@extends('frontend.partials.main')

@section('title')
   <h1>Form Pengajuan Kontrak</h1> 
@endsection

@section('content')
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="content-area recent-property padding-top-40">
        <div class="container">  
            <div class="row">
                <div class="col-md-8 col-md-offset-2"> 
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Form Pengajuan Kontrak : </h2> 
                            <form action="{{ route('save-form-kontrak') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="{{ auth()->user()->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Tujuan</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ auth()->user()->alamat }}">
                                </div>
                                    <div class="form-group">
                                        <label for="lama_kontrak">Lama Kontrak </label>
                                        <select name="lama_kontrak" class="form-control" id="lama_kontrak" type="number">
                                            <option value="1">1 Bulan</option>
                                            <option value="2">2 Bulan</option>
                                            <option value="3">3 Bulan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_hp">Nomor Whatsapp</label>
                                        <input type="text" name="nomor_hp" class="form-control" id="nohp" value="{{ auth()->user()->no_hp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" value="{{ auth()->user()->email }}">
                                    </div>
                                <div class="form-group">
                                    <label for="kebutuhan">Deskripsi Kebutuhan</label>
                                    <input type="text" name="kebutuhan" class="form-control" id="kebutuhan">
                                </div>
                                <div class="form-group">
                                    <label for="kebutuhan">Tanggal mulai kontrak</label>
                                    <input type="date" name="tgl_mulai_kontrak" class="form-control" id="tgl_mulai_kontrak">
                                </div>
                                <div class="form-group">
                                    <label for="kebutuhan">Tanggal akhir kontrak</label>
                                    <input type="date" name="tgl_akhir_kontrak" class="form-control" id="tgl_akhir_kontrak">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="kebutuhan">Nominal Pembayaran</label>
                                    <input type="int" name="tgl_akhir_kontrak" class="form-control" id="kebutuhan">
                                </div> --}}
                                <div class="form-group">
                                    <label for="foto_ktp">Fotocopy KTP</label>
                                    <input class="form-control form-control-sm @error('foto_ktp') is-invalid @enderror" id="foto_ktp" type="file" name="foto_ktp">
                                </div>
                                <input type="hidden" name="pekerja_id" value="{{ $pekerja_id }}">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Kirim Pengajuan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
           
        </div>
    </div> 

    {{-- <script>
        // Add an event listener to the "lama_kontrak" select field
        document.getElementById('lama_kontrak').addEventListener('change', function() {
            // Get the selected value
            var selectedDuration = parseInt(this.value);

            // You need to replace this with the actual salary of the worker
            var currentSalary = 5000000; // Example salary

            // Calculate the nominal payment
            var nominalPayment = selectedDuration * currentSalary;

            // Update the "nominal_pembayaran" input field
            document.getElementById('nominal_pembayaran').value = nominalPayment;
        });
    </script> --}}
@endsection
