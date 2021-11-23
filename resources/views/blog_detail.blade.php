@extends('layouts.template')

@section('title')
ข่าวประชาสัมพันธ์
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')


<style>
    .ps-post--detail .ps-post__header {
    padding-top: 110px;
    padding-bottom: 0px;
    text-align: center;
}
.ps-post--detail .ps-post__header h1 {
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 30px;
    line-height: 1.2em;
}
</style>
<div class="ps-page--blog">
        <div class="ps-post--detail">
            <div class="ps-post__header">
                <div class="container">
                    <h1>{{ $blog->title }}</h1>
                        <p>{{ formatDateThat($blog->create) }}. / By admin / in<a href="#">{{ $blog->title_cat }}</a></p>
                </div>
            </div>
            <div class="container">
                
                <div class="ps-post__content">
                <img src="{{ url('img/blog/'.$blog->image) }}" alt="{{ $blog->title }}">
                    <br><br>
                    <h4>🔥โปรเสียทรัพย์ ลดคุ้มจุก 11.11 Double Day ลดแรงเกินเรื่อง! มาพร้อมแบรนด์สุดต๊าชกว่า 48 แบรนด์ กระหน่ำส่วนลดหนักจัดเต็มทั้งลด+รับ ถึง 3 ต่อ</h4>
                    <p>
                   {!! $blog->detail !!}
                    </p>
                    
                    
                </div>

           
                
                <div class="ps-post__footer">
                    <p class="ps-post__tags">Tags:<a href="#">{{ $blog->title_cat }}</a></p>
                    <div class="ps-post__social">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>


        
       
    </div>
   
    
 
    

@endsection

@section('scripts')
<script>
   
</script>
@stop('scripts')