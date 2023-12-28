     <!-- Spinner Start -->
     <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar-top bg-primary">
        <div class="container">
            <div class="d-flex justify-content-between topbar py-2">
                <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                    <a href="#" class="me-4 text-secondary"><i class="fas fa-map-marker-alt me-2 text-dark"></i>123 Street, CA, USA</a>
                    <a href="#" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>+01234567890</a>
                    <a href="#" class="text-secondary"><i class="fas fa-envelope me-2 text-dark"></i>MaidCompany@gmail.com</a>
                </div>
                <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                    <div class="search-form">
                        <form method="post" action="/">
                            <div class="form-group">
                                <div class="d-flex">
                                    <input type="search" class="form-control border-0 rounded-pill" name="search-input" value="" placeholder="Search Here" required=""/>
                                    <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center topbar-icon">
                    <a href="#" class="me-4"><i class="fab fa-facebook-f text-dark"></i></a>
                    <a href="#" class="me-4"><i class="fab fa-twitter text-dark"></i></a>
                    <a href="#" class="me-4"><i class="fab fa-instagram text-dark"></i></a>
                    <a href="#" class=""><i class="fab fa-linkedin-in text-dark"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                <a href="/" class="navbar-brand">
                    <h1 class="text-primary mb-0 display-5">Maid<span class="text-white">Company</span><i class="fa fa-spider text-primary ms-2"></i></h1>
                </a>
                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-dark"></span>
                </button>
                <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        @guest
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="{{route( 'pekerja') }}" class="nav-item nav-link">Services</a>
                        <a href="{{route( 'review') }}" class="nav-item nav-link">Reviews</a>
                        <a href="{{route( 'contact') }}" class="nav-item nav-link">Contact</a>
                         <!-- Tombol Login -->
                         <button type="button" class="btn btn-primary px-3 py-1  rounded-pill d-inline-block border border-2 border-primary mx-2 text-capitalize" onclick="window.location='{{ route('login') }}'">Login</button>
                        
                         <!-- Tombol Register -->
                         <button type="button" class="btn btn-dark px-3 py-1 text-primary rounded-pill d-inline-block border border-2 border-primary mx-2 text-capitalize" onclick="window.location='{{ route('register') }}'">Register</button>

                        @else
                          <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="{{route( 'pekerja') }}" class="nav-item nav-link">Services</a>
                        <a href="{{route( 'review') }}" class="nav-item nav-link">Reviews</a>
                        <a href="{{route( 'contact') }}" class="nav-item nav-link">Contact</a>
                        @if(Auth::check())
                        <a href="{{ route('profil', Auth::user()->id) }}" class="nav-item nav-link">Profil</a>
                        <a href="{{ route('transaction-history', Auth::user()->id) }}" class="nav-item nav-link">History</a>
                        <button type="button" class="btn btn-dark px-3 py-1 text-primary rounded-pill d-inline-block border border-2 border-primary mx-2 text-capitalize" onclick="window.location='{{ route('logout') }}'">Logout</button>
                    @endif
                        @endguest

                         
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->