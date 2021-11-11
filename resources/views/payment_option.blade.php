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
        
        <div class="ps-post--detail">
            <div class="container">
                <div class="ps-post__content">
                    <div class="text-center">
                        <h3>วิธีการชำระเงิน</h3>
                        <p>ณ ปัจจุบันท่านสามารถชำระเงินได้โดยผ่านทางธนาคาร จากนั้นกรุณาแจ้งการชำระเงินผ่านทาง Website 
                            ในหน้า account ของท่าน และเลือกยืนยันการชำระเงินพร้อมกรอกข้อมูลให้ครบถ้วน หรือท่านสามารถโทรศัพท์มาแจ้งทางเราได้ที่เบอร์ 
                            02-513-0105 หรือส่ง Fax ใบสลิปมาที่ เบอร์ 02-939-3080 ระหว่างเวลา 8.00 - 22.00 น. ทุกวัน</p>

                            <br><br>
                            <div class="row">
							<div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>ชื่อบัญชี</th>
                                    <th>เลขที่บัญชี</th>
                                    <th>สาขา</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>
                                        <img src="https://www.masterphotonetwork.com/master/assets/image/bank/icon-bankbbl.png" height="35">
                                    </td>
                                    <td class="p_top">
                                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                                    </td>
                                    <td class="p_top">
                                        129-5-51893-8 (ออมทรัพย์)
                                    </td>
                                    <td class="p_top">
                                        ลาดพร้าว
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>
                                        <img src="https://www.masterphotonetwork.com/master/assets/image/bank/icon-bankscb.png" height="35">
                                    </td>
                                    <td class="p_top">
                                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                                    </td>
                                    <td class="p_top">
                                        041-270703-6 (ออมทรัพย์)
                                    </td>
                                    <td class="p_top">
                                        บางเขน
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>
                                        <img src="https://www.masterphotonetwork.com/master/assets/image/bank/icon-bankktc.png" height="35">
                                    </td>
                                    <td class="p_top">
                                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                                    </td>
                                    <td class="p_top">
                                        477-0-10789-7 (ออมทรัพย์)
                                    </td>
                                    <td class="p_top">
                                        ยูเนี่ยนมอลล์
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>
                                        <img src="https://www.masterphotonetwork.com/master/assets/image/bank/icon-bankkrugsri.png" height="35">
                                    </td>
                                    <td class="p_top">
                                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                                    </td>
                                    <td class="p_top">
                                        106-1-35383-5 (ออมทรัพย์)
                                    </td>
                                    <td class="p_top">
                                        ยูเนี่ยนมอลล์ ลาดพร้าว
                                    </td>
                                    </tr>


                                    <tr>
                                    <td>
                                        <img src="https://www.masterphotonetwork.com/master/assets/image/bank/icon-bankkbank.png" height="35">
                                    </td>
                                    <td class="p_top">
                                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                                    </td>
                                    <td class="p_top">
                                        752-229-3029 (ออมทรัพย์)
                                    </td>
                                    <td class="p_top">
                                        ลาดพร้าว 10
                                    </td>
                                    </tr>

                                </tbody>
                                </table>
                                </div>
							</div>

						</div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
  
 
    

@endsection

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script>
   
</script>
@stop('scripts')