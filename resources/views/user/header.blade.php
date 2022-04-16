
<style>

.navbar {
    transition: all 0.4s;
}

.navbar .nav-link {
    color: #fff;
}

.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #fff;
    text-decoration: none;
}

.navbar .navbar-brand {
    color: #fff;
}


/* Change navbar styling on scroll */
.navbar.active {
    background: #fff;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.active .nav-link {
    color: #555;
}

.navbar.active .nav-link:hover,
.navbar.active .nav-link:focus {
    color: #555;
    text-decoration: none;
}

.navbar.active .navbar-brand {
    color: #555;
}


/* Change navbar styling on small viewports */
@media (max-width: 991.98px) {
    .navbar {
        background: #fff;
    }

    .navbar .navbar-brand, .navbar .nav-link {
        color: #555;
    }
}

.text-small {
    font-size: 0.9rem !important;
}


body {
    min-height: 110vh;
    background-color: #4ca1af;
    background-image: linear-gradient(135deg, #4ca1af 0%, #c4e0e5 100%);
}

</style>

<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Online Store</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#"><img style="margin-right: 15px; display:inline;"
                        src="icon/1.png" alt="#" />+2519 706 559 25</a></li>
                    <li class="nav-item"><a href="#"> <img style="margin-right: 15px; display:inline;"
                        src="icon/2.png" alt="#" /></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Portfolio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<header>
    <!-- header inner -->
    <div class="head_top" style="margin-top: 0%;">
        <div class="header">

            <div class="container-fluid">

                <div class="row">
                    
                    <div class="col-lg-9">
                        <div class="right_header_info">

                            <ul class=" navbar-nav ml-auto mr-auto  " style="padding-left:0px; display:inline; " style="width: 100%">
                                <li class="menu_iconb nav-item " style="display:inline;">
                                    <a href="#"><img style="margin-right: 15px; display:inline;"
                                            src="icon/1.png" alt="#" />+2519 706 559 25</a>
                                </li>


                                <li class="tytyu nav-item" style="display:inline;">
                                    <a href="#"> <img style="margin-right: 15px; display:inline;"
                                            src="icon/2.png" alt="#" /></a>
                                </li>
                                <li class="menu_iconb nav-item" style="display:inline; ">
                                    <a href="#"><img style="margin-right: 15px; display:inline; "
                                            src="icon/3.png" alt="#" /></a>
                                </li>

                                <li clas='nav-item' style="display:inline;">
                                    <button type="button" id="sidebarCollapse" style="display:inline;">
                                        <img src="images/menu_icon.png" alt="#" style="display:inline;" />
                                    </button>
                                </li>
                                <hr>

                                {{-- When login and Signup buten show or hide --}}

                                @if(Route::has('login'))
                                @Auth
                                {{-- This line gives logout option, see from dashboard --}}
                                <li class="clas='nav-item", style="display:inline;">
                                    <x-app-layout></x-app-layout>
                                </li>
                                <li class="clas='nav-item", style="display:inline;">
                                   <a href="/add_product">Add Products</a>
                                </li>
                              
                                @else
                                <li clas='nav-item' style="display:inline;" >
                                    <li class="menu_iconb nav-item" style="display:inline; ">
                                        <a href="{{ route('login') }} " >Log in <img
                                                style="margin-right: 15px; display:inline;" src="icon/login.png"
                                                alt="" />
                                        </a>
                                    </li>
                                    <li class="menu_iconb nav-item" style="display:inline">
                                        <a href="{{ route('register') }}">Signup<img style="margin-left: 15px;"
                                                src="icon/6.png" alt="" /></a>
                                    </li>

                                </li>

                                

                                @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end header inner -->
         in  

        <!-- end header -->
        <section class="slider_section">
            <div class="banner_main">
                <div class="container-fluid padding3">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mapimg">
                            <div class="text-bg">
                                <h1>Stand <br>
                                    out<br>
                                    in <br>
                                    the<br>
                                    crowd</h1>
                                <span>A new type of storefront</span>
                                <a href="{{ route('register') }}">Free trial</a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container">
                                            <div class="carousel-caption text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img_bg">
                                                            <figure><img src="images/cap.png" /></figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <div class="carousel-caption text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img_bg">
                                                            <figure><img src="images/cap.png" /></figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container">
                                            <div class="carousel-caption text">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img_bg">
                                                            <figure><img src="images/cap.png" /></figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</header>
