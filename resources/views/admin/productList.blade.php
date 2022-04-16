<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        td img {
            display: block;
            margin-left: auto;
            margin-right: auto;

        }
       
    </style>
</head>

<body class="">
    <div class="wrapper ">

        {{-- Sidebar is included from admin.sidebar --}}
        @include('admin.sidebar')


        {{-- main panal -- that include body and footer --}}
        <div class="main-panel" id="main-panel">

            <!-- Navbar -->
            @include('admin.navbar')


            <div class="panel-header panel-header-sm">
            </div>
            {{-- Main content come here --}}
            <div class="content">
                {{-- @include('admin.body') --}}

                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Available products in store</h4>
                                </div>
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss='alert'>X</button>
                                    {{session()->get('message')}}
                                </div>
                                @endif
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Category
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th class="text-right">
                                                    Quantity
                                                </th>
                                                <th class="text-right">
                                                    Image
                                                </th>
                                                <th class="text-right">
                                                    Owner
                                                </th >
                                                <th class="text-center" colspan="2">
                                                 Action
                                                </th>
                                                
                                            </thead>
                                            <tbody>
                                                @foreach($data as $product)
                                                <tr>

                                                    <td>
                                                        {{$product->name}}
                                                    </td>
                                                    <td>
                                                        {{$product->category}}
                                                    </td>
                                                    <td>
                                                        $ {{$product->price}}
                                                    </td>
                                                    <td class="text-right" style="margin-right: 60px;">
                                                        {{$product->quantity}}
                                                    </td>
                                                    <td class="text-right">
                                                        <img src="uploads/{{$product->product_image}}" height="100"
                                                            width="100">
                                                    </td>
                                                    <td class="text-right">
                                                        {{$product->name}}
                                                    </td>
                                                    <td class="text-right">
                                                       <a href="" class="btn border-t-transparent btn-primary">Update</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="{{url('delateProduct',$product->id)}}" class="btn btn-danger">Delate</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td>
                                                        Minerva Hooper
                                                    </td>
                                                    <td>
                                                        Curaçao
                                                    </td>
                                                    <td>
                                                        Sinaai-Waas
                                                    </td>
                                                    <td class="text-right">
                                                        $23,789
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Sage Rodriguez
                                                    </td>
                                                    <td>
                                                        Netherlands
                                                    </td>
                                                    <td>
                                                        Baileux
                                                    </td>
                                                    <td class="text-right">
                                                        $56,142
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Philip Chaney
                                                    </td>
                                                    <td>
                                                        Korea, South
                                                    </td>
                                                    <td>
                                                        Overland Park
                                                    </td>
                                                    <td class="text-right">
                                                        $38,735
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Doris Greene
                                                    </td>
                                                    <td>
                                                        Malawi
                                                    </td>
                                                    <td>
                                                        Feldkirchen in Kärnten
                                                    </td>
                                                    <td class="text-right">
                                                        $63,542
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Mason Porter
                                                    </td>
                                                    <td>
                                                        Chile
                                                    </td>
                                                    <td>
                                                        Gloucester
                                                    </td>
                                                    <td class="text-right">
                                                        $78,615
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Jon Porter
                                                    </td>
                                                    <td>
                                                        Portugal
                                                    </td>
                                                    <td>
                                                        Gloucester
                                                    </td>
                                                    <td class="text-right">
                                                        $98,615
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- footer --}}
            @include('admin.footer')

        </div>

    </div>



    <!--   Core JS Files   -->
    @include('admin.script')
</body>

</html>