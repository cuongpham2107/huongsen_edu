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
          <h3>Liên hệ với chúng tôi</h3>
        </div>
      </div>
    </div>
    <div class="breadcromb-text">
      <ul>
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Trang chủ</a></li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li>Liên hệ</li>
        
      </ul>
    </div>
  </div>
</div>
<!-- Breadcromb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper contact-wrapper" style="padding: 80px 0 0 0;">
  <div class="container">
  <div class="row">
  <div class="col-md-8">
  <div class="contact-form">
  <h3>Liên hệ</h3>
 <form  method="post" action="{{route('contact.store')}}">
  @csrf
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input class="form-control" id="nameId" required name="name" placeholder="Họ và tên" type="text"  value="{{request()->name ?? ''}}">
        @error('name')<p class="text_error">Tên không được để trống</p>@enderror
      </div>
    </div>
    <!-- .col-md-6 -->
    <div class="col-md-6">
      <div class="form-group">
        <input class="form-control" id="emailId" required name="email" placeholder="Địa chỉ email" type="email" value="{{request()->email ?? ''}}">
        @error('email')<p class="text_error">Email không đúng định dạng</p>@enderror
      </div>
    </div>
    <!-- .col-md-6 --> 
  </div>
  <div class="form-group">
    <input class="form-control" id="subjectId" required name="phone" placeholder="Số điện thoại" type="text" value="{{request()->phone ?? ''}}">
    @error('phone')<p class="text_error">Số điện thoại không đúng</p>@enderror
  </div>
  <textarea class="form-control text-area" rows="3" name="content" placeholder="Lời nhắn..."></textarea>
  <button type="submit" class="btn btn-default">Gửi</button>
</form>
  </div>
  </div>
  <div class="col-md-4">
  <div class="address">
  <h3 class="contact-title">Chi tiết liên hệ</h3>
  <ul class="contact-address">
    <li>  <div class="contact-content">
      <p>{{setting('site.address')}}</p>
      </div>
    </li>
    <li>  <div class="contact-content">
        <p>{{setting('site.phone')}}</p>
      </div>
    </li>
    <li> <div class="contact-content">
      <p>{{setting('site.email')}}</p>
      </div>
    </li>
  </ul>
  <ul class="social-icon-rounded contact-social-icon">
    <li><a href="{{setting('social-media.facebook')}}"><i class="fa fa-facebook"></i></a></li>
    <li><a href="{{setting('social-media.twitter')}}"><i class="fa fa-twitter"></i></a></li>
    <li><a href="{{setting('social-media.instagram')}}"><i class="fa fa-instagram"></i></a></li>
    <li><a href="{{setting('social-media.youtube')}}"><i class="fa fa-youtube"></i></a></li>
  </ul>
</div>

  </div>
  </div>
  </div>
  <!-- Google Map Start --> 
<div class="google-map">
  {!! setting('site.google-map') !!}
</div>
<!-- Google Map End --> 
</div>
<!-- Inner Page Wrapper End --> 
@endsection

@section('js')
@endsection