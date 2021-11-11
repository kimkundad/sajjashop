@extends('layouts.template')

@section('title')
แคตตาล็อคสินค้างานระบบ
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')
    


<div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                <li>แคตตาล็อคสินค้างานระบบ</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--shop">
        <div class="ps-container">
            
       
                <br><br>
            

                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/logo-nawa-1.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ท่อ SCG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/logo-thaipipe.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>​ท่อน้ำไทย</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/uhm.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ยูเอชเอ็ม(UHM)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/Logo_43411_571274513_fullsize.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Thai PPR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/unnamed.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>POLOPLAST GmbH & Co KG</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/3e1a3acc-9f1a-be2b-84c9-599cf4558f06.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>NANO ELECTRIC PRODUCT</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/o_1ds9ci9lu13hug5p182e28o16t47.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>คิตส์ (KITZ)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/Kistler.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>Kistler</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/e81ilp.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>พานาโซนิค</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/CDP_Logo_Arrow.png') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>แอร์โรว์</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/haco.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ฮาโก้ (HACO)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('assets/img/logo_banner/962abb48f0cb92c7bd1f766c4349c36b.jpg') }}" alt=""></div>
                            <div class="ps-block__content">
                                <p>ยาซากิ (Yazaki)</p>
                            </div>
                        </div>
                    </div>

                </div>















<style>
    .ps-product .ps-product__badge.hot img{
    width:40px
}
.ps-product .ps-product__badge.hot {
    border: 1px solid #f14705;
    background-color: #ffffff;
    color: #ffffff;
}
.ps-product .ps-product__badge {
    position: absolute;
    top: 0;
    right: 0;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
    padding: 0px;
    border-radius: 4px;
    background-color: #f14705;
}
@media (max-width: 767px){
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 5px;
    padding-left: 5px;
}
}

</style>



                <div class="ps-layout--shop">
                <div class="ps-layout__left">
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">แคตตาล็อคสินค้า</h4>
                        <ul class="ps-list--categories">
                            
                            <li class="current-menu-item "><a href="#"> ปลั๊กและสวิตช์ไฟฟ้า </a></li>
                                <li class="current-menu-item "><a href="#"> ไฟฉายและไฟฉุกเฉิน </a></li>
                                <li class="current-menu-item "><a href="#"> เบรกเกอร์และตู้ไฟ </a></li>
                                <li class="current-menu-item "><a href="#"> กริ่ง </a></li>
                                <li class="current-menu-item "><a href="#"> สายไฟ </a></li>
                                <li class="current-menu-item "><a href="#"> ท่อร้อยสายไฟและอุปกรณ์ </a></li>
                                <li class="current-menu-item "><a href="#"> อุปกรณ์เดินสายไฟ </a></li>
                                <li class="current-menu-item "><a href="#"> ระบบโซล่าเซลล์ </a></li>
                                <li class="current-menu-item "><a href="#"> รางปลั๊กและอแดปเตอร์ </a></li>
                                <li class="current-menu-item "><a href="#"> อุปกรณ์ IoT </a></li>

                        </ul>
                    </aside>
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">แบรนด์ชั้นนำ</h4>
                        <form class="ps-form--widget-search" >
                            <input class="form-control" type="text" placeholder="">
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                        <figure class="ps-custom-scrollbar" data-height="250">
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-1" name="brand">
                                <label for="brand-1">SEC (3)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-2" name="brand">
                                <label for="brand-2">Phelps dodge/BCC/Yazaki (1)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-3" name="brand">
                                <label for="brand-3">Arrow (แอร์โรว์) (2)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-4" name="brand">
                                <label for="brand-4">UNION ยูเนี่ยน (19)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-5" name="brand">
                                <label for="brand-5">Baxtex (20)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-6" name="brand">
                                <label for="brand-6">Panasonic (พานาโซนิค) (11)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-7" name="brand">
                                <label for="brand-7">Schneider /Square D (9)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-8" name="brand">
                                <label for="brand-8">ABB(เอบีบี) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-9" name="brand">
                                <label for="brand-9">UPC(ยูพีซี) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-10" name="brand">
                                <label for="brand-10">ARR(เออาร์อาร์) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">TGG(ไทยก้าวไกล) (0)</label>
                            </div>

                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">LINK (ลิ้งค์) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">3M(สามเอ็ม) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">Yazaki(ยาซากิ) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">Bticino(บิทิชิโน่) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">United (ยูไนเต็ด) (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">KJL(เคเจแอล) (0)</label>
                            </div>
                        </figure>
                        
                        
                       
                        
                        
                        
                    </aside>
                </div>


                <div class="ps-layout__right">



                    <div class="ps-shopping ps-tab-root">
                        <div class="ps-shopping__header">
                            <p><strong> 36</strong> Products found</p>
                            <div class="ps-shopping__actions">
                                <select class="ps-select" data-placeholder="Sort Items">
                                    <option>เรียงตามล่าสุด</option>
                                    <option>เรียงตามความนิยม</option>
                                    <option>เรียงตามราคา: ต่ำไปสูง</option>
                                    <option>เรียงตามราคา: มากไปน้อยw</option>
                                </select>
                                <div class="ps-shopping__view">
                                    <p>View</p>
                                    <ul class="ps-tab-list">
                                        <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="tab-1">
                                <div class="ps-shopping-product">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/000937_042007215942_20201113113739.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/haco.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">ROBERT’S STORE</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1310.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1310.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/1911020150422-5ee994d00189320200617030358580707.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/o_1ds9ci9lu13hug5p182e28o16t47.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1150.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1150.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_GBH_3622006750047_20200612130108.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/haco.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Marshall Kilburn Portable Wireless Speaker</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$42.99 - $60.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Marshall Kilburn Portable Wireless Speaker</a>
                                                        <p class="ps-product__price">$42.99 - $60.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/out0349080101_3722004360757_20191119213116.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/e81ilp.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Herschel Leather Duffle Bag In Brown Color</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$125.30</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Herschel Leather Duffle Bag In Brown Color</a>
                                                        <p class="ps-product__price">$125.30</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/VEN-193407_8859162812035_20201004021252.jpg') }}" alt=""></a>
                                                    <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/e81ilp.png" alt="">
                                                    </div>
                                                    
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Xbox One Wireless Controller Black Color</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$55.99</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Xbox One Wireless Controller Black Color</a>
                                                        <p class="ps-product__price">$55.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_VEN-BOW01_3722004360511_20171012153439.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/CDP_Logo_Arrow.png" alt="">
                                                    </div>
                                                    
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Grand Slam Indoor Of Show Jumping Novel</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Grand Slam Indoor Of Show Jumping Novel</a>
                                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_VEN-BOW01_3722004360511_20171012153439.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/uhm.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">ROBERT’S STORE</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1310.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1310.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/VEN-193407_8859162812035_20201004021252.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/e81ilp.png" alt="">
                                                    </div>
                                                    
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/out0349080101_3722004360757_20191119213116.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/CDP_Logo_Arrow.png" alt="">
                                                    </div>
                                                    
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Unero Military Classical Backpack</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>02</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Unero Military Classical Backpack</a>
                                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/gbh_GBH_3622006750047_20200612130108.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/unnamed.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Rayban Rounded Sunglass Brown Color</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>02</span>
                                                        </div>
                                                        <p class="ps-product__price">$35.89</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Rayban Rounded Sunglass Brown Color</a>
                                                        <p class="ps-product__price">$35.89</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/1911020150422-5ee994d00189320200617030358580707.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/3e1a3acc-9f1a-be2b-84c9-599cf4558f06.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Sleeve Linen Blend Caro Pane Shirt</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$29.39 - $39.99</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Sleeve Linen Blend Caro Pane Shirt</a>
                                                        <p class="ps-product__price">$29.39 - $39.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="#"><img src="{{ url('assets/img/pro_img/000937_042007215942_20201113113739.jpg') }}" alt=""></a>
                                                <div class="ps-product__badge hot">
                                                    <img src="http://localhost/sajjashop/public/assets/img/logo_banner/logo-thaipipe.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="#">Men’s Sports Runnning Swim Board Shorts</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$13.43</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="#">Men’s Sports Runnning Swim Board Shorts</a>
                                                        <p class="ps-product__price">$13.43</p>
                                                    </div>
                                                </div>
                                            </div>
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




                        </div>
                    </div>
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