{{-- @php
   $banner = \App\Banner::where('status','PUBLISHED')->limit(3)->get();   
@endphp
@if($banner)
<div class="banner-wrapper">
  <div id="first-slider" class="">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- Item 1 -->
        <div class="item slide1 active">
          <div class="row">
            <div class="container">
              <div class="col-md-4 col-sm-5 text-center hidden-sm hidden-md hidden-lg"> <img
                  data-animation="animated zoomInLeft" src="images/slider-img1.png" alt=""> </div>
              <div class="col-md-8 col-sm-7 text-left">
                <h1 data-animation="animated bounceInLeft" class="">Best Template for <span>Education</span></h1>
                <p data-animation="animated bounceInLeft" class="">Lorem Ipsum is simply dummy text of the
                  industry<span> industry's standard dummy text.</span></p>
                <a class="btn btn-hero" data-animation="animated bounceInLeft" href="#services">Services</a>
              </div>
              <div class="col-md-4 col-sm-5 text-right hidden-xs"> <img data-animation="animated zoomInLeft"
                  src="images/slider-img1.png" alt=""> </div>
            </div>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="item slide2">
          <div class="row">
            <div class="container">
              <div class="col-md-4 col-sm-5 text-center hidden-sm hidden-md hidden-lg"> <img
                  data-animation="animated zoomInLeft" src="images/slider-img2.png" alt=""> </div>
              <div class="col-md-8 col-sm-7 text-left">
                <h1 data-animation="animated bounceInLeft" class="">Best Template for <span>Education</span></h1>
                <p data-animation="animated bounceInLeft" class="">Lorem Ipsum is simply dummy text of the
                  industry<span> industry's standard dummy text.</span></p>
                <a class="btn btn-hero" data-animation="animated bounceInLeft" href="#services">Services</a>
              </div>
              <div class="col-md-4 col-sm-5 text-right hidden-xs"> <img data-animation="animated zoomInLeft"
                  src="images/slider-img2.png" alt=""> </div>
            </div>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="item slide3">
          <div class="row">
            <div class="container">
              <div class="col-md-4 col-sm-5 text-center hidden-sm hidden-md hidden-lg"> <img
                  data-animation="animated zoomInLeft" src="images/slider-img3.png" alt=""> </div>
              <div class="col-md-8 col-sm-7 text-left">
                <h1 data-animation="animated bounceInLeft" class="">Best Template for <span>Education</span></h1>
                <p data-animation="animated bounceInLeft" class="">Lorem Ipsum is simply dummy text of the
                  industry<span> industry's standard dummy text.</span></p>
                <a class="btn btn-hero" data-animation="animated bounceInLeft" href="#services">Services</a>
              </div>
              <div class="col-md-4 col-sm-5 text-right hidden-xs"> <img data-animation="animated zoomInLeft"
                  src="images/slider-img3.png" alt=""> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Wrapper for slides--> <a class="left carousel-control" href="#carousel-example-generic" role="button"
        data-slide="prev"> <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span> </a> <a
        class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i
          class="fa fa-angle-right"></i><span class="sr-only">Next</span> </a>
    </div>
  </div>
</div>
@endif --}}


 @php
   $banner = \App\Banner::where('status','PUBLISHED')->where('type','banner')->limit(3)->get();   
@endphp
@if($banner)
<div class="banner-wrapper">
  <div id="first-slider" class="">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- Item 1 -->
        @foreach ($banner as $key => $item)
          <div class="item slide{{$key+1}} @if($key == 0) active @endif" style="background-image: url({{Voyager::image($item->background)}})">
            <div class="row">
              <div class="container">
                <div class="col-md-4 col-sm-5 text-center hidden-sm hidden-md hidden-lg"> <img
                    data-animation="animated zoomInLeft" src="{{Voyager::image($item->background)}}" alt=""> </div>
                <div class="col-md-8 col-sm-7 text-left">
                  <h1 data-animation="animated bounceInLeft" class="">{{$item->name}}</h1>
                  <p data-animation="animated bounceInLeft" class="">{{$item->description}}</span></p>
                  <a class="btn btn-hero" data-animation="animated bounceInLeft" href="{{$item->link}}">Dịch vụ</a>
                </div>
                <div class="col-md-4 col-sm-5 text-right hidden-xs"> <img data-animation="animated zoomInLeft"
                    src="{{Voyager::image($item->image)}}" alt=""> </div>
              </div>
            </div>
          </div>
        @endforeach
        
       
      </div>
      <!-- End Wrapper for slides--> <a class="left carousel-control" href="#carousel-example-generic" role="button"
        data-slide="prev"> <i class="fa fa-angle-left"></i><span class="sr-only">Trước</span> </a> <a
        class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i
          class="fa fa-angle-right"></i><span class="sr-only">Kế tiếp</span> </a>
    </div>
  </div>
</div>
@endif