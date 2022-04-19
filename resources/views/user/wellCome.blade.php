<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css');
    {{-- /// what if you use admin.css --}}
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>

    <div class="wrapper">
        <div id="content">
            <!-- header -->
            {{-- @include('user.header'); --}}
            <header class="header" style="max-height: 15%">
                @include('user.navBar')
            </header>
            @include('user.sliderSection')
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="jewellery" class="Jewellery-bg">
                        <h3>Electronics</h3>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="Jewellery-box">
                                    <i>
                                        <img
                                            src="https://images.unsplash.com/photo-1619597455322-4fbbd820250a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGRlc2t0b3AlMjBjb21wdXRlcnxlbnwwfHwwfHw%3D&w=1000&q=80" />
                                    </i>
                                </div>

                                <div class="Jewellery-box">
                                    <i>
                                        <img
                                            src="https://www.builtlean.com/wp-content/uploads/2010/06/calorie-tracking.jpg" />
                                    </i>
                                </div>

                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="Jewellery-box">
                                    <div class="Jewellery-box">
                                        <i>
                                            <img
                                                src="https://thumbs.dreamstime.com/z/mobile-phone-personal-data-cyber-security-threat-concept-cellphone-fraud-smartphone-hacked-illegal-spyware-ransomware-158418683.jpg" />
                                        </i>
                                    </div>

                                </div>

                            </div>

                            <div class="Jewellery-box">

                                <i>
                                    <img
                                        src="https://thumbs.dreamstime.com/z/mobile-phone-personal-data-cyber-security-threat-concept-cellphone-fraud-smartphone-hacked-illegal-spyware-ransomware-158418683.jpg" />
                                </i>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="save">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="save_box">
                                    <h3>Own Online Store?</h3>
                                    <h3>50% Discount</h3>
                                    <a href="{{ route('register') }}">Start To Day</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="jewellery" class="Jewellery-bg">
                    <h3>Jewellery</h3>
                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">

                                <i><img src="icon/j1.png" />
                                </i>


                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <i><img src="icon/j2.png" /></i>

                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <i>
                                    <img
                                        src="https://c7.alamy.com/comp/3/75f2a6136405452c996b73f1e6bcb723/a4y3k4.jpg" />
                                </i>
                            </div>

                            <div class="Jewellery-box">
                                <i>
                                    <img
                                        src="https://c7.alamy.com/comp/3/9e7d81ba99f442b78eac860f2cf38a72/e4mayf.jpg" />
                                </i>
                            </div>

                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="Jewellery-box">
                                <div class="Jewellery-box">
                                    <i>
                                        <img
                                            src="https://c7.alamy.com/comp/3/bf3435a6c00141afa0de99ff3df6b24a/b4c3he.jpg" />
                                    </i>
                                </div>

                            </div>

                        </div>

                        <div class="Jewellery-box">

                            <i>
                                <img src="https://c7.alamy.com/comp/3/f8a62f3b775841278a9c3e3228301206/2hty76n.jpg" />
                            </i>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>


    <div id="kids" class="Kids_background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Kids-bg">
                        <h3>Kids and Babies</h3>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="Kids-box">

                                    <i><img src="icon/k1.png" />
                                    </i>


                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="Kids-box">
                                    <i><img src="icon/k1.png" /></i>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="Kids-box">
                                    <i><img src="icon/k1.png" /></i>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                <div class="Kids-box">
                                    <i><img src="icon/k1.png" /></i>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('user.footer')
    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    @include('user.script')
    <!-- Javascript files-->

</body>

</html>