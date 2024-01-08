@extends('pages.layouts.default')

@section('style')
@endsection

@section('content')
    <!-- Breadcromb Wrapper Start -->
    <div class="breadcromb-wrapper">
        <div class="breadcromb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>{{ $category->name ?? 'Tin tức & sự kiện' }}</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>{{ $category->name ?? 'Tin tức & sự kiện' }}</li>
                    {{-- <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li>Blog - Full Width</li> --}}
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- grid -->
    {{--<div class="inner-page-wrapper blog-wrapper blog-right">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 pull-left">
                    <div class="row">
                      @foreach ($posts as $item)
                        <div class="col-md-6 col-sm-12">
                          <div class="single-blog">
                              <div class="image"> <a href="{{route('posts.show',$item->slug)}}">
                                <img src="{{Voyager::image($item->image)}}" width="360" height="240" style="object-fit: cover"
                                          alt=""></a>
                                  <a href="{{route('posts.show',$item->slug)}}" class="overlay-box"><span class="icon fa fa-link"></span></a>
                              </div>
                              <div class="blog-content">
                                  <div class="blog-title"> <span>{{date("d", strtotime($item->created_at))}}<br>
                                    {{date("M", strtotime($item->created_at))}}</span>
                                      <h3> <a href="{{route('posts.show',$item->slug)}}">{{$item->title}}</a> </h3>
                                  </div>
                                  <p class="line-clamp">{{$item->excerpt}}
                                  </p>
                                  <a class="read-more" href="{{route('posts.show',$item->slug)}}">Xem thêm <i
                                          class="fa fa-long-arrow-right"></i> </a>
                              </div>
                          </div>
                        </div>
                      @endforeach
                      <div class="col-sm-12">
                        {{ $posts->links('pages.layouts.partials.paginate') }}
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 pull-right">
                    <aside>
                        @include('pages.layouts.partials.category')
                    </aside>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- grid -->
    <!-- list -->
    <div class="inner-page-wrapper blog-wrapper blog-full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($posts as $item)
                    <div class="blog-list clearfix">
                        <div class="blog-list-img">
                            <a href="{{route('posts.show',$item->slug)}}">
                                <img src="{{ Voyager::image($item->thumbnail('thumb', 'image')) }}" alt="{{$item->title}}" class="img-responsive" title="">
                            </a>
                            <span class="sticker-round ">{{date("d", strtotime($item->created_at))}} <br>{{date("M", strtotime($item->created_at))}}</span>
                        </div>
                        <div class="blog-list-details">
                            <a href="{{route('posts.show',$item->slug)}}">
                                <h4>{{$item->title}}</h4>
                            </a>
                            <ul class="list-inline list-blog">
                                <li><i class="far fa-clock"></i><a href="{{route('posts.show',$item->slug)}}">{{date("d/m/Y", strtotime($item->created_at))}}</a></li>
                            </ul>
                            <p>{{$item->excerpt}}</p>
                            <a href="{{route('posts.show',$item->slug)}}" class="btn">Xem thêm</a></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{ $posts->links('pages.layouts.partials.paginate') }}
                </div>
            </div>
        </div>
    </div>
    <!-- list -->
@endsection

@section('js')
@endsection
