<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <link rel="icon" href="{{ asset('front/images/4781.png') }}" type="image/png" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <meta name="author" content="" />

        <title>GIT (GwadarInstituteOfTechnology)</title>



        {{-- ADMIN PANEL ASSETS --}}

        <link href="{{ asset('admin/css/styles.css')}}" rel="stylesheet" />

        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>



        {{-- JQUERY --}}

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



        {{-- EDITOR --}}

        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>



    </head>

    <body class="sb-nav-fixed">

        

        @include('admin.layout.navBar')

        

        <div id="layoutSidenav">



            @include('admin.layout.sideBar')

            

            <div id="layoutSidenav_content">

            

                @yield('content')

                

                @include('admin.layout.footer')



            </div>

        

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="{{ asset('admin/js/scripts.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

        <script src="{{ asset('admin/assets/demo/datatables-demo.js')}}"></script>

    </body>

</html>