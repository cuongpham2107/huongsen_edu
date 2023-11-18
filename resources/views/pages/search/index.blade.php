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
                        <h3>Tìm kiếm</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Tìm kiếm</li>
                    {{-- <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li>Blog - Full Width</li> --}}
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper blog-wrapper blog-full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if($post)
                        @foreach ($post as $item)
                        <div class="blog-list clearfix">
                            <div class="blog-list-img"> <a href="{{route('posts.show',$item->slug)}}"> 
                            <img src="{{Voyager::image($item->image)}}" width="330" height="270" style="object-fit: cover"
                                        alt="" class="img-responsive" title=""> </a> 
                                    <span class="sticker-round ">{{date("d", strtotime($item->created_at))}}<br>
                                    {{date("M", strtotime($item->created_at))}}</span>
                                </div>
                            <div class="blog-list-details"> <a href="{{route('posts.show',$item->slug)}}">
                                    <h4>{{$item->title}}</h4>
                                </a>
                                <ul class="list-inline list-blog">
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                                    {{-- <li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="javascript:void(0)">4
                                            Comments</a></li> --}}
                                </ul>
                                <p class="line-clamp">{{$item->excerpt}}</p>
                                <a href="{{route('posts.show',$item->slug)}}" class="btn">Xem thêm</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-sm-12">
                            {{ $post->links('pages.layouts.partials.paginate') }}
                        </div>
                    @else
                        <p>Không tồn tại bài viết tìm kiếm</p>
                    @endif
                </div>
              
            </div>
        </div>
    </div>
    <!-- Inner Page Wrapper End -->
@endsection

@section('js')
@endsection
