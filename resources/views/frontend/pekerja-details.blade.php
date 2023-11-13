@extends('frontend.partials.main')

@section('content')
<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <!-- Tampilan detail pekerja -->
        <div class="row">
            <div class="light-slide-item">            
                {{-- <div class="clearfix"> --}}
                    <ul id="image-gallery" style="list-style: none; display: flex; justify-content: center; align-items: center;">
                        <li data-thumb="{{ asset('uploads/foto_pekerja/' . $pekerja->foto_pekerja) }}">
                            <img src="{{ asset('uploads/foto_pekerja/'  . $pekerja->foto_pekerja) }}" style="width: 300px; height: 200px;" />
                        </li>
                        
                    </ul>
                    
                </div>
        
                <div class="single-property-wrapper">
                    <div class="single-property-header">                                          
                        <h1 class="property-title">{{ $pekerja->nama_pekerja }} <span class="property-price"> ${{ $pekerja->gaji }}</span></h1>
                        
                    </div>

                    <div class="property-meta entry-meta clearfix ">   
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-tag">                                        
                                <img src="assets/img/icon/sale-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Status</span>
                                <span class="property-info-value">For Sale</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Pengalaman</span>
                                <span class="property-info-value">{{ $pekerja->pengalaman }}<b class="property-info-unit">Sq Ft</b></span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="assets/img/icon/bed-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Kelahiran</span>
                                <span class="property-info-value">{{ $pekerja->tgl_lahir}}</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="assets/img/icon/cars-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Gaji</span>
                                <span class="property-info-value">{{ $pekerja->gaji }}</span>
                            </span>
                        </div>
                    </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">Description</h4>
                        <div class="s-property-content">
                            <p>{{ $pekerja->deskripsi_pekerja }}</p>
                        </div>
                    </div>
                    <!-- End description area  -->
                    <div class="text-center ">
                        <button class="btn btn-lg btn-warning" onclick="window.location='{{ route('form-kontrak', ['pekerja_id' => $pekerja->id])) }}'">Kontrak</button>
                    </div>
                </div> 
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection
