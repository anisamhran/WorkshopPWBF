@extends('frontend.partials.main')
@section('title')
    Home Page
@endsection
@section('content')
<div class="slider">
    <div id="bg-slider" class="owl-carousel owl-theme">

        <div class="item"><img src="assets/img/slide1/slider-image-1.png" alt="GTA V"></div>
        <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div>
        <div class="item"><img src="assets/img/slide1/slider-image-3.png" alt="GTA V"></div>

    </div>
</div>
<div class="slider-content">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <h2>Maid Company</h2>
            <p>Cari Asisten Rumah Tangga dan Baby Sitter dengan mudah disini!</p>
            <div class="search-form wow pulse" data-wow-delay="0.8s">

                <form action="" class=" form-inline">
                    <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

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

                    <div style="display: none;" class="search-toggle">

                        <div class="search-row">   

                            <div class="form-group mar-r-20">
                                <label for="price-range">Price range ($):</label>
                                <input type="text" class="span2" value="" data-slider-min="0" 
                                       data-slider-max="600" data-slider-step="5" 
                                       data-slider-value="[0,450]" id="price-range" ><br />
                                <b class="pull-left color">2000$</b> 
                                <b class="pull-right color">100000$</b>
                            </div>
                            <!-- End of  -->  

                            <div class="form-group mar-l-20">
                                <label for="property-geo">Property geo (m2) :</label>
                                <input type="text" class="span2" value="" data-slider-min="0" 
                                       data-slider-max="600" data-slider-step="5" 
                                       data-slider-value="[50,450]" id="property-geo" ><br />
                                <b class="pull-left color">40m</b> 
                                <b class="pull-right color">12000m</b>
                            </div>
                            <!-- End of  --> 
                        </div>

                        <div class="search-row">

                            <div class="form-group mar-r-20">
                                <label for="price-range">Min baths :</label>
                                <input type="text" class="span2" value="" data-slider-min="0" 
                                       data-slider-max="600" data-slider-step="5" 
                                       data-slider-value="[250,450]" id="min-baths" ><br />
                                <b class="pull-left color">1</b> 
                                <b class="pull-right color">120</b>
                            </div>
                            <!-- End of  --> 

                            <div class="form-group mar-l-20">
                                <label for="property-geo">Min bed :</label>
                                <input type="text" class="span2" value="" data-slider-min="0" 
                                       data-slider-max="600" data-slider-step="5" 
                                       data-slider-value="[250,450]" id="min-bed" ><br />
                                <b class="pull-left color">1</b> 
                                <b class="pull-right color">120</b>
                            </div>
                            <!-- End of  --> 

                        </div>
                        <br>
                        <div class="search-row">  

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Fire Place(3100)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  -->  

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Dual Sinks(500)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  --> 

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Hurricane Shutters(99)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  --> 
                        </div>

                        <div class="search-row">  

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Swimming Pool(1190)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  -->  

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 2 Stories(4600)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  --> 

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Emergency Exit(200)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  --> 
                        </div>                                    

                        <div class="search-row">  

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Laundry Room(10073)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  -->  

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Jog Path(1503)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  --> 

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 26' Ceilings(1200)
                                    </label>
                                </div>
                            </div>
                            <!-- End of  --> 
                            <br>
                            <hr>
                        </div>                             
                        <button class="btn search-btn prop-btm-sheaerch" type="submit"><i class="fa fa-search"></i></button>  
                    </div>                    

                </form>
            </div>
        </div>
    </div>
</div>  

<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>Top submitted property</h2>
                <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies . </p>
            </div>
        </div>

        <div class="row">
            <div class="proerty-th">
                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="detail-pekerja-1" ><img src="assets/img/demo/property-1.jpg"></a>
                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="detail-pekerja-1" >Super nice villa </a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Area :</b> 120m </span>
                            <span class="proerty-price pull-right">$ 300,000</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="property-2.html" ><img src="assets/img/demo/property-2.jpg"></a>
                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="property-2.html" >Super nice villa </a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Area :</b> 120m </span>
                            <span class="proerty-price pull-right">$ 300,000</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="property-3.html" ><img src="assets/img/demo/property-3.jpg"></a>

                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="property-3.html" >Super nice villa </a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Area :</b> 120m </span>
                            <span class="proerty-price pull-right">$ 300,000</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="detail-pekerja-1" ><img src="assets/img/demo/property-4.jpg"></a>

                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="detail-pekerja-1" >Super nice villa </a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Area :</b> 120m </span>
                            <span class="proerty-price pull-right">$ 300,000</span>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="property-3.html" ><img src="assets/img/demo/property-2.jpg"></a>
                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="property-3.html" >Super nice villa </a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Area :</b> 120m </span>
                            <span class="proerty-price pull-right">$ 300,000</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="property-2.html" ><img src="assets/img/demo/property-4.jpg"></a>
                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="property-2.html" >Super nice villa </a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Area :</b> 120m </span>
                            <span class="proerty-price pull-right">$ 300,000</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-two proerty-item">
                        <div class="item-thumb">
                            <a href="detail-pekerja-1" ><img src="assets/img/demo/property-3.jpg"></a>
                        </div>
                        <div class="item-entry overflow">
                            <h5><a href="detail-pekerja-1" >Super nice villa </a></h5>
                            <div class="dot-hr"></div>
                            <span class="pull-left"><b>Area :</b> 120m </span>
                            <span class="proerty-price pull-right">$ 300,000</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 p0">
                    <div class="box-tree more-proerty text-center">
                        <div class="item-tree-icon">
                            <i class="fa fa-th"></i>
                        </div>
                        <div class="more-entry overflow">
                            <h5><a href="detail-pekerja-1" >CAN'T DECIDE ? </a></h5>
                            <h5 class="tree-sub-ttl">Show all properties</h5>
                            <button class="btn border-btn more-black" value="All properties">All properties</button>
                        </div>
                    </div>
                </div>

            </div>
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
