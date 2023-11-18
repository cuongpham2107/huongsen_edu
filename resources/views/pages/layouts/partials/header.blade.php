@php
  $menu = menu('pages', '_json');
  // dd(URL::current() == url('/'));
@endphp

  <div class="top-wrapper hidden-xs">
    <div class="container">
      <div class="pull-left"> <i class="fa fa-map-o" aria-hidden="true"></i> {{setting('site.address')}} </div>
      <div class="quick-contacts pull-right"> <span><i class="fa fa-phone"></i> <a href="tell:{{setting('site.phone')}}">{{setting('site.phone')}}</a></span>
         <span>
        <i class="fa fa-envelope"></i><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></span>
        {{-- <span><a href="login.html"><i class="fa fa-user"></i> Login</a> / <a href="register.html">Register</a></span> --}}
      </div>
    </div>
  </div>
  {{-- @dd($menu) --}}
  <!-- Navigation Start -->
  <nav class="navbar navbar-default main-navigation affix-top" data-offset-top="197" data-spy="affix">
    <div class="main-menu-header">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
            class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{Voyager::image(setting('site.logo'))}}" alt=""></a>
      </div>
      <div class="header-search pull-right"> <a class="open-search"> <i class="fa fa-search"></i> </a> </div>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav navbar-right">

          @foreach ($menu as $item)
            @if(count($item->children) == 0)
              <li class="@if(URL::current() == url($item->url)) active @endif">
                <a href="{{ url($item->url) }}">{{ $item->title }}</a>
              </li>
            @else
              <li class="dropdown dropdown-toggle">
                <a href="{{ url($item->url) }}" data-toggle="dropdown">{{ $item->title }} <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  @foreach($item->children as $value)
                    <li>
                      <a href="{{ url($value->url) }}">{!! $value->title !!}</a>
                    </li>
                  @endforeach
                </ul>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
      <form class="full-search" action="{{url('/search')}}" method="get" >
        <div class="container-fluid">
          <div class="row">
            <input class="form-control" placeholder="Search" type="text" name="search">
            <a class="close-search"> <span class="fa fa-times"> </span> </a>
          </div>
        </div>
      </form>
      <ul class="wpb-mobile-menu">
        @foreach ($menu as $item)
            @if(count($item->children) == 0)
              <li class="@if(URL::current() == url($item->url)) active @endif">
                <a href="{{ url($item->url) }}">{{ $item->title }}</a>
              </li>
            @else
              <li >
                <a href="{{ url($item->url) }}">{{ $item->title }} </a>
                <ul >
                  @foreach($item->children as $value)
                    <li>
                      <a href="{{ url($value->url) }}">{!! $value->title !!}</a>
                    </li>
                  @endforeach
                </ul>
              </li>
            @endif
          @endforeach
      </ul>
    </div>
  </nav>
  <!-- Navigation End -->

