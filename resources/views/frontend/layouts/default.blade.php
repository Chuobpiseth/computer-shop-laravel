<!DOCTYPE html>
<html lang="en">
  <head>
     @include('frontend.includes.head')
  </head>
<body>
<div class="_header">
    @include('frontend.includes.header')
</div>

<div class="_main">
    @yield('content')
</div>

<div class="_foot">
    @include('frontend.includes.footer')
</div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('assets/homeassets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="{{asset('assets/homeassets/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets/homeassets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/homeassets/js/tabs.js')}}"></script>
  <script src="{{asset('assets/homeassets/js/popup.js')}}"></script>
  <script src="{{asset('assets/homeassets/js/custom.js')}}"></script>

  </body>
</html>
