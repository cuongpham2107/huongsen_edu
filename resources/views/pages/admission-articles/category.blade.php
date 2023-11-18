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
                        <h3>{{ $category->name }}</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>{{ $category->name }}</li>
                    {{-- <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li>Blog - Full Width</li> --}}
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper blog-wrapper blog-right">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 pull-left">
                    <div class="row">
                      @foreach ($posts as $item)
                        <div class="col-md-6 col-sm-12">
                          <div class="single-blog">
                              <div class="image"> <a href="{{route('admission-articles.show',$item->slug)}}">
                                <img src="{{Voyager::image($item->image)}}" width="360" height="240" style="object-fit: cover"
                                          alt=""></a>
                                  <a href="{{route('admission-articles.show',$item->slug)}}" class="overlay-box"><span class="icon fa fa-link"></span></a>
                              </div>
                              <div class="blog-content">
                                  <div class="blog-title">  <span >{{date("d", strtotime($item->created_at))}}<br>
                                    {{\Carbon\Carbon::parse($item->created_at)->locale('vi-VN')->translatedFormat("F")}} </span>
                                      <h3> <a href="{{route('admission-articles.show',$item->slug)}}">{{$item->title}}</a> </h3>
                                  </div>
                                  <p class="line-clamp">{{$item->excerpt}}
                                  </p>
                                  <a class="read-more" href="{{route('admission-articles.show',$item->slug)}}">Xem thêm <i
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
                        {{-- <div class="panel panel-default panel-sidebar ">
                            <div class="panel-heading">
                                <h3><span class="title-about">Popular Classes</span> </h3>
                            </div>
                            <div class="panel-body p0 bn">
                                <ul class="list-unstyled list-panel">
                                    <li> <a href="javascript:void(0)"> <span class="list-image"><img
                                                    src="images/sidebar-1.jpg" alt=""
                                                    class="img-responsive"></span>
                                            <sapn class="list-title-info">Mauris semper mass feugiat facilisis.
                                                <small>March 3, 2018</small></sapn>
                                        </a> </li>
                                    <li> <a href="javascript:void(0)"> <span class="list-image"><img
                                                    src="images/sidebar-2.jpg" alt="Image blog"
                                                    class="img-responsive"></span>
                                            <sapn class="list-title-info">Mauris semper mass feugiat facilisis.
                                                <small>April 4, 2018</small></sapn>
                                        </a> </li>
                                    <li> <a href="javascript:void(0)"> <span class="list-image"><img
                                                    src="images/sidebar-3.jpg" alt="Image blog"
                                                    class="img-responsive"></span>
                                            <sapn class="list-title-info">Mauris semper mass feugiat facilisis. <small>May
                                                    4, 2018</small></sapn>
                                        </a> </li>
                                </ul>
                            </div>
                        </div> --}}
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Wrapper End -->
@endsection

@section('js')
@endsection
