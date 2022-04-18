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
                <div class="container">
                    {{-- categories link --}}
                    @include('user.categoriesLink')

                    <!-- news brand -->
                    <div class="container">
                        @include('user.categoriesLink')
                        <div id="shoes" class="shoes-bg">
                            <h3>New shoes</h3>
                            <div class="row">
                                @foreach($data as $product)
                                @if($product->category=='Shoes')
    
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