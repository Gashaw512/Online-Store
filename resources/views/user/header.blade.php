<header>
    <!-- header inner -->
    <div class="head_top">
        <div class="header">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3 logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="right_header_info">

                            <ul class=" navbar-nav ml-auto " style="padding-left:0px; display:inline;">
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

        <!-- end header -->
        <section class="slider_section">
            <div class="banner_main">
                <div class="container-fluid padding3">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mapimg">
                            <div class="text-bg">
                                <h1>All <br>
                                    In<br>
                                    One <br>
                                    Shop</h1>
                                <span>A new type of storefront</span>
                                <a href="#">Buy now</a>
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
