<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  <!-- Basic -->
  <title>"@yield('title','Home | Protech Gas Ltd')"</title>
   @include('includes.head')
  </head>
 <body>
  @include('includes.header')

  
    @yield('content')

  
    @include('includes.footer')

    
<!-- End Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<div id="loader">
   <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
  </div>
</div>

<!-- Margo JS  -->
  <script type="text/javascript" src="{{asset('js/jquery-2.1.1.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.migrate.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/modernizrr.js') }}"></script>
  <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js') }}"></script>
  <script type="text/javascript" src="{[asset('js/jquery.isotope.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.appear.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/count-to.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.lettering.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.easypiechart.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.nicescroll.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.themepunch.plugins.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/script.js') }}"></script>
  

  
@yield('script')
  
</body>
</html>


