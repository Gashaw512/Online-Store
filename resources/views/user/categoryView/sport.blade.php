<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.css');
</head>
<body class="main-layout">

    <div class="wrapper">
        <div class="sidebar">
            @include('user.sidebar')
        </div>
        <div id="content">
         
            @include('user.header');
           
            <div class="Categories">
                @include('user.categoriesLink')
                <div class="row">
                    <div class="col-md-12">
                        <div id="Sport" class="Sport-bg">
                            <h3>New Sport</h3>
                            <div class="row">
                                @foreach($data as $product)
                                @if($product->category=='Sport')
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                    <div class="Sport-box">
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
        </div>
        @include('user.footer')
    </div>
    <div class="overlay"></div>
    @include('user.script')
</body>
</html>