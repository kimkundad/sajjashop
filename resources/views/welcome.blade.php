@extends('layouts.template')

@section('title')
homepage
@stop

@section('stylesheet')
@stop('stylesheet')

@section('content')


<div id="homepage-4">

        <div class="ps-home-banner visible-xs">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
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
                        @if(isset($slide))
                            @foreach($slide as $u)
                        <a href="{{ $u->url_btn }}"><img src="{{ url('img/slide/'.$u->image) }}"  class="img-responsive" alt="{{ $u->title }}"></a>
                            @endforeach
                        @endif
                    </div>
                    </div>
                    <div class="col-md-12">
                        @if(isset(setting()->image_1))
                        <a class="ps-collection" href="{{ setting()->url_img1 }}">
                            <img src="{{ url('img/setting/'.setting()->image_1) }}" alt="">
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="ps-home-banner hidden-xs">
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
                    @if(isset($slide))
                        @foreach($slide as $u)
                    <a href="{{ $u->url_btn }}"><img src="{{ url('img/slide/'.$u->image) }}"  class="img-responsive" alt="{{ $u->title }}"></a>
                        @endforeach
                    @endif
                </div>
                </div>
                <div class="ps-section__right">
                @if(isset(setting()->image_1))
                    <a class="ps-collection" href="{{ setting()->url_img1 }}">
                        <img src="{{ url('img/setting/'.setting()->image_1) }}" alt="">
                    </a>
                    @endif
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

                @if(isset($ban))
                @foreach($ban as $u)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 ">
                        <a href="{{ url('category?id=0&brand='.$u->id) }}">
                        <div class="ps-block--category" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="{{ url('/img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}" class="img-responsive"></div>
                            <div class="ps-block__content">
                                <p>{{ $u->title_brand }}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                @endif

                </div>
                

            </div>
        </div>

        <div class="ps-promotions">
            <div class="container">
            @if(isset(setting()->image_2))
                <a class="ps-collection" href="{{ setting()->url_img2 }}">
                    <img src="{{ url('img/setting/'.setting()->image_2) }}" alt="">
                </a>
               @endif
            </div>
        </div>
        <div class="ps-product-list ps-clothings">
            <div class="container">
                <div class="ps-section__header">
                    <h3>กลุ่มสินค้าแนะนำ</h3>
                    <ul class="ps-section__links">
                        <li><a href="{{ url('recommend') }}">ดูสินค้าทั้งหมด</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        
                        @if(isset($recom))
                        @foreach($recom as $u)

                        @if($u->discount !== 0)
                        <div class="ps-product">
                            <div class="ps-product__thumbnail">
                                <a  class="get_download" data-id="{{ $u->id_p }}">
                                    <img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}">
                                </a>
                                <div class="ps-product__badge hot">
                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                </div>
                                <?php 
                                $discount_value= ($u->price / 100) *$u->discount;
                                $final_price = $u->price - $discount_value;
                                ?>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                <div class="ps-product__content"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name }}</a>
                                    <p class="ps-product__price sale">฿{{ number_format((float)$final_price, 2, '.', '') }} <del>฿{{ number_format((float)$u->price, 2, '.', '') }} </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name }}</a>
                                    <p class="ps-product__price sale">฿{{ number_format((float)$final_price, 2, '.', '') }} <del>฿{{ number_format((float)$u->price, 2, '.', '') }} </del></p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a class="get_download" data-id="{{ $u->id_p }}"><img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}"></a>
                            <div class="ps-product__badge hot">
                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                </div>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                <div class="ps-product__content"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name }}</a>
                                    <p class="ps-product__price">฿{{ number_format((float)$u->price, 2, '.', '') }}</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title get_download" href="#">{{ $u->name }}</a>
                                    <p class="ps-product__price">฿{{ number_format((float)$u->price, 2, '.', '') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach
                        @endif
                        
                        


                    </div>
                </div>


            </div>
        </div>
        <div class="ps-product-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>กลุ่มสินค้ามาใหม่</h3>
                    <ul class="ps-section__links">
                        <li><a href="{{ url('new_product') }}">ดูสินค้าทั้งหมด</a></li>
                    </ul>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        
                    @if(isset($hit))
                        @foreach($hit as $u)

                        @if($u->discount !== 0)
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a class="get_download" data-id="{{ $u->id_p }}"><img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}"></a>
                                <div class="ps-product__badge hot">
                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                </div>
                                <?php 
                                $discount_value= ($u->price / 100) *$u->discount;
                                $final_price = $u->price - $discount_value;
                                ?>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                <div class="ps-product__content"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name }}</a>
                                    <p class="ps-product__price sale">฿{{ number_format((float)$final_price, 2, '.', '') }} <del>฿{{ number_format((float)$u->price, 2, '.', '') }} </del></p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name }}</a>
                                    <p class="ps-product__price sale">฿{{ number_format((float)$final_price, 2, '.', '') }} <del>฿{{ number_format((float)$u->price, 2, '.', '') }} </del></p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="ps-product">
                            <div class="ps-product__thumbnail"><a class="get_download" data-id="{{ $u->id_p }}"><img src="{{ url('img/product/'.$u->image) }}" alt="{{ $u->name }}"></a>
                            <div class="ps-product__badge hot">
                                    <img src="{{ url('img/brand/'.$u->image_brand) }}" alt="{{ $u->title_brand }}">
                                </div>
                            </div>
                            <div class="ps-product__container"><a class="ps-product__vendor get_download" data-id="{{ $u->id_p }}">{{ $u->name_cat }}</a>
                                <div class="ps-product__content"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name }}</a>
                                    <p class="ps-product__price">฿{{ number_format((float)$u->price, 2, '.', '') }}</p>
                                </div>
                                <div class="ps-product__content hover"><a class="ps-product__title get_download" data-id="{{ $u->id_p }}">{{ $u->name }}</a>
                                    <p class="ps-product__price">฿{{ number_format((float)$u->price, 2, '.', '') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        @endforeach
                        @endif
                        
                        
                    </div>
                </div>
            </div>
        </div>
  
        
        <br><br>
        
       
       
        
    </div>

@endsection

@section('scripts')
@stop('scripts')