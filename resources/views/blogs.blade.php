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
                    <div class="ps-post ps-post--small-thumbnail">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{ url('blog_detail') }}"></a><img src="{{ url('assets/img/253348824_4670136139705652_3515250629620715771_n.jpg') }}" alt="">
                            <div class="ps-post__badge"><i class="icon-volume-high"></i></div>
                        </div>
                        <div class="ps-post__content">
                            <div class="ps-post__top">
                                <div class="ps-post__meta"><a href="#">Entertaiment</a><a href="#">Technology</a>
                                </div><a class="ps-post__title" href="{{ url('blog_detail') }}">ไม่ช้อป นอนไม่หลับแน่! วันเดียวเท่านั้น!!</a>
                                <p>ลดพิเศษเพิ่มคุ้มจุกๆ 11.11 Double Day ลดแรงเกินเรื่อง! มาพร้อมแบรนด์สุดต๊าชกว่า 48 แบรนด์ กระหน่ำส่วนลดหนักจัดเต็มทั้งลด+รับ ถึง 4 ต่อ…</p>
                            </div>
                            <div class="ps-post__bottom">
                                <p>December 17, 2017 by<a href="#"> drfurion</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-post ps-post--small-thumbnail">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{ url('blog_detail') }}"></a><img src="{{ url('assets/img/253310624_4670179239701342_1066763090824709495_n.jpg') }}" alt="">
                        </div>
                        <div class="ps-post__content">
                            <div class="ps-post__top">
                                <div class="ps-post__meta"><a href="#">Life Style</a><a href="#">Others</a>
                                </div><a class="ps-post__title" href="{{ url('blog_detail') }}">ดีลเด็ด! วันสุดท้าย!! Easy Laundry ลดสูงสุด 40%*</a>
                                <p>🎯 ดีลเด็ด! วันสุดท้าย!! Easy Laundry ลดสูงสุด 40%* ช่วยให้เรื่องงานซักเป็นเรื่องง่าย ช้อปเลย >>  พ.ย. 64 - 9 พ.ย. 64 🛒ช้อปเลยที่ โฮมโปรทุกสาขาใกล้บ้าน และ ออนไลน์ …</p>
                            </div>
                            <div class="ps-post__bottom">
                                <p>December 17, 2017 by<a href="#"> drfurion</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-post ps-post--small-thumbnail">
                        <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{ url('blog_detail') }}"></a><img src="{{ url('assets/img/254254830_4669660626419870_2176686230184010597_n.jpg') }}" alt="">
                        </div>
                        <div class="ps-post__content">
                            <div class="ps-post__top">
                                <div class="ps-post__meta"><a href="#">Life Style</a><a href="#">Others</a>
                                </div><a class="ps-post__title" href="{{ url('blog_detail') }}">ไม่ช้อปถือว่าพลาด! ดีล Home Entertainment ลดสูงสุด 40%* </a>
                                <p>ไม่ช้อปถือว่าพลาด! ดีล Home Entertainment ลดสูงสุด 40%* ครบครันทุกเทรนด์ ช้อปเลย >> ช้อปเลยที่ โฮมโปรทุกสาขาใกล้บ้าน และ ออนไลน์ …</p>
                            </div>
                            <div class="ps-post__bottom">
                                <p>December 17, 2017 by<a href="#"> drfurion</a></p>
                            </div>
                        </div>
                    </div>
                   
                    
                    <div class="ps-pagination">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="ps-blog__right">
                    <aside class="widget widget--blog widget--search">
                        <img src="{{ url('assets/img/71349133_2443524469094285_4970030984067022848_n.jpg') }}" alt="">
                        <img src="{{ url('assets/img/CHO_firstpageADs.jpg') }}" alt="">
                        <img src="https://chopanich.com/wp-content/uploads/2019/07/CHO_BannerMiddle.jpg" alt="">
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