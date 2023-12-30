<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Files -->
    @include('admin.includes.css')

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->



    <!-- page container area start -->
    <div class="page-container">


        <!-- sidebar menu area start -->
        @include('admin.includes.sidebar')
        <!-- sidebar menu area end -->


        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            @include('admin.includes.header')
            <!-- header area end -->


            <!-- page title area start -->
            @include('admin.includes.page_title')
            <!-- page title area end -->

            <!-- Main Content Inner area start-->
            @yield('content')
            <!-- Main Content Inner area end -->


        </div>
        <!-- main content area end -->

        <!-- footer area start-->
        @include('admin.includes.footer');
        <!-- footer area end-->

    </div>
    <!-- page container area end -->



    <!-- offset area start -->
    @include('admin.includes.offset_area');
    <!-- offset area end -->


    <!-- script area start -->
    @include('admin.includes.scripts')
    <!-- script area end -->


</body>

</html>
