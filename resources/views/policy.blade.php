@extends('layouts.template')

@section('title')
นโยบายความเป็นส่วนตัว
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')

<div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                <li>นโยบายความเป็นส่วนตัว</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro" style="padding: 50px 0; 100px 0">
            <div class="container">

                <div class="ps-section__content">
                <h4>นโยบายความเป็นส่วนตัว</h4>
                <p>การใช้ข้อมูล</p>
                    <p>ข้อมูลที่ท่านเปิดเผยกับ Sajjashop ไม่ว่าจะเป็นชื่อ ที่อยู่ E-mail Address ข้อมูลเกี่ยวกับการซื้อสินค้า 
                        หรือการชำระเงิน อาจถูกนำไปใช้ในการปรับปรุง และส่งเสริมการให้บริการ การตลาด การพัฒนาบริการของเว็บไซต์นี้ 
                        เพื่อความพึงพอใจและประโยชน์สูงสุดของท่าน นอกจากนี้แล้ว Sajjashop ขอสงวนสิทธิที่จะนำข้อมูลของท่านมาใช้ในการวิเคราะห์ข้อมูลได้ตลอดเวลา
                    </p>
                    <br>
                    <p>ความปลอดภัยของข้อมูล</p>
                    <p>ข้อมูลส่วนบุคคลที่ท่านได้ให้หรือใช้ผ่านการประมวลผลของเครื่องคอมพิวเตอร์ที่ควบคุมการทำงานของเว็บไซต์ Sajjashop ทั้งหมดนั้น ท่านได้ยอมรับและตกลงว่าเป็นสิทธิและกรรมสิทธิ์ของ 
                        Sajjashop อย่างไรก็ตาม Sajjashop รับประกันว่าข้อมูลส่วนตัวของท่านจะได้รับการรักษาอย่างเป็นความลับและได้ใช้มาตรฐานความปลอดภัย อย่างไรก็ตาม เพื่อความปลอดภัยของข้อมูล 
                        ท่านควรปฏิบัติตามข้อกำหนดและเงื่อนไขการให้บริการของเว็บไซต์นี้โดยเคร่งครัด สำหรับผู้ใช้ทั่วไปการเข้าสู่ข้อมูลของตนเองจำเป็นต้องใช้ชื่อผู้ใช้ที่เป็นสมาชิก และรหัสผ่านที่ทาง Sajjashop ออกให้เท่านั้น 
                        ในกรณีที่ข้อมูลส่วนบุคคลดังกล่าวถูกจารกรรมโดยวิธีการทางอิเล็กทรอนิกส์(Hack) สูญหายหรือเสียหายอันเนื่องจากเหตุสุดวิสัยไม่ว่ากรณีใดทั้งสิ้น ทางบริษัทฯ โดย Sajjashop
                         ขอสงวนสิทธิ์ในการปฏิเสธความรับผิดชอบต่อความเสียหายนั้นทั้งหมด สำหรับการรับส่งข้อมูลและการรับชำระเงินด้วยบัตรเครดิตทางอินเตอร์เน็ตได้เชื่อมต่อกับธนาคารผ่านระบบที่มีการรักษาความปลอดภัยขั้นสูงตามมาตรฐานสากล
                          ทั้งนี้ข้อมูลบัตรเครดิตของท่านถูกจัดเก็บไว้ที่ธนาคารเพียงแห่งเดียวเท่านั้น โดยไม่มีการเก็บข้อมูลไว้ที่ฐานข้อมูลของ Sajjashop แต่อย่างใด
                    </p>
                    <br>
                    <p>การแก้ไข เปลี่ยนแปลง และลบข้อมูล</p>
                    <p>ท่านสามารถแก้ไข ปรับปรุง เปลี่ยนแปลง ข้อมูลต่างๆ ในข้อมูลส่วนตัวของท่านได้ด้วยตนเอง โดยใช้ชื่อผู้ใช้ที่เป็นสมาชิกและรหัสผ่านที่ทาง Sajjashop ออกให้ท่านในการผ่านเข้าสู่ข้อมูลส่วนตัวของท่าน ท่านคือผู้เดียวที่สามารถเข้าถึงข้อมูลส่วนตัวของท่านได้ และท่านคือผู้เดียวที่จะเปลี่ยนแปลง แก้ไข เพิ่มเติม หรือลบข้อมูลเหล่านั้นได้ โดยใช้ชื่อผู้ใช้ที่เป็นสมาชิกและรหัสผ่านของท่านเอง Sajjashop ขอแนะนำให้ท่านเก็บข้อมูลชื่อผู้ใช้ที่เป็นสมาชิกและรหัสผ่านไว้เป็นความลับ Sajjashop จะไม่มีการถามรหัสผ่านของท่านไม่ว่ากรณีใดๆทั้งสิ้น และในกรณีที่ท่านใช้คอมพิวเตอร์ร่วมกับผู้อื่น กรุณา sign – out ก่อนทุกครั้งเมื่อท่านไม่ต้องการใช้บริการต่อไปหรือปิดบราวเซอร์เมื่อท่านเสร็จสิ้นการทำงาน เพื่อเป็นการป้องกันมิให้ผู้อื่นเข้ามาใช้ข้อมูลของท่านซึ่งอาจจะทำให้ท่านได้รับความเสียหายในภายหลัง 
                        ทั้งนี้ ท่านจะต้องรับผิดชอบกับการกระทำต่างๆ ภายใต้ชื่อผู้ใช้ที่เป็นสมาชิกและรหัสผ่านของท่าน ทาง Sajjashop จะไม่รับผิดชอบหากท่านนำผู้ใช้ที่เป็นสมาชิกและรหัสผ่านของท่านไปให้ผู้อื่น
                    </p>
                    <br>
                    <p>การเปิดเผยข้อมูลแก่บุคคลที่สาม</p>
                    <p>Sajjashop เคารพสิทธิในความเป็นส่วนตัวของท่าน ดังนั้น ข้อมูลของท่านที่ Sajjashop
                         ได้รับนั้นโดยหลักการแล้วจะถูกนำไปใช้ให้เป็นไปตามวัตถุประสงค์ของเว็บไซต์นี้เท่านั้น จะไม่มีการอนุญาตให้มีการเปิดเผยข้อมูลของท่านนอกจากพนักงานผู้ที่ได้รับอนุญาตเท่านั้น และเว้นแต่:
                    </p>
                    <ul class="pl-0">
                                            <li>ได้รับความยินยอมจากท่าน</li>
                                            <li>เป็นการจำเป็นที่ต้องเปิดเผยข้อมูลตามกฎหมาย เพื่อประโยชน์ในการสอบสวนหรือการพิจารณาคดี</li>
                                            <li>การเปิดเผยข้อมูลเป็นไปโดยถูกต้องตามกฎหมายหรือตามคำสั่งของหน่วยงานของรัฐที่เกี่ยวข้อง</li>
                                        </ul>
                    <br>

                </div>
                
                
            </div>
        </div>
        <!--include ../../partials/pages/about-us/milestone-->
        
        
        
    </div>

    


@endsection

@section('scripts')
@stop('scripts')