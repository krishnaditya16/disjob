<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DisJob | @yield('title')  </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/homepage/img/logo/disjob_logo.png') }}">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/homepage/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/price_rangs.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/slick.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{asset('assets/homepage/css/style.css') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}" media="all">

        <!-- jQuery -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        
        <!-- Select2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('assets/homepage/img/logo/logo1.png') }}" alt="" style="width: 30px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!-- Header -->
    <header> @include('main.partials.header') </header>

    <!-- Main Content -->
    <main> @yield('content') </main>

    <!-- Footer -->
    <footer> @include('main.partials.footer') </footer>

    <!-- JS here -->
	
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{asset('assets/homepage/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('assets/homepage/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/popper.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('assets/homepage/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('assets/homepage/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/slick.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/price_rangs.js') }}"></script>
            
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('assets/homepage/js/wow.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/animated.headline.js') }}"></script>
    <script src="{{asset('assets/homepage/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{asset('assets/homepage/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/jquery.sticky.js') }}"></script>
            
    <!-- Contact js -->
    <script src="{{asset('assets/homepage/js/contact.js') }}"></script>
    <script src="{{asset('assets/homepage/js/jquery.form.js') }}"></script>
    <script src="{{asset('assets/homepage/js/jquery.validate.min.js') }}"></script>
    <script src="{{asset('assets/homepage/js/mail-script.js') }}"></script>
    <script src="{{asset('assets/homepage/js/jquery.ajaxchimp.min.js') }}"></script>
            
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('assets/homepage/js/plugins.js') }}"></script>
    <script src="{{asset('assets/homepage/js/main.js') }}"></script>

    <!-- DataTables -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }} "></script>

    <!-- DataTables  & Plugins -->
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>

    <!-- bs-custom-file-input -->
    <script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    
    </body>
</html>