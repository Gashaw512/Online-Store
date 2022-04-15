{{-- <div class="container">
  <div class="products__edit">
    <div class="
          products__create__titlebar
          dflex
          justify-content-between
          align-items-center
        ">
      <div class="products__create__titlebar--item">
        <h1 class="my-1">Edit Product</h1>
      </div>
      <div class="products__create__titlebar--item">
        <button class="btn btn-secondary ml-1" @click="saveProduct()">
          Save
        </button>
      </div>
    </div>

    <div class="products__create__cardWrapper mt-2">
      <div class="products__create__main">
        <div class="products__create__main--addInfo card py-2 px-2 bg-white">
          <p class="mb-1">Name</p>
          <input type="text" class="input" v-model="form.name" />

          <p class="my-1">Description (optional)</p>
          <textarea cols="10" rows="5" class="textarea" v-model="form.description"></textarea>

          <div class="products__create__main--media--images mt-2">
            <ul class="
                  products__create__main--media--images--list
                  list-unstyled
                ">
              <li class="products__create__main--media--images--item">
                <div class="
                      products__create__main--media--images--item--imgWrapper
                    ">
                  <img class="products__create__main--media--images--item--img" alt="" :src="getPhoto()" />
                </div>
              </li>

              <!-- upload image small -->
              <li class="products__create__main--media--images--item">
                <form class="products__create__main--media--images--item--form">
                  <label class="
                        products__create__main--media--images--item--form--label
                      " for="myfile">Add Image</label>
                  <input class="
                        products__create__main--media--images--item--form--input
                      " type="file" id="myfile" @change="updatePhoto" />
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="products__create__sidebar">
        <!-- Product Organization -->
        <div class="card py-2 px-2 bg-white">
          <!-- Product unit -->
          <div class="my-3">
            <p>Product type</p>
            <input type="text" class="input" v-model="form.type" />
          </div>
          <hr />

          <!-- Product invrntory -->
          <div class="my-3">
            <p>Inventory</p>
            <input type="text" class="input" v-model="form.quantity" />
          </div>
          <hr />

          <!-- Product Price -->
          <div class="my-3">
            <p>Price</p>
            <input type="text" class="input" v-model="form.price" />
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Bar -->
    <div class="dflex justify-content-between align-items-center my-3">
      <p></p>
      <button class="btn btn-secondary" @click="saveProduct()">Save</button>
    </div>
  </div>
</div> --}}
{{-- <script>
  const updatePhoto = (e) => {
  let file = e.target.files[0];
  let reader = new FileReader();
  let limit = 1024 * 1024 * 2;
  if (file["size"] > limit) {
    return false;
  }
  reader.onloadend = (file) => {
    form.value.photo = reader.result;
  };
  reader.readAsDataURL(file);
};
</script> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Product</title>
  <style>
    
.products__create__cardWrapper {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr minmax(auto, 290px);
    grid-template-columns: 1fr minmax(auto, 290px);
    grid-gap: 20px;
    color: #6a727a;
}

.card {
    border: 1px solid #e0e0e0;
    -webkit-box-shadow: 0 6px 13px -12px rgb(50 50 93 / 20%), 0 3px 7px -3px rgb(110 110 110 / 10%);
    box-shadow: 0 6px 13px -12px rgb(50 50 93 / 20%), 0 3px 7px -3px rgb(110 110 110 / 10%);
    border-radius: 4px;
}

.mb-1 {
    margin-bottom: 10px;
}

.input {
    padding: 9px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    width: 100%;
}

.my-1 {
    margin-top: 10px;
    margin-bottom: 10px;
}

.textarea {
    padding: 9px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    width: 100%;
    font-size: 1.1rem;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.checkbox-container {
    display: block;
    position: relative;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 14px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.mt-3 {
    margin-top: 30px;
}

.products__create__main--pricing--col {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}

.inputAdd {
    padding: 9px 15px;
    border-top: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
    border-right: none;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    width: 100%;
}

.inputAdd__Btn {
    background: #5463c1;
    color: white;
    border-top: 1px solid #5463c1;
    border-right: 1px solid #5463c1;
    border-bottom: 1px solid #5463c1;
    border-left: none;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    padding: 9px 15px;
    cursor: pointer;
}

.inputSelect {
    padding: 9px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    width: 100%;
    color: #454f5b;
    min-width: 200px;
}

.products__create__main--media--images--item--form {
    border: 2px dashed #6a727a;
    position: relative;
    cursor: pointer;
}

.products__create__main--media--form {
    border: 2px dashed #6a727a;
    position: relative;
    cursor: pointer;
}



.products__create__main--media--images--list {
    display: -ms-grid;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 5px;
}

.list-unstyled {
    list-style: none;
}

.products__create__main--media--images--item {
    position: relative;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
}

.products__create__main--media--images--item--imgWrapper {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    width: 117px;
}

.products__create__main--media--images--item--img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
}

.products__create__main--media--images--item--form--label {
    padding: 9px 15px;
    border-radius: 4px;
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.products__create__main--media--images--item--form--input {
    height: 100px;
    opacity: 0;
    width: 100%;
    cursor: pointer;
}

  </style>
</head>
<body>
  
</body>
</html>
<div class="container">
  <div class="card">
    <div class="card-header">
      <h1 >Add Products</h1>
    </div>
    <div class="card-body">

      <form action="/save" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name">
        </div>

        <div class="form-group">

          <label for="quantity">Quantity</label>
          <input type="number" id="quantity" name="quantity">
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          <input type="decimal" id="price" name="price">
        </div>

        <div class="form-group">
          <label for="product_image">Image</label>
          <input type="file" id="product_image" name="product_image">
        </div>
        {{-- <img src="{{asset('uploads/' .  $product->product_image)}}" alt=""> --}}

        <div class="form-group">
          <label for="category">Category</label>
          <select name="category" id="category">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select>
        </div>


        <button type="submit">Save</button>
      </form>

    </div>
  </div>

</div>