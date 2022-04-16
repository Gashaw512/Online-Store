<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Product</title>

  @include('products.css')
  {{-- @include('user.css'); --}}
</head>

<body>
  {{-- @include('user.header'); --}}
  <div class="container">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
      <div>
        <h1 style=" text-align:center;">Add Products</h1>
      </div>


      @if(session()->has('message'))

      <div class=" alert alert-success">

        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
          <button type="button" class="close" data-dismiss='alert'></button>
          {{session()->get('message')}}
        </div>
      </div>
      @endif



      <div class=" sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

        <div class="form-center">
          <form action="{{url('/save')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="input" placeholder="Product Name">
            </div>

            <div class="form-group">

              <label for="quantity">Quantity</label>
              <input type="number" id="quantity" name="quantity" class="input" placeholder="Product Quantity">
            </div>

            <div class="form-group">
              <label for="price">Price</label>
              <input class="input" type="decimal" id="price" name="price" placeholder="Product Price">
            </div>


            <div class="form-group" style="width:200px; text-align:center" >
              <label for="category">Category</label>
              <div class="custom-select" style="width:200px; text-align:center; margin:8px;">
                <select name="category" id="category">
                  <option value="" disabled selected>Select Category</option>
                  <option value="Clothing">Clothing</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Shoes">Shoes</option>
                  <option value="Watches">Watches</option>
                  <option value="Jewellerys">Jewellerys</option>
                  <option value="Sport">Sport</option>
                  <option value="Home and Garden">Home and Garden</option>
                  <option value="Kids and Babies">Kids and Babies</option>
                  <option value="New brands">New brands </option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="product_image">Image</label>
              <input type="file" id="product_image" name="product_image">
            </div>
            {{-- <img src="{{asset('uploads/' .  $product->product_image)}}" alt=""> --}}




            <button type="submit" class="favorite styled">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</html>