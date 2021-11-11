@extends('layouts.template')

@section('title')
homepage
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')


<div id="homepage-4">
        <div class="ps-home-banner">
            <div class="container">
                <div class="ps-section__left">
                    <div class="ps-carousel--nav-inside owl-slider" 
                    data-owl-auto="true" 
                    data-owl-loop="true" 
                    data-owl-speed="5000" 
                    data-owl-gap="0" 
                    data-owl-nav="true" 
                    data-owl-dots="true" 
                    data-owl-item="1" 
                    data-owl-item-xs="1" 
                    data-owl-item-sm="1" 
                    data-owl-item-md="1" 
                    data-owl-item-lg="1" 
                    data-owl-duration="1000" 
                    data-owl-mousedrag="on">
                    <a href="#"><img src="{{ url('assets/img/slider/home-4/1.png') }}" alt=""></a>
                    <a href="#"><img src="{{ url('assets/img/slider/home-4/2.png') }}" alt=""></a>
                    <a href="#"><img src="{{ url('assets/img/slider/home-4/3.png') }}" alt=""></a>
                </div>
                </div>
                <div class="ps-section__right">
                    <a class="ps-collection" href="#">
                        <img src="{{ url('assets/img/71349133_2443524469094285_4970030984067022848_n.jpg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>


        <div class="ps-site-features">
            <div class="container">
                <div class="ps-block--site-features">
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Fast Delivery</h4>
                            <p>บริการส่งสินค้าทั่วไทย เร็วทันใจ</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>Easy Return</h4>
                            <p>เปลี่ยน-คืนสินค้าง่ายภายใน 30 วัน</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Secure Payment</h4>
                            <p>มั่นใจในระบบการชำระเงินที่ปลอดภัย</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>Call Center</h4>
                            <p>สามารถติดต่อได้ที่ 1160</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-gift"></i></div>
                        <div class="ps-block__right">
                            <h4>Gift Service</h4>
                            <p>โปรโมชั่นประทับใจให้แก่ลูกค้าทุกเดือน</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        

        <div class="ps-home-categories">
            <div class="container">
                <div class="ps-section__header">
                    <h3>แคตตาล็อคสินค้างานระบบแบรนด์ชั้นนำ</h3>
                </div>

                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/logo-nawa-1.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ท่อ SCG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/logo-thaipipe.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>​ท่อน้ำไทย</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/uhm.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ยูเอชเอ็ม(UHM)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/Logo_43411_571274513_fullsize.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Thai PPR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/unnamed.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>POLOPLAST GmbH & Co KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/3e1a3acc-9f1a-be2b-84c9-599cf4558f06.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>NANO ELECTRIC PRODUCT</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/o_1ds9ci9lu13hug5p182e28o16t47.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>คิตส์ (KITZ)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/Kistler.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Kistler</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/e81ilp.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>พานาโซนิค</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/CDP_Logo_Arrow.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>แอร์โรว์</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/haco.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ฮาโก้ (HACO)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/962abb48f0cb92c7bd1f766c4349c36b.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ยาซากิ (Yazaki)</p>
                            </div>
                        </div>
                    </div>

                </div>
                

            </div>
        </div>

        <div class="ps-promotions">
            <div class="container">
                <a class="ps-collection" href="shop-default.html">
                    <img src="{{ url('assets/img/catalogPageBanner.jpg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="ps-product-list ps-clothings">
            <div class="container">
                <div class="ps-section__header">
                    <h3>สินค้ายอดฮิตในหมวด งานระบบไฟฟ้า</h3>
                    <ul class="ps-section__links">
                        <li><a href="#">ดูสินค้าทั้งหมด</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/000937_042007215942_20201113113739.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">ERA ท่อน้ำอุ่น PPR PN12.5 ขนาด 2 สีเขียว</a>
                                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">ERA ท่อน้ำอุ่น PPR PN12.5 ขนาด 2 สีเขียว</a>
                                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/1911020150422-5ee994d00189320200617030358580707.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">VAVO หางปลาไหล  2 1/2นิ้ว</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">VAVO หางปลาไหล  2 1/2นิ้ว</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>

                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_GBH_3622006750047_20200612130108.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/out0349080101_3722004360757_20191119213116.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>

                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/VEN-193407_8859162812035_20201004021252.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_VEN-BOW01_3722004360511_20171012153439.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
        <div class="ps-product-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>กลุ่มสินค้าแนะนำ</h3>
                    <ul class="ps-section__links">
                        <li><a href="#">ดูสินค้าทั้งหมด</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        
                    <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/000937_042007215942_20201113113739.jpg') }}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">ERA ท่อน้ำอุ่น PPR PN12.5 ขนาด 2 สีเขียว</a>
                                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">ERA ท่อน้ำอุ่น PPR PN12.5 ขนาด 2 สีเขียว</a>
                                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/1911020150422-5ee994d00189320200617030358580707.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">VAVO หางปลาไหล  2 1/2นิ้ว</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">VAVO หางปลาไหล  2 1/2นิ้ว</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>

                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_GBH_3622006750047_20200612130108.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/out0349080101_3722004360757_20191119213116.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>

                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/VEN-193407_8859162812035_20201004021252.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">LUXUS ท่อประปาเหล็ก 1/2 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_VEN-BOW01_3722004360511_20171012153439.jpg') }}" alt=""></a>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                <div class="ps-product__content"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title" href="#">VAVO ท่อประปาสำเร็จ 3/4 นิ้ว x30 ซม.</a>
                                    <p class="ps-product__price">$101.99</p>
                                </div>
                            </div>
                        </div>



                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
  
        
        <br><br>
        
       
       
        
    </div>

@endsection

@section('scripts')
@stop('scripts')