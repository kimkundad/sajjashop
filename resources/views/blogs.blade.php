@extends('layouts.template')

@section('title')
ข่าวประชาสัมพันธ์
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')



<div class="ps-page--blog">
        <div class="container">
            <div class="ps-page__header">
                <h1>ข่าวประชาสัมพันธ์</h1>
                <div class="ps-breadcrumb--2">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                        <li>ข่าวประชาสัมพันธ์</li>
                    </ul>
                </div>
            </div>
            <div class="ps-blog--sidebar">  
                <div class="ps-blog__left">

                @if(isset($blog))
                @foreach($blog as $u)
                    <div class="ps-post ps-post--small-thumbnail">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{ url('blog_detail/'.$u->id_b) }}"></a>
                        <img src="{{ url('img/blog/'.$u->image) }}" alt="{{ $u->title }}">
                            <div class="ps-post__badge"><i class="icon-volume-high"></i></div>
                        </div>
                        <div class="ps-post__content">
                            <div class="ps-post__top">
                                <div class="ps-post__meta"><a href="#">{{ $u->title_cat }}</a>
                                </div><a class="ps-post__title" href="{{ url('blog_detail/'.$u->id_b) }}">{{ $u->title }}</a>
                                <p>{{ $u->sub_title }}…</p>
                            </div>
                            <div class="ps-post__bottom">
                                <p>{{ formatDateThat($u->create) }} by<a href="#"> admin</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  @endif
                    
                   
                    @include('pagination.default', ['paginator' => $blog])
                   

                </div>
                <div class="ps-blog__right">
                    <aside class="widget widget--blog widget--search">
                    @if(isset(setting()->image_4))
                        <a href="{{ setting()->url_img4 }}">
                            <img src="{{ url('img/setting/'.setting()->image_4) }}" alt="">
                        </a>
                    @endif
                    </aside>
                    
                    
                </div>
            </div>
        </div>
    </div>
   
    
 
    

@endsection

@section('scripts')
<script>
   
</script>
@stop('scripts')