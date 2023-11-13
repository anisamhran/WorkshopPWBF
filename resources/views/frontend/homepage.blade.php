@extends('frontend.partials.main')
@section('title')
    Home Page
@endsection
@section('content')
<div class="slider">
    <div id="bg-slider" class="owl-carousel owl-theme">
        <div class="item"><img src="assets/img/slide1/slider-image-1.png" alt="GTA V"></div>
        <div class="item"><img src="assets/img/slide1/slider-image-2.png" alt="The Last of us"></div>
        <div class="item"><img src="assets/img/slide1/slider-image-3.png" alt="GTA V"></div>
    </div>
</div>
<div class="slider-content">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <div class="search-form wow pulse" data-wow-delay="0.8s">
                {{-- <form action="" class=" form-inline">
                    <div class="form-group">
                        <select id="basic" class="selectpicker show-tick form-control" title="Key word">
                            <option value="0">ART</option>
                            <option value="1">Baby Sitter</option>
                        </select>                   
                     </div>
                    <div class="form-group">                                   
                        <select id="basic" class="selectpicker show-tick form-control" title="Select your province">
                            @foreach ($provinsis as $provinsi)
                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">                                     
                        <select id="basic" class="selectpicker show-tick form-control" title="Select your city">
                            @foreach ($kotas as $kota)
                            <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                </form> --}}
            </div>
        </div>
    </div>
</div>  

<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>Rekomendasi Pekerja</h2>
            </div>
        </div>

        <div class="row">
            @foreach ($pekerjas->take(5) as $pekerja)
            <div class="col-sm-6 col-md-3 mb-4">
                <div class="box-two proerty-item">
                    <div class="item-thumb">
                        <a href="{{ route('detail-pekerja', ['id' => $pekerja->id]) }}">
                            <img src="{{ asset('uploads/foto_pekerja/' . $pekerja->foto_pekerja) }}" class="img-fluid" alt="{{ $pekerja->nama_pekerja }}" />
                        </a>
                    </div>
                    <div class="item-entry overflow">
                        <h5><a href="{{ route('detail-pekerja', ['id' => $pekerja->id]) }}">{{ $pekerja->nama_pekerja }}</a></h5>
                        <div class="dot-hr"></div>
                        <span class="pull-left"><b>Area :</b> 120m </span>
                        <span class="proerty-price pull-right">$ 300,000</span>
                    </div>
                </div>
            </div>
        @endforeach
        
        </div>
        
    </div>
</div>

<div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>Our Customers Said  </h2> 
            </div>
        </div>

        <div class="row">
            <div class="row testimonial">
                <div class="col-md-12">
                    <div id="testimonial-slider">
                        <div class="item">
                            <div class="client-text">                                
                                <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                            </div>
                            <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                <img src="assets/img/client-face1.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-text">                                
                                <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                            </div>
                            <div class="client-face">
                                <img src="assets/img/client-face2.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-text">                                
                                <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                            </div>
                            <div class="client-face">
                                <img src="assets/img/client-face1.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-text">                                
                                <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                            </div>
                            <div class="client-face">
                                <img src="assets/img/client-face2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="count-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>You can trust Us </h2> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-users"></span>
                            </div>
                            <div class="chart" data-percent="5000">
                                <h2 class="percent" id="counter">0</h2>
                                <h5>HAPPY CUSTOMER </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-home"></span>
                            </div>
                            <div class="chart" data-percent="12000">
                                <h2 class="percent" id="counter1">0</h2>
                                <h5>Properties in stock</h5>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-flag"></span>
                            </div>
                            <div class="chart" data-percent="120">
                                <h2 class="percent" id="counter2">0</h2>
                                <h5>City registered </h5>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-graph2"></span>
                            </div>
                            <div class="chart" data-percent="5000">
                                <h2 class="percent"  id="counter3">5000</h2>
                                <h5>DEALER BRANCHES</h5>
                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
