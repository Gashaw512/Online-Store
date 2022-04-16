<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .title{
            color: black;
            font-size: 25px;
            padding-top: 80px;
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
            <div class="content" style=padding-top: 100px;" >
                
               
            </div>

            {{-- footer --}}
            @include('admin.footer')

        </div>

    </div>



    <!--   Core JS Files   -->
  @include('admin.script')
</body>

</html>