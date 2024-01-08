@extends('pages.layouts.default')
@section('content')
    {{-- @dd($pageMeta) --}}
    <!-- Breadcromb Wrapper Start -->
    <div class="breadcromb-wrapper">
        <div class="breadcromb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>{{ $pageMeta['title'] }}</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Về chúng tôi</li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>{{ $pageMeta['title'] }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper blog-wrapper blog-single course-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 pull-left">
                    <div class="blog-single-img">
                        @if($about->image)
                            <img src="{{Voyager::image($about->image)}}" title="" style="height: 550px; object-fit: cover">
                        @endif
                        <h2>{{$about->title}}</h2>
                        <ul class="list-inline list-blog-single">
                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="javascript:void(0)">Admin</a></li>
                            {{-- <li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="javascript:void(0)">4
                                    Comments</a></li> --}}
                        </ul>
                        <p>{!! $about->body !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Wrapper End -->
    <!-- Our Services Wrapper Start -->
    <section class="our-team-wrapper" style="padding: 0 0 170px;">
        <div class="container">
            <div class="row">
                @if($our_team)
                    @foreach ($our_team as $item)
                        <div class="col-xs-6 col-sm-4 col-md-2">
                            <div class="single-blog">
                                <div class="image">
                                    <img src="{{Voyager::image($item->thumbnail('cropped34', 'avatar'))}}" alt="{{$item->name}}" style="object-fit: cover">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h3>{{$item->name}}</h3>
                                    </div>
                                    <p>{{$item->position}}</p>
                                    <p>{{$item->info}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- Our Services End -->
@endsection

@section('style')
    <style>
        .blog-content {
            text-align: center;
        }
        .blog-title {
             margin-bottom: unset;
        }
        .our-team-wrapper .row {
            display: flex;
            flex-flow: row wrap;
        }
    </style>
@endsection
