@php
    $gallery = \App\StaticData::where('status','PUBLISHED')->where('slug','our-gallery')->first();
@endphp
<div class="footer-wrapper">
  <div class="footer-top-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="footer-about-info-area footer-top-content">
            <div class="footer-widget-heading">
              <h3>Về chúng tôi</h3>
            </div>
            <div class="footer-widget-content">
              <p>{{setting('site.title')}} </p>
              <p>{{setting('site.description')}}</p>
              <ul class="footer-social-menu list-inline">
                <li><a href="{{setting('social-media.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{setting('social-media.twitter')}}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{setting('social-media.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                <li><a href="{{setting('social-media.youtube')}}"><i class="fa fa-youtube"></i></a></li>
                {{-- <li><a href="{{setting('social-media.skype')}}"><i class="fa fa-skype"></i></a></li> --}}
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-tags-widget">
            <div class="footer-widget-heading">
              <h3>Liên kết nhanh</h3>
            </div>
            <div class="footer-widget-content">
              <ul class="footer-widget-menu">
                <li> <a href="{{url('/')}}">Trang chủ</a> </li>
                <li> <a href="{{route('about-us.show','ve-chung-toi')}}">Về chúng tôi</a></li>
                <li> <a href="{{route('admission-articles.index')}}">Tuyển sinh</a></li>
                <li> <a href="{{route('posts.index')}}">Tin tức - sự kiện</a> </li>
                <li> <a href="{{route('unit-information.index')}}">Đơn bị trực thuộc</a> </li>
                <li> <a href="{{route('cooperation-links.index')}}">Liên kết hợp tác</a> </li>
                <li> <a href="{{route('document-knowledge.index')}}">Thư viện</a> </li>
                <li> <a href="{{route('abroad-studies.index')}}">Tư vấn du học</a> </li>
                <li> <a href="{{route('contact.index')}}">Liên hệ</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-contact">
            <div class="footer-widget-heading">
              <h3>Liên hệ với chúng tôi</h3>
            </div>
            <div class="footer-widget-content">
              <p>Hãy liên hệ với chúng tôi để nhận được những thông tin mới nhất cập nhập từ chúng tôi.</p>
              <ul class="footer-conatct-menu">
                <li> <a href="mailto:{{setting('site.email')}}"><i class="fa fa-envelope"></i><span>Email :</span>
                  {{setting('site.email')}}</a> </li>
                <li> <a href="tell:{{setting('site.phone')}}"><i class="fa fa-phone"></i> <span>Phone : </span> {{setting('site.phone')}}</a> </li>
                <li> <a href="#"><i class="fa fa-map-o"></i><span>Address :</span> {{setting('site.address')}}</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-instagram">
            <div class="footer-widget-heading">
              <h3>Hình ảnh</h3>
            </div>
            <div class="footer-instagram-widget footer-widget-content"> 
              @if(isset($gallery) && count(json_decode($gallery->images)) > 0)
                @foreach (json_decode($gallery->images) as $key => $item)
                  <a href="#"><img
                    src="{{Voyager::image($item)}}" alt=""></a> 
                @endforeach
              @endif
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-wrapper">
    <div class="container">
      <p>&copy; Copyright <span id="year"></span> Nguyen Tat Thanh | All rights reserved. Created by <a href="kennatech.vn">KennaTech</a>.</p>
    </div>
  </div>
</div>