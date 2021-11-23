<style>
    .header .header__top {
        background-color: #DB1B32;
    }
    .navigation {
    background-color: #DB1B32;
}
.menu--product-categories .menu__toggle span {
    color: #fff;
    font-size: 14px;
}
.menu--product-categories .menu__toggle:before{
    background-color: #fff;
}

.menu > li > a {
    color: #fff;
    font-size: 14px;
    padding: 10px 25px;
}
.navigation__extra > li a {
    color: #fff;
    font-size: 12px;
}
.navigation__extra > li:after {
    background-color: #fff;
}
.header .header__extra > i {
    font-size: 28px;
    color: #fff;
}
.ps-form--quick-search button {
    background-color: #25AF28;
    font-size: 12px;
}
.ps-form--quick-search .form-control{
    height: 38px;
}
.ps-block--user-header .ps-block__right a{
    color: #fff;
}
.ps-block--user-header .ps-block__left i{
    color: #fff;
    font-size: 28px;
}
.menu--dropdown > li:hover {
  background-color: #DB1B32;
}
.ps-panel--sidebar .ps-panel__header{
    background-color: #DB1B32;
}
.navigation--list .navigation__item.active span{
    color: #DB1B32;
}
.menu--dropdown > li > a:hover {
    color:#fff;
}
.ps-block--site-features{
    margin-top:20px;
    margin-bottom:40px;
    padding: 20px
}
.ps-block--site-features .ps-block__item{
    padding: 10px 15px;
}
.ps-block--site-features .ps-block__right {
    padding-left: 18px;
}
.navigation--list .navigation__item.active i {
    color: #DB1B32;
}
</style>

<header class="header header--1" data-sticky="true">
        <div class="header__top">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> แคตตาล็อคสินค้างานระบบ</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                            @if(categories() !== null)
                                @foreach(categories() as $u)
                                <li class="current-menu-item "><a href="{{ url('/get_category/?id='.$u->id) }}"> {{ $u->name_cat }} </a></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div><a class="ps-logo" href="{{  url('/') }}"><img src="{{ url('assets/img/logo-sajja-all-size_v2.png') }}" alt="{{ setting()->nme_website }}"></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="{{  url('/search') }}" method="get">
                        <div class="form-group--icon">
                            <select class="form-control">
                                
                            </select>
                        </div>
                        <input class="form-control" name="search" type="text" placeholder="ฉันกำลังค้นหาสินค้า...">
                        <button>ค้นหา</button>
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__actions">
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                            <div class="ps-block__right">
                                <a href="{{ url('login') }}" style="padding-top: 6px">{{ setting()->phone }}</a>
                            </div>
                        </div>
                    
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right">
                                <a href="{{ url('login') }}" style="padding-top: 5px">เข้าสู่ระบบ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="ps-container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu" style="color: #fff;"></i><span> แคตตาล็อคสินค้างานระบบ</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                @if(categories() !== null)
                                @foreach(categories() as $u)
                                <li class="current-menu-item "><a href="{{ url('/get_category/?id='.$u->id) }}"> {{ $u->name_cat }} </a></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu">
                        <li>
                            <a href="{{ url('about_us') }}">รู้จักกับสัจจะวัสดุ</a>
                        </li>
                        <li>
                            <a href="{{ url('category') }}">หมวดหมุ่สินค้า</a>
                        </li>
                        <li>
                            <a href="{{ url('blogs') }}">ข่าวประชาสัมพันธ์</a>
                        </li>
                        <li>
                            <a href="{{ url('contact_us') }}">ติดต่อเรา</a>
                        </li>
                        
                        
                    </ul>
                    <ul class="navigation__extra">
                        <li><a href="{{ url('contact_price_quotation') }}">ขอใบเสนอราคา</a></li>
                        <li><a href="{{ url('payment_option') }}">วิธีการชำระเงิน</a></li>
                        <li><a href="{{ url('delivery') }}">วิธีการจัดส่ง</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>Welcome to Martfury Online Shopping Store !</p>
            </div>
            <div class="header__right">
                
            </div>
        </div>
        <div class="navigation--mobile">
            <div class="navigation__left">
                <a class="ps-logo" href="{{  url('/') }}"><img src="{{ url('assets/img/logo-sajja-all-size_v2.png') }}" alt=""></a>
            </div>
            
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="{{ url('/search') }}" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="ฉันกำลังค้นหาสินค้า..">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>


    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                                @if(categories() !== null)
                                @foreach(categories() as $u)
                                <li class="current-menu-item "><a href="{{ url('/get_category/?id='.$u->id) }}"> {{ $u->name_cat }} </a></li>
                                @endforeach
                                @endif
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content">
            <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile">
                <i class="icon-menu"></i><span> เมนู</span>
            </a>
            <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile">
                <i class="icon-list4"></i><span> แคตตาล็อค</span>
            </a>
            <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar">
                <i class="icon-magnifier"></i><span> ค้นหา</span>
            </a>
            <a class="navigation__item" href="{{ url('contact_us') }}">
                <i class="icon-bubbles"></i><span> ติดต่อเรา</span>
            </a>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="{{  url('/search') }}" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="ฉันกำลังค้นหาสินค้า...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>เมนู</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                                <li class="current-menu-item "><a href="{{  url('/about_us') }}"> รู้จักกับสัจจะวัสดุ </a></li>
                                <li class="current-menu-item "><a href="{{  url('/category') }}"> หมวดหมุ่สินค้า </a></li>
                                <li class="current-menu-item "><a href="{{  url('/blogs') }}"> ข่าวประชาสัมพันธ์ </a></li>

                                <li class="current-menu-item "><a href="{{  url('/contact_us') }}"> ติดต่อเรา </a></li>
                                <li class="current-menu-item "><a href="{{  url('/contact_price_quotation') }}"> ขอใบเสนอราคา </a></li>
                                <li class="current-menu-item "><a href="{{  url('/payment_option') }}"> วิธีการชำระเงิน </a></li>
                                <li class="current-menu-item "><a href="{{  url('/delivery') }}"> วิธีการจัดส่ง </a></li>
                                <li class="current-menu-item "><a href="{{  url('/policy') }}"> นโยบายความเป็นส่วนตัว </a></li>
                                <li class="current-menu-item "><a href="{{  url('/terms') }}"> ข้อตกลงและเงื่อนไข </a></li>
                                <li class="current-menu-item "><a href="{{  url('/login') }}"> เข้าสู่ระบบ </a></li>

            </ul>
        </div>
    </div>