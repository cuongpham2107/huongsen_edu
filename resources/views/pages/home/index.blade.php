@extends('pages.layouts.default')

@section('style')

@endsection

@section('sidebar')
    @parent

    <!-- Banner Wrapper Start -->
    @include('pages.layouts.partials.banner')
    <!-- Banner Wrapper End -->
@endsection

@section('content')
    <!-- Our Services Wrapper Start -->
    @if($admission_articles)
        <section class="home-services-wrapper">
            <div class="container">
                <div class="title">
                    <h2>Tuyển sinh</h2>
                    <div><span></span></div>
                </div>
                <div class="row">
                    @foreach ($admission_articles as $item)
                        <a href="{{$item->link}}">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-services">
                                    <div class="services-inner">
                                        <div class="our-services-icon"> {!! $item->icons !!} </div>
                                        <div class="our-services-text" style="margin-right: 20px;">
                                            <h4>{{$item->name}}</h4>
                                            <p class="line-clamp">{{$item->excerpt}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- Our Services End -->
    <div class="clearfix"></div>
    <!-- About Us Start -->
    @if($about_us)
        <div class="content-section-area-about bg-1" data-stellar-background-ratio="0.5"
             style="background: url({{Voyager::image($about_us->image)}}) repeat scroll 0 0;">
            <div class="container-fluid">
                <div class="row margin-left-about">
                    <div class="about-left-hanf">
                        <div class="box bg-cello section-relative">
                            <h3>{{$about_us->title}}</h3>
                            <p class="wow fadeIn">{{$about_us->excerpt}}.</p>
                            <div class="about-btn"><a class="button active" href="/contact">Liên hệ đăng ký</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- About Us End -->
    <!-- Our Services Wrapper Start -->
    <section class="our-team-wrapper">
        <div class="container">
            <div class="title">
                <h2>Đơn vị thành viên</h2>
                <div><span></span></div>
            </div>
            <div class="row">
                @if($our_team)
                    @foreach ($our_team as $item)
                        <div class="col-sm-6 col-md-4">
                            <div class="single-blog">
                                <div class="image"><a href="{{route('unit-information.show',$item->slug)}}">
                                        <img src="{{Voyager::image($item->image)}}" alt="{{$item->title}}" width="360" height="240"
                                             style="object-fit: cover">
                                    </a>
                                    <a href="{{route('unit-information.show',$item->slug)}}" class="overlay-box"><span
                                                class="icon fa fa-link"></span></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h3><a href="{{route('unit-information.show',$item->slug)}}">{{$item->title}}</a></h3>
                                    </div>
                                    <p>{{$item->excerpt}}</p>
                                    <a class="read-more" href="{{route('unit-information.show',$item->slug)}}">Xem thêm<i
                                                class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div id="home-staff" class="owl-carousel">
                        @foreach ($our_team as $item)
                            <div class="our-team">
                                <img src="{{Voyager::image($item->image)}}" alt="" width="260" height="390"
                                     style="object-fit: cover">
                                <div class="team-content">
                                    <h3 class="title">{{$item->name}}</h3>
                                    <span class="post">{{$item->excerpt}}</span>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Our Services End -->
    <!-- Counter Start -->
    <div class="counters-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading"><i class="fa fa-user"></i>
                            <h4>Giáo viên</h4>
                        </div>
                        <span class="counter">{{setting('count-this.customers')}}</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading"><i class="fa fa-book"></i>
                            <h4>Khoá học</h4>
                        </div>
                        <span class="counter">{{setting('count-this.courses')}}</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading"><i class="fa fa-graduation-cap"></i>
                            <h4>Học sinh</h4>
                        </div>
                        <span class="counter">{{setting('count-this.student')}}</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading"><i class="fa fa-flag"></i>
                            <h4>Trung tâm</h4>
                        </div>
                        <span class="counter">{{setting('count-this.province')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->
    <!-- Our Gallery Wrapper Start -->
    @if($our_gallery)
        <section class="our-gallery-wrapper">
            <div class="container">
                <div class="title">
                    <h2>{{$our_gallery->name}}</h2>
                    <div><span></span></div>
                </div>
            </div>
            <div class="container-fluid">
                <div id="home-gallery" class="owl-carousel">
                    @if(count(json_decode($our_gallery->images)) > 0)
                        @foreach (json_decode($our_gallery->images) as $key => $item)
                            <div class="item">
                                <img src="{{Voyager::image($item)}}" width="321" height="250"
                                     alt="" style="object-fit: cover">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    @endif
    <!-- Our Gallery Wrapper End -->
    <!-- Testimonials Wrapper Start -->
    <div class="testimonials-wrapper"
         style="height: 500px;background: rgba(0, 0, 0, 0) url({{ Voyager::image($banner_image->background) }}) no-repeat fixed left top; background-size: cover; background-position: center;">
        <div class="container">
        </div>
    </div>
    <!-- Our Testimonials Wrapper End -->
    <!-- Blog Wrapper Start -->
    <section class="blog-wrapper">
        <div class="container">
            <div class="title">
                <h2>Tin tức, sự kiện</h2>
                <div><span></span></div>
            </div>
            <div class="row">
                @if($our_blog)
                    @foreach ($our_blog as $item)
                        <div class="col-sm-6 col-md-4">
                            <div class="single-blog">
                                <div class="image"><a href="{{route('posts.show',$item->slug)}}">
                                        <img src="{{Voyager::image($item->image)}}" alt="" width="360" height="240"
                                             style="object-fit: cover">
                                    </a>
                                    <a href="{{route('posts.show',$item->slug)}}" class="overlay-box"><span
                                                class="icon fa fa-link"></span></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title"> <span>{{date("d", strtotime($item->created_at))}}<br>
                    {{\Carbon\Carbon::parse($item->created_at)->locale('vi-VN')->translatedFormat("F")}}
                  </span>
                                        <h3><a href="{{route('posts.show',$item->slug)}}">{{$item->title}}</a></h3>
                                    </div>
                                    <p>{{$item->excerpt}}</p>
                                    <a class="read-more" href="{{route('posts.show',$item->slug)}}">Xem thêm<i
                                                class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- Our Blog Wrapper End -->

@endsection

@section('js')
@endsection