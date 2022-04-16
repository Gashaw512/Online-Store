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
        <div class="sidebar">
            <!-- Sidebar  -->
            @include('user.sidebar')
        </div>
        <div id="content">
            <!-- header -->
            @include('user.header');
            <!-- Categories -->
            <div class="Categories">
                <div class="container">
                    {{-- categories link --}}
                    @include('user.categoriesLink')
                    <!-- news brand -->
                    <div id="brand" class="brand-bg">
                        <h3>New brands</h3>
                        <div class="row">
                            @foreach($data as $product)
                            @if($product->category=='New brands')

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="brand-box">
                                    <h5>{{$product->name}}</h5>
                                    <i><img src="/uploads/{{$product->product_image}}" />
                                    </i>
                                    <h4>Price $<span class="nolmal">{{$product->price}}</span></h4>

                                </div>
                                <a class="buynow" href="#">Buy now</a>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>

                    <a class="seemore" href="#">See more</a>
                    <!-- end news brand -->

                    <!-- news shoes -->
                    <div id="shoes" class="shoes-bg">
                        <h3>New shoes</h3>
                        <div class="row">
                            @foreach($data as $product)
                            @if($product->category=='opel')

                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="shoes-box">
                                    <h5>{{$product->name}}</h5>
                                    <i><img src="/uploads/{{$product->product_image}}" />
                                    </i>
                                    <h4>Price $<span class="nolmal">{{$product->price}}</span></h4>

                                </div>
                                <a class="buynow" href="#">Buy now</a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <a class="seemore" href="#">See more</a>
                </div>

            </div>
        </div>
        <!-- end news shoes -->
        

        <!-- end Categories -->
{{--  Start some content --}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="save">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="save_box">
                                        <h3>save up to 50%</h3>
                                        <a href="#">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end save -->
        </section>
        <!-- news Jewellery -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="jewellery" class="Jewellery-bg">
                        <h3>New Jewellery</h3>
                        <div class="row">

                            @foreach($data as $product)
                            @if($product->category=='New Jewellery')
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                <div class="Jewellery-box">
                                    <h5>{{$product->name}}</h5>
                                    <i><img src="/uploads/{{$product->product_image}}" />
                                    </i>
                                    <h4>Price $<span class="nolmal">{{$product->price}}</span></h4>

                                </div>
                                <a class="buynow" href="#">Buy now</a>
                            </div>
                        
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <a class="seemore" href="#">See more</a>
                </div>
            </div>
        </div>

        <!-- end news Jewellery -->

        <!-- news Kids -->
        <div id="kids" class="Kids_background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="Kids-bg">
                            <h3>Kids and Babies</h3>
                            <div class="row">

                                @foreach($data as $product)
                                @if($product->category=='Kids and Babies')
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                    <div class="Kids-box">
                                        <h5>{{$product->name}}</h5>
                                        <i><img src="/uploads/{{$product->product_image}}" />
                                        </i>
                                        <h4>Price $<span class="nolmal">{{$product->price}}</span></h4>
    
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end news Kids -->

        <!--  footer -->
        @include('user.footer')


    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    @include('user.script')
    <!-- Javascript files-->

</body>

</html>