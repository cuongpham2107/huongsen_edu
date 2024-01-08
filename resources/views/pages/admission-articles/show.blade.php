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
                    <li>Tuyển sinh</li>
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
                            <li><a target="_blank" href="https://www.facebook.com/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/share?url={{url()->current()}}"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="blog-comments">
                        <div class="blog-single-title">
                            <h3 id="blog-comments"><span class="title-about">Comments (3)</span></h3>
                        </div>
                        <div class="media">
                            <div class="media-left"> <a href=javascript:void(0)> <img class="media-object"
                                        src="images/blog-small1.jpg" alt=""> </a> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Person Name</h4>
                                <span class="publish-date"><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20,
                                    2017</span>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled.</p>
                                <a href=javascript:void(0) class="reply-link">Reply</a>
                                <div class="media">
                                    <div class="media-left"> <a href=javascript:void(0)> <img class="media-object"
                                                src="images/blog-small2.jpg" alt=""> </a> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Person Name</h4>
                                        <span class="publish-date"><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20,
                                            2016</span>
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"> <a href=javascript:void(0)> <img class="media-object"
                                        src="images/blog-small3.jpg" alt=""> </a> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Person Name</h4>
                                <span class="publish-date"><i class="fa fa-calendar" aria-hidden="true"></i> Jul 20,
                                    2018</span>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled.</p>
                                <a href=javascript:void(0) class="reply-link">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-form">
                        <div class="blog-single-title">
                            <h3>Leave a comments</h3>
                        </div>
                        <form action="#" class="form-style">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-12 form-groping"> <i class="fa fa-user color-2"></i>
                                        <input class="form-control" id="inputEmail3" placeholder="First name"
                                            type="text">
                                    </div>
                                    <div class="col-sm-6 col-xs-12 form-groping"> <i class="fa fa-envelope color-3"></i>
                                        <input class="form-control" id="inputEmail3" placeholder="Email Address"
                                            type="email">
                                    </div>
                                    <div class="col-sm-12 col-xs-12 form-groping"> <i class="fa fa-comments color-1"
                                            aria-hidden="true"></i>
                                        <textarea class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 form-groping">
                                        <button type="button" class="btn btn-main">Submite Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 pull-right">
                    <aside>
                        @include('pages.layouts.partials.category')
                        <div class="panel panel-default panel-sidebar ">
                            <div class="panel-heading">
                                <h3><span class="title-about">Tin tuyển sinh liên quan</span> </h3>
                            </div>
                            <div class="panel-body p0 bn">
                                <ul class="list-unstyled list-panel">
                                  @foreach ($post_popular as $item)
                                    <li> 
                                      <a href="{{route('admission-articles.show',$item->slug)}}"> 
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
