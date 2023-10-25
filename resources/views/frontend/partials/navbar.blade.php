<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">MaidCompany</a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse yamm" id="navigation">
    <div class="button navbar-right">
        <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.45s"> <a href="{{ route('login') }}">Login</a></button>
        <button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.48s"><a href="{{ route('register') }}">Register</a></button>
    </div>
    <ul class="main-nav nav navbar-nav navbar-right">
        <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="/">Home</a></li>
        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="{{route( 'pekerja') }}">Services</a></li>
        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="{{route( 'review') }}">Review</a></li>
        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="{{route( 'contact') }}">Contact</a></li>
    </ul>
</div><!-- /.navbar-collapse -->