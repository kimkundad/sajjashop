@extends('layouts.template')

@section('title')
ติดต่อเรา
@stop

@section('stylesheet')

@stop('stylesheet')

@section('content')
<style>
    .ps-contact-info h3 {
    margin-bottom: 10px;
    text-align: center;
    font-size: 34px;
    font-weight: 600;
}
</style>

<div class="ps-page--single" id="contact-us">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li>ขอใบเสนอราคา</li>
                </ul>
            </div>
        </div>
        
        <div class="ps-contact-info">
        <div class="container">
                <form class="ps-form--contact-us" action="#" method="get">
                    <h3>ขอใบเสนอราคา</h3>
                    <p class="text-center">ลูกค้าสามารถใช้ฟอร์มด้านล่างเพื่อให้ทางเราติดต่อกลับ กรุณาระบุรายละเอียดที่ต้องการจะสอบถาม จะมีพนักงานติดต่อกลับโดยเร็วที่สุด</p>
                    <br>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="ชื่อผู้ติดต่อ *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="เบอร์โทรติดต่อ *">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="อีเมล์ลูกค้า ">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="ไลน์ไอดี Line id ">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                            <input class="form-control" type="text" placeholder="ห้วข้อเรื่องที่ต้องการติดต่อ *">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                           
                                <label for="exampleFormControlSelect1">จุดประสงค์การใช้งานสินค้า *</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>กรุณาเลือก</option>
                                <option>ร้านค้า/สนใจนำสินค้าไปขาย</option>
                                <option>เจ้าของบ้าน</option>
                                <option>โครงการ/รับเหมาก่อสร้าง</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div >
                                <br>
                                <div class="g-recaptcha" data-sitekey="6LdQnlkUAAAAAOfsIz7o-U6JSgrSMseulLvu7lI8"></div>
                                <br>
                            </div>
                        
                        </div>
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="ข้อความที่ต้องการสอบถามเรา หรือ สินค้าที่อยากได้"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group submit">
                        <button class="ps-btn">ส่งข้อความ</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
  
 
    

@endsection

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script>
   
</script>
@stop('scripts')