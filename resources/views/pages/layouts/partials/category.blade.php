
@php
    $admissionArticle = \App\AdmissionArticle::where('status','published')->get()->count();
    $posts = TCG\Voyager\Models\Post::where('status','published')->get()->count();
    $unitInformationsts = \App\UnitInformation::where('status','published')->get()->count();
    $cooperationLink =  \App\CooperationLink::where('status','published')->get()->count();
    $documentKnowledge = \App\DocumentKnowledge::where('status','published')->get()->count();
    $abroadStudy = \App\AbroadStudy::where('status','published')->get()->count();
    // dd($admissionArticle);
@endphp
<div class="panel panel-default panel-sidebar">
  <div class="panel-heading">
      <h3><span class="title-about">Danh mục</span> </h3>
  </div>
  <div class="panel-body">
      <ul class="list-group list-sidebar">
          <li class="list-group-item"><a href="{{route('admission-articles.index')}}">Tuyển sinh <span
                      class="pull-right">{{$admissionArticle}}</span></a></li>
          <li class="list-group-item"><a href="{{route('posts.index')}}">Tin tức sự kiện <span
                      class="pull-right">{{$posts}}</span></a></li>
          <li class="list-group-item"><a href="{{route('unit-information.index')}}">Đơn vị trực thuộc <span
                      class="pull-right">{{$unitInformationsts}}</span></a></li>
          <li class="list-group-item"><a href="{{route('cooperation-links.index')}}">Liên kết hợp tác <span
                      class="pull-right">{{$cooperationLink}}</span></a></li>
          <li class="list-group-item"><a href="{{route('document-knowledge.index')}}">Thư viện <span
                      class="pull-right">{{$documentKnowledge}}</span></a></li>
          <li class="list-group-item"><a href="{{route('abroad-studies.index')}}">Tư vấn du học<span
                      class="pull-right">{{$abroadStudy}}</span></a></li>
      </ul>
  </div>
</div>