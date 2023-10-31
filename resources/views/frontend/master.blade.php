@include('frontend.includes.head')
<body>

<!-- ======= Header ======= -->
@include('frontend.includes.header')
<!-- ======= Hero Section ======= -->


@yield('body')
@include('frontend.includes.footer')

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('/')}}front/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{asset('/')}}front/assets/vendor/aos/aos.js"></script>
<script src="{{asset('/')}}front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}front/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('/')}}front/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('/')}}front/assets/js/main.js"></script>

</body>

</html>
