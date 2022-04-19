<style>
    .navbar {
        transition: all 0.4s;
        position: fixed;
        background-color: rgb(174, 174, 224);
    }

    .navbar .nav-link {
        color: rgb(95, 92, 92);
    }

    .navbar .nav-link:hover,
    .navbar .nav-link:focus {
        color: rgb(136, 133, 133);
        text-decoration: underline;
    }

    .navbar .navbar-brand {
        color: rgb(88, 12, 12);
    }


    /* Change navbar styling on scroll */
    .navbar.active {
        background: rgb(87, 17, 17);
        box-shadow: 1px 2px 10px rgba(59, 13, 13, 0.1);
    }

    .navbar.active .nav-link {
        color: rgb(4, 59, 110);
    }

    .navbar.active .nav-link:hover,
    .navbar.active .nav-link:focus {
        color: rgb(85, 85, 85);
        text-decoration: underline;
    }

    .navbar.active .navbar-brand {
        color: rgb(85, 85, 85);
    }


    /* Change navbar styling on small viewports */
    @media (max-width: 991.98px) {
        .navbar {
            background: #fff;
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #555;
        }
    }

    .text-small {
        font-size: 0.9rem !important;
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
        @if(Auth::id())
        <li clas='nav-item' style="display:inline; margin-right:10px;">
            <button type="button" id="sidebarCollapse" style="display:inline;">
                <img src="images/menu_icon.png" alt="#" style="display:inline;" />
            </button>
        </li>
        @endif

        <a href="/" class="navbar-brand text-uppercase font-weight-bold" style="margin-right: 3px;" style="float: right;">Online Store</a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler navbar-toggler-right">
            <i class="fa fa-bars"></i>
        </button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse" class="mynav">
            <ul class="navbar-nav ml-auto" style="margin: 10px; display:flex; justify-content: space-between;">
                <li class="nav-item active" style="text-align: left; padding-right:31px; "><a href="/home"
                        class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" style="padding-right: 30px; padding-left:40px;"><a
                        href="https://www.linkedin.com/in/gashaw-kidanu-b52238233/"><img
                            style="margin-right: 15px; display:inline;" src="icon/1.png" alt="#"
                            style="margin-right: 35px; margin-left: 35px;" />+2519 706 559 25</a></li>

                @if(Route::has('login'))
                @Auth
                <li class="nav-item"><a href="#"> <img style="margin-right: 15px; display:inline;" src="icon/2.png"
                            alt="#" /></a></li>

                <li class="nav-item" style="padding-right: 30px;"><a href="/add_product"
                        class="nav-link text-uppercase font-weight-bold">Add
                        Products</a></li>
                <li class="nav-item" , style="display:inline;  max-height:12px;">
                    <x-app-layout></x-app-layout>
                </li>

                @else

                <li class="nav-item" style="padding-left: 30px;"><a href="{{ route('login') }}"
                        class="nav-link text-uppercase font-weight-bold"
                        style="margin-right: 10px; margin-left: 12px; float: right;"> Log in <img
                            style="margin-right: 15px; display:inline;" src="icon/login.png" alt="" width="30"
                            height="40" /></a>
                </li>
                <li class="nav-item" style="padding-left: 0%;"><a href="{{ route('register') }}"
                        class="nav-link text-uppercase font-weight-bold"
                        style="margin-right: 10px; margin-left: 12px; margin:0%;"> Sign up<img
                            style="margin-left: 20px;" src="icon/6.png" alt="" /></a></li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>