@extends('frontend.partials.main')

@section('content')
        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Kontrak</h5>
                    <h1 class="display-5">Form Interview</h1>
                </div>
                <div class="wow fadeInUp" data-wow-delay=".5s">
                    <div class="row">
                    <div class="blog-item col-lg-6">
                        <img src="{{ asset('uploads/foto_pekerja/'  . $pekerja->foto_pekerja) }}" class="img-fluid w-100 rounded-top" alt="">
                         <div class="rounded-bottom bg-light">
                            <div class="d-flex justify-content-between p-4 pb-2">
                                <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>{{ $pekerja->nama_pekerja }}</span>
                                <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>Rp {{ number_format($pekerja->gaji, 0, ',', '.') }}/Month</span>
                            </div>
                            <div class="px-4 pb-0">
                                <h4 value="{{ $pekerja->kategoripekerja_id }}">{{ $pekerja->kategori_pekerja->nama_kategori }}</h4>
                                <p>{{ $pekerja->deskripsi_pekerja }}</p>
                            </div>
                            <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                                <a href="#" type="button" class="btn btn-primary border-0"></a>
                                <a href="#" class="my-auto btn-primary border-0"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item col-lg-6">
                                        <form action="{{ route('save-form-kontrak') }}" method="post" enctype="multipart/form-data" class="border p-4">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="kebutuhan">Deskripsi Kebutuhan</label>
                                                <input type="text" name="kebutuhan" class="form-control" id="kebutuhan">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="tgl_mulai_kontrak">Tanggal Interview</label>
                                                <input type="date" name="tgl_mulai_kontrak" class="form-control" id="tgl_mulai_kontrak" min="{{ now()->toDateString() }}" required >
                                            </div>
                                            {{-- <div class="form-group mb-3">
                                                <label for="tgl_mulai_kontrak">Nama</label>
                                                <input type="text" name="nama" class="form-control" id="nama" readonly value="{{ auth()->user()->nama }}" >
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="tgl_mulai_kontrak">Email</label>
                                                <input type="text" name="email" class="form-control" id="email" readonly value="{{ auth()->user()->email }}" >
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="tgl_mulai_kontrak">No Whatsapp</label>
                                                <input type="text" name="no_hp" class="form-control" id="no_hp" readonly value="{{ auth()->user()->no_hp }}" >
                                            </div> --}}

                                            <input type="hidden" name="pekerja_id" value="{{ $pekerja->id }}">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5 float-end" >Submit</button>                      
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        <!-- Blog End -->

        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>Anda akan diarahkan ke metode pembayaran. </p>
            <p>Tagihan anda : Rp 150.000</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary " onclick="window.location={{ route('save-form-kontrak') }}">Continue</button>
            </div>
        </div>
        </div>
        </div> --}}
    
@endsection
