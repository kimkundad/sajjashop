@extends('layouts.template')

@section('title')
เกี่ยวกับเรา
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')

<div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                <li>เกี่ยวกับเรา</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro" style="padding: 50px 0; 100px 0">
            <div class="container">
            @if(isset(setting()->image_3))
            <img src="{{ url('img/setting/'.setting()->image_3) }}" alt="">
            @endif
                <br><br>
                <div class="ps-section__header">
                
                    <h4>วิสัยทัศน์และพันธกิจ</h4>
                    <h3>เป็นช่องทางจัดจำหน่ายสินค้าวัสดุก่อสร้างและสินค้าตกแต่งบ้านที่ดีทีสุดในภูมิภาคอาเซียน (A Better Choice for A Better Home)</h3>
                    <p>บริษัทจะมุ่งสร้างคุณค่าของสินค้าและบริการให้เหมาะสมกับความต้องการของลูกค้าในแต่ละพื้นที่ 
                        ควบคู่ไปกับการบริหารต้นทุนและค่าใช้จ่ายในการดำเนินธุรกิจให้อยู่ในระดับที่เหมาะสมเพื่อให้บริษัทสามารถส่งมอบความคุ้มค่าของสินค้าและบริการให้แก่ลูกค้าได้สูงที่สุด 
                        เพื่อให้บรรลุวิสัยทัศน์ในการเป็นช่องทางจัดจำหน่ายสินค้าวัสดุก่อสร้างและสินค้าตกแต่งบ้านที่ดีที่สุดในอาเซียน นอกจากการบริหารงานภายใต้หลักธรรมาภิบาลและมุ่งเน้นกระบวนการทำงานที่เป็นเลิศแล้ว 
                        บริษัทยังจะมุ่งพัฒนาช่องทางจัดจำหน่ายสินค้า การสร้างความสัมพันธ์กับลูกค้า การทำงานร่วมกับพันธมิตรทางธุรกิจ
                         ควบคู่ไปกับการพัฒนาระบบเทคโนโลยีสารสนเทศและการพัฒนาบุคคลากรเพื่อรองรับการเติบโตและสร้างมูลค่าเพิ่มที่เหมาะสมให้แก่ผู้มีส่วนได้เสียและสังคมโดยรวม</p>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-cube"></i>
                                <h4>45M</h4>
                                <p>Product for sale</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-store"></i>
                                <h4>1.8M</h4>
                                <p>Sellers Active on Martfury</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-bag2"></i>
                                <h4>30.6M</h4>
                                <p>Buyer active on Martfury</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                            <div class="ps-block--icon-box"><i class="icon-cash-dollar"></i>
                                <h4>$2.46M</h4>
                                <p>Annual gross merchandise sales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--include ../../partials/pages/about-us/milestone-->
        
        
        <div class="ps-about-awards">
            <div class="container">
                <div class="ps-section__header">
                    <h4>Awards & Recognition</h4>
                    <p>Industry leaders and influencers recognize Overstock as one of the most trust worthy retail companies in the U.S., ranking high for both customer and employee satisfaction.</p>
                </div>
                <div class="ps-section__content">
                    <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="5" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1500" data-owl-mousedrag="off"><a href="#"><img src="img/awards/1.png" alt=""></a><a href="#"><img src="img/awards/2.png" alt=""></a><a href="#"><img src="img/awards/3.png" alt=""></a><a href="#"><img src="img/awards/4.png" alt=""></a><a href="#"><img src="img/awards/5.png" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>

    


@endsection

@section('scripts')
@stop('scripts')