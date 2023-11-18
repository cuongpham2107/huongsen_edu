<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="{{ $pageMeta['meta_description'] ?? setting('site.description') }}" />
  <meta name="content" content="{{ $pageMeta['meta_content'] ?? setting('site.content') }}" />

  <title>{{ $pageMeta['title'] ?? setting('site.title') }}</title>

  <link rel="shortcut icon" href="{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}" type="image/png">

  <meta property="og:image"
    content="{{ \TCG\Voyager\Facades\Voyager::image($pageMeta['image'] ?? setting('site.logo')) }}" />
  <meta property="og:url" content="{{ \Request::fullUrl() }}" />
  <meta property="og:type" content="Website" />
  <meta property="og:title" content="{{ $pageMeta['title'] ?? setting('site.title') }}" />
  <meta property="og:description" content="{{ $pageMeta['meta_description'] ?? setting('site.description') }}" />
  <meta property="og:content" content="{{ $pageMeta['meta_content'] ?? setting('site.content') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome CSS-->
  <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Animate CSS -->
  <link href="{{asset('assets/animate/animate.css')}}" rel="stylesheet">
  <!-- Mobile Menu Css -->
  <link href="{{asset('assets/css/slicknav.css')}}" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="{{asset('assets/owl-carousel/css/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('assets/owl-carousel/css/owl.theme.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

  @yield('style')


</head>

<body>

  {{-- @include('frontend.layouts.partials.loading') --}}
  
   <!-- Pre Loader -->
   {{-- <div id="dvLoading"></div> --}}
   <!-- Header Start -->
    <header>
      @include('pages.layouts.partials.header')
      @section('sidebar')
      @show
    </header>
   <!-- Header End -->
  
   @yield('content')
   @include('pages.layouts.partials.alert')
   <!-- Footer Wrapper Start -->
   @include('pages.layouts.partials.footer')
   <!-- Footer Wrapper End -->

    


   


  {{-- @include('frontend.layouts.partials.alert') --}}
  <script src="{{asset('assets/jquery/jquery-1.12.0.min.js')}}"></script>
  <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/jquery/plugin.js')}}"></script>
  <script src="{{asset('assets/jquery/plugins.js')}}"></script>
  <script src="{{asset('assets/jquery/slider.js')}}"></script>
  <script src="{{asset('assets/owl-carousel/js/owl.carousel.js')}}"></script>
  <script src="{{asset('assets/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/jquery/jquery.slicknav.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  @yield('js')
</body>

</html>