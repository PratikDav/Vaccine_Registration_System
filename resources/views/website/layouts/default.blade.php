<!-- header section start-->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.includes.header')
</head>
<!-- header section end -->

<body>
    <main>

        <!-- nav section start -->
        <div id="navbar" class="container">
            <nav class="navbar navbar-expand-lg">
                @include('website.includes.nav')
            </nav>
        </div>
        <!-- nav section end -->


        <!-- page content start -->
        @yield('content')
        <!-- page content start -->
    </main>

    <!-- footer section start -->
    <footer id="footer">
        @include('website.includes.footer')
    </footer>
    <!-- footer section end -->


    <!-- Bootstrap JavaScript Libraries -->
    @include('website.includes.script')
    <!-- Custom JS -->
    <script src="{{ asset('website/js/nav.js') }}"></script>
    @yield('js')
</body>

</html>
