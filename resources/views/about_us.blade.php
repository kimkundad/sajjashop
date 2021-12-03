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
                    <h3>"สัจจะวัสดุ"เป็นร้านค้าที่จัดจําหน่ายวัสดุงานระบบไฟฟ้าที่มีคุณภาพและมีความหลากหลายให้แก่ลูกค้า 
                        ไม่ว่าจะเป็นช่างไฟฟ้า เจ้าของบ้าน หรือผู้รับเหมาโครงการงานระบบไฟฟ้า 
                        โดยที่ลูกค้าสามารถค้นหาราคาและสเปกวัสดุจากตัวแทนฝ่ายขายหรือช่องทาง Online ต่างๆของเรา</h3>
                    <p> ร้าน “สัจจะวัสดุ” ยึดมั่นในเรื่องของราคามิตรภาพ พร้อมการจัดส่งสินค้าอย่างรวดเร็วและตรงเวลา สอดคล้องกับการดูแลลูกค้าตามความหมายของชื่อร้าน 
                        “สัจจะวัสดุ”ที่บริการด้วยความจริงใจ มีความเชื่อมั่นในเรื่องการทำการค้าที่มีความสัตย์จริง ซื่อตรงต่อทั้งคู่ค้าและลูกค้า</p>
                </div>
            </div>
        </div>
        <!--include ../../partials/pages/about-us/milestone-->
        
    </div>

    


@endsection

@section('scripts')
@stop('scripts')