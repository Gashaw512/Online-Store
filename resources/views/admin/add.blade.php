<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .title {
            color: black;
            font-size: 25px;
            padding-top: 50px;
        }

        .main-warapper {
            text-align: center;
            justify-content: center;
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
            <div class="content" class="main-warapper container" >
                <h1 class="title" style=" text-align:center;">Add User</h1>
                <div>
                    <label for="user_name">Email</label>
                    @include('auth.register')
                </div>
                <form action="/action_page.php">
                    <input list="browsers" name="browser" placeholder="Select category">
                    <datalist id="browsers" style="justify-content: center;">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                    </datalist>
                    <input type="submit">
                </form>
                <table>
                    <th>

                    </th>
                    <tbody>
                        <tr></tr>
                    </tbody>
                </table>
            </div>

            {{-- footer --}}
            @include('admin.footer')

        </div>

    </div>



    <!--   Core JS Files   -->
    @include('admin.script')
</body>

</html>