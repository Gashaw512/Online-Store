<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
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
                @include('admin.body')
            </div>

            {{-- footer --}}
            @include('admin.footer')

        </div>

    </div>



    <!--   Core JS Files   -->
  @include('admin.script')
</body>

</html>