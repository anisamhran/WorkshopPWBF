@extends('frontend.partials.main')

@section('content')
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-img">
                            <div class="rotate-left bg-dark"></div>
                            <div class="rotate-right bg-dark"></div>
                            <img src="{{ asset('uploads/foto_pekerja/'  . $pekerja->foto_pekerja) }}" class="img-fluid h-100" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="about-item overflow-hidden">
                            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">About {{ $pekerja->nama_pekerja }}</h5>
                            {{-- <h1 class="display-5 mb-2">World Best Pest Control Services Since 2008</h1> --}}
                            <p class="fs-5" style="text-align: justify;">{{ $pekerja->deskripsi_pekerja }}</p>
                            <div class="row">
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-city fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Birth</h5>
                                            <h5>{{ $pekerja->tgl_lahir }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-school fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5>Request Salary</h5>
                                            <h5>Rp {{ number_format($pekerja->gaji, 0, ',', '.') }} / Month</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-warehouse fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5 value="{{ $pekerja->kategoripekerja_id }}">Service Type</h5>
                                            <h5 value="{{ $pekerja->kategoripekerja_id }}">{{ $pekerja->kategori_pekerja->nama_kategori }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <div class="p-4 bg-dark rounded d-flex" style="align-items: center; justify-content: center;">
                                            <i class="fas fa-hospital fa-4x text-primary"></i>
                                        </div>
                                        <div class="my-2">
                                            <h5 value="{{ $pekerja->kota_id }}">City</h5>
                                            <h5 value="{{ $pekerja->kota_id }}">{{ $pekerja->kota->nama_kota }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5 float-end" data-toggle="modal" data-target="#exampleModal"
                                id="#myBtn">Ask to Interview</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              <p>Untuk interview pekerja, anda akan dikenakan biaya sebesar Rp 150.000 untuk interview online selama 1 jam</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary " onclick="window.location='{{ route('form-kontrak',$pekerja->id) }}'">Continue</button>
            </div>
          </div>
        </div>
      </div>

@endsection
