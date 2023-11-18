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
                        <h3>{{$pageMeta['title']}}</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Trang chủ</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Tin tức</li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>{{$pageMeta['title']}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper blog-wrapper blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12 pull-left">
                    <div class="blog-single-img"> 
                        @if($post->image)
                            <img src="{{Voyager::image($post->image)}}" title="" width="750" height="500" style="object-fit: cover">
                        @endif
                        <h2>{{$post->title}}</h2>
                        <ul class="list-inline list-blog-single">
                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="javascript:void(0)">Admin</a></li>
                            {{-- <li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="javascript:void(0)">4
                                    Comments</a></li> --}}
                        </ul>
                        <p>{!! $post->body !!}</p>
                        <ul class="list-inline list-social-color">
                          <li><a href="{{setting('social-media.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="{{setting('social-media.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="{{setting('social-media.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="{{setting('social-media.youtube')}}"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 pull-right">
                    <aside>
                        @include('pages.layouts.partials.category')
                        <div class="panel panel-default panel-sidebar ">
                            <div class="panel-heading">
                                <h3><span class="title-about">Tin tức liên quan</span> </h3>
                            </div>
                            <div class="panel-body p0 bn">
                                <ul class="list-unstyled list-panel">
                                  @foreach ($post_popular as $item)
                                    <li> 
                                      <a href="{{route('document-knowledge.show',$item->slug)}}"> 
                                        <span class="list-image">
                                          <img src="{{Voyager::image($item->image)}}" alt="" width="97" height="73" style="object-fit: cover"
                                                    class="img-responsive">
                                        </span>
                                        <sapn class="list-title-info">{{$item->title}}
                                                <small>{{date("F j, Y", strtotime($item->created_at))}}</small>
                                        </sapn>
                                        </a>
                                      </li>  
                                  @endforeach
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Wrapper End -->
@endsection

@section('js')
@endsection
