@extends('frontend.partials.main')

@section('content')

        <!-- Get In Touch Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="container py-5">
                <div class="bg-light px-4 py-5 rounded">
                    <div class="text-center">
                        <h1 class="display-5 mb-5">Find Your Pest Control Services</h1>
                    </div>
                    <form class="text-center mb-4" action="#">
                        <div class="row g-4">
                            <div class="col-xl-10 col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-xl-3">
                                        <select class="form-select p-3 border-0">
                                            <option value="Type Of Service" class="">Type Of Service</option>
                                            @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                            <select class="form-select p-3 border-0">
                                            <option value="Type Of Service" class="">Province</option>
                                            @foreach ($provinsis as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                                            @endforeach
                                        </select>                                    
                                    </div>
                                    <div class="col-md-6 col-xl-3">
                                        <select class="form-select p-3 border-0">
                                            <option value="Type Of Service" class="">City</option>
                                            @foreach ($kotas as $kota)
                                            <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                                            @endforeach
                                        </select>                                   
                                     </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-12">
                                <input type="button" class="btn btn-primary w-100 p-3 border-0" value="GET STARTED">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Get In Touch End -->


        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    @foreach ($pekerjas->take(5) as $pekerja)
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="rounded team-item">
                            <a href="{{ route('detail-pekerja', ['id' => $pekerja->id]) }}">
                            <img src="{{ asset('uploads/foto_pekerja/' . $pekerja->foto_pekerja) }}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                            </a>
                            <div class="team-content bg-primary text-dark text-center py-3">
                                <span class="fs-4 fw-bold">{{ $pekerja->nama_pekerja }}</span>
                                <p class="text-muted mb-0">Rp {{ number_format($pekerja->gaji, 0, ',', '.') }}/Month</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


{{-- <div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">List Layout With Sidebar</h1>               
            </div>
        </div>
    </div>
</div> --}}
<!-- End page header -->

<!-- property area -->
{{-- <div class="properties-area recent-property" style="background-color: #FFF;">
    <div class="container">  
        <div class="row">
             
        <div class="col-md-3 p0 padding-top-40">
            <div class="blog-asside-right pr0">
                <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Smart search</h3>
                    </div>
                    <div class="panel-body search-widget">
                        <form action="" class=" form-inline"> 
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <select id="basic" class="selectpicker show-tick form-control" title="Key word">
                                            <option value="0">ART</option>
                                            <option value="1">Baby Sitter</option>
                                        </select>                                      </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <select id="basic" class="selectpicker show-tick form-control" title="Select your province">
                                            @foreach ($provinsis as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-6">
                                        <select id="basic" class="selectpicker show-tick form-control" title="Select your city">
                                            @foreach ($kotas as $kota)
                                            <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                    <div class="panel-heading">
                        <h3 class="panel-title">Recommended</h3>
                    </div>
                    <div class="panel-body recent-property-widget">
                                <ul>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-1.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-3.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                        <a href="single.html"><img src="assets/img/demo/small-property-2.jpg"></a>
                                        <span class="property-seeker">
                                            <b class="b-1">A</b>
                                            <b class="b-2">S</b>
                                        </span>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                        <h6> <a href="single.html">Super nice villa </a></h6>
                                        <span class="property-price">3000000$</span>
                                    </div>
                                </li>

                            </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9  pr0 padding-top-40 properties-page">
            <div class="col-md-12 clear"> 
                <div class="col-xs-10 page-subheader sorting pl0">
                    <ul class="sort-by-list">
                        <li class="active">
                            <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                Property Date <i class="fa fa-sort-amount-asc"></i>					
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                Property Price <i class="fa fa-sort-numeric-desc"></i>						
                            </a>
                        </li>
                    </ul><!--/ .sort-by-list-->

                    <div class="items-per-page">
                        <label for="items_per_page"><b>Property per page :</b></label>
                        <div class="sel">
                            <select id="items_per_page" name="per_page">
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option selected="selected" value="12">12</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                                <option value="60">60</option>
                            </select>
                        </div><!--/ .sel-->
                    </div><!--/ .items-per-page-->
                </div>

                <div class="col-xs-2 layout-switcher">
                    <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                    <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                </div><!--/ .layout-switcher-->
            </div>

            <div class="col-md-12 clear"> 
                <div id="list-type" class="proerty-th">
                    <div class="row">
                        @foreach ($pekerjas->take(5) as $pekerja)
                            <div class="col-md-3 col-sm-3 col-xs-3 mb-4">
                                <div class="blg-thumb p0">
                                    <a href="{{ route('detail-pekerja', ['id' => $pekerja->id]) }}">
                                        <img src="{{ asset('uploads/foto_pekerja/' . $pekerja->foto_pekerja) }}" class="img-fluid" alt="{{ $pekerja->nama_pekerja }}" />
                                    </a>
                                    <span class="property-seeker">
                                        <b class="b-1">A</b>
                                        <b class="b-2">S</b>
                                    </span>
                                </div>
                                <div class="blg-entry">
                                    <h6><a href="{{ route('detail-pekerja', ['id' => $pekerja->id]) }}">{{ $pekerja->nama_pekerja }}</a></h6>
                                    <span class="property-price">$ 300,000</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="col-md-12"> 
                <div class="pull-right">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>  
        </div>              
    </div>
</div> --}}
@endsection