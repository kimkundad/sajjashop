@extends('layouts.template')

@section('title')
วิธีการจัดส่ง
@stop

@section('stylesheet')

@stop('stylesheet')

@section('content')

<style>
    .ps-vendor-banner h2 {
    color: #ffffff;
    font-size: 28px;
    }
    .ps-vendor-best-fees .ps-section__content {
    max-width: 730px;
    margin: 0 auto;
    text-align: left;
}
</style>


<div class="ps-page--single">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    <li> วิธีการจัดส่ง</li>
                </ul>
            </div>
        </div>
        <div class="ps-vendor-banner bg--cover" data-background="{{ url('assets/img/bg/vendor.jpg') }}">
            <div class="container">
                <h2>ระยะเวลาการจัดส่งสินค้า ระยะเวลาในการจัดส่งสินค้าไม่รวมวันเสาร์-อาทิตย์</h2>
            </div>
        </div>

        <div class="ps-section--vendor ps-vendor-best-fees">
            <div class="container">
                <div class="ps-section__header">
                    <p>วิธีการจัดส่ง</p>
                    <h4>เงื่อนไขการส่งสำหรับการสั่งซื้อสินค้า</h4>
                </div>
                

                <div class="ps-section__content">
                    <h4>ระยะเวลาการจัดส่งสินค้า</h4>
                    <p>ระยะเวลาในการจัดส่งสินค้าไม่รวมวันเสาร์-อาทิตย์ วันหยุดราชการ และวันขัตฤกษ์ (หากยังไม่ได้รับสินค้าให้ภายใน 7 วัน กรุณาติดต่อกลับมาทางบริษัท)</p>

                    <h4>วิธีการจัดส่ง</h4>
                    <p>จัดส่งด้วยรถขนส่ง ตามวันและเวลา ที่อยู่ที่ลูกค้านัด</p>

                 <!--   <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">พื้นที่ปลายทาง</th>
                                <th scope="col">ระยะเวลา</th>
                                <th scope="col">ตัวอย่าง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>โซน1(Zone1) – กรุงเทพ นนทบุรี นครปฐม ปทุมธานี สมุทรปราการ สมุทรสาคร ชลบุรี ระยอง</td>
                                <td>ไม่เกิน 2 วันทำการหลังชำระเงิน</td>
                                <td>ชำระเงินวันพฤหัส ได้สินค้าภายในวันจันทร์อย่างช้า</td>
                                </tr>
                                <tr>
                                <td>โซน2(Zone2) – จังหวัดนอกเหนือจากZone1</td>
                                <td>ไม่เกิน 4 วันทำการหลังชำระเงิน</td>
                                <td>ชำระเงินวันจันทร์ ได้สินค้าภายในวันศุกร์อย่างช้า</td>
                                </tr>
                                <tr>
                                <td>เกาะ พื้นที่3จังหวัดชายแดนภาคใต้</td>
                                <td>ไม่เกิน 6 วันทำการหลังชำระเงิน</td>
                                <td>ชำระเงินวันจันทร์ ได้สินค้าภายในวันอังคารถัดไป</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>


                    <h4>วิธีการจัดส่ง</h4>
                    <p>ทางบริษัทฯขอสงวนสิทธิ์ในการตัดสินใจเรื่องวิธีการจัดส่งให้เหมาะสมกับปลายทางของลูกค้าแต่ละท่านดังนี้</p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">พื้นที่ปลายทาง</th>
                                <th scope="col">วิธีการจัดส่ง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>โซน1(Zone1) – กรุงเทพ นนทบุรี นครปฐม ปทุมธานี สมุทรปราการ สมุทรสาคร ชลบุรี ระยอง</td>
                                <td>รถช.พานิช / รถซัพพลายเออร์ /ไปรษณีย์ไทย / SCG Express / รถรับจ้าง</td>
                                </tr>
                                <tr>
                                <td>โซน2(Zone2) – จังหวัดนอกเหนือจากZone1</td>
                                <td>ขนส่งเอกชน(ลูกค้าชำระเงินปลายทาง) / ไปรษณีย์ไทย / SCG Express / รถรับจ้าง</td>
                                </tr>
                            </tbody>
                        </table>
                        </div> -->
                    
                 <!--   <div class="ps-section__highlight"><img src="{{ url('assets/img/icons/vendor-4.png') }}" alt="">
                        <figure>
                            <p>ค่าจัดส่งสินค้า 69 บาทต่อการส่งหนึ่งครั้ง ไม่คิดค่าจัดส่งกรณีมียอดเงินการซื้อรวมภาษีมากกว่า 3,000 บาทขึ้นไป หากสินค้าจำเป็นต้องจัดส่งผ่านขนส่งเอกชน ขอความกรุณาลูกค้าเป็นผู้ชำระค่าขนส่งปลายทาง</p>
                        </figure>
                    </div> -->
                    <div class="ps-section__footer">
                        <p>เปิดบริการทุกวัน 08:30 - 19:00 น.  โทร : 095-846-7417</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="ps-section--vendor ps-vendor-milestone hidden">
            <div class="container">
                <div class="ps-section__header">
                    <p>การทำงานและขั้นตอนการจัดส่งสินค้า</p>
                    <h4>เริ่มซื้อสินค้าออนไลน์บน Martfury ได้ง่ายๆ เพียง 4 ขั้นตอนง่ายๆ</h4>
                </div>
                <div class="ps-section__content">
                    <div class="ps-block--vendor-milestone">
                        <div class="ps-block__left">
                            <h4>ลงทะเบียนและลงรายการสินค้าของคุณ</h4>
                            <ul>
                                <li>ลงทะเบียนธุรกิจของคุณฟรีและสร้างแคตตาล็อกผลิตภัณฑ์ รับการฝึกอบรมฟรีเกี่ยวกับวิธีการดำเนินธุรกิจออนไลน์ของคุณ</li>
                                <li>ที่ปรึกษา Martfury ของเราจะช่วยคุณในทุกขั้นตอนและช่วยเหลือคุณในการทำธุรกิจออนไลน์อย่างเต็มที่</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="{{ url('assets/img/vendor/milestone-1.png') }}" alt=""></div>
                        <div class="ps-block__number"><span>1</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone reverse">
                        <div class="ps-block__left">
                            <h4>รับคำสั่งซื้อและขายสินค้าของคุณ</h4>
                            <ul>
                                <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                                <li>Our Martfury Advisors will help you at every step and fully assist you in taking your business online</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="{{ url('assets/img/vendor/milestone-2.png') }}" alt=""></div>
                        <div class="ps-block__number"><span>2</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone">
                        <div class="ps-block__left">
                            <h4>แพ็คของและจัดส่งได้สบายๆ</h4>
                            <ul>
                                <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                                <li>Our Martfury Advisors will help you at every step and fully assist you in taking your business online</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="{{ url('assets/img/vendor/milestone-3.png') }}" alt=""></div>
                        <div class="ps-block__number"><span>3</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone reverse">
                        <div class="ps-block__left">
                            <h4>แพ็คของและจัดส่งได้สบายๆ</h4>
                            <ul>
                                <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                                <li>Our Martfury Advisors will help you at every step and fully assist you in taking your business online</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="{{ url('assets/img/vendor/milestone-4.png') }}" alt=""></div>
                        <div class="ps-block__number"><span>4</span></div>
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