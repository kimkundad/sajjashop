<div class="ps-newsletter">
        <div class="container">
            <form class="ps-form--newsletter" name="sub" id="add_sub_form">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>จดหมายข่าว</h3>
                            <p>สมัครสมาชิกเพื่อรับข้อมูลเกี่ยวกับผลิตภัณฑ์และคูปอง</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" name="email" id="email_sub" type="email" placeholder="พิมพ์อีเมลของคุณที่นี่">
                                <a class="ps-btn" id="add_sub">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<footer class="ps-footer ps-footer--3">
        <div class="container">
            <br><br>
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title">ติดต่อเรา</h4>
                    <div class="widget_content">
                        <p><strong class="text-danger"> {{ setting()->company_time }}</strong></p>
                        <h3>{{ setting()->phone }}</h3>
                        <p>{{ setting()->address }} <br><a href="mailto:{{ setting()->email }}">{{ setting()->email }}</a></p>
                        
                        <div>
                            <a href="{{ setting()->facebook_url }}" target="_blank"><img src="{{ url('assets/img/social/footer-facebook.png') }}" class="social_icin_foot" alt=""></a>
                            <a href="{{ setting()->line_oa_url }}" target="_blank"><img src="{{ url('assets/img/social/footer-line-icon.png') }}" class="social_icin_foot" alt=""></a>
                            <a href="{{ setting()->inastargram }}" target="_blank"><img src="{{ url('assets/img/social/footer-inastargram.png') }}" class="social_icin_foot" alt=""></a>
                            <a href="{{ setting()->youtube	 }}" target="_blank"><img src="{{ url('assets/img/social/footer-youtube.png') }}" class="social_icin_foot" alt=""></a>
                            <a href="{{ setting()->tiktok }}" target="_blank"><img src="{{ url('assets/img/social/footer-tiktok.png') }}" class="social_icin_foot" alt=""></a>
                            <a href="{{ setting()->twitter }}" target="_blank"><img src="{{ url('assets/img/social/footer-twitter.png') }}" class="social_icin_foot" alt=""></a>
                        </div>
                        
                    </div>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">เกี่ยวกับเรา</h4>
                    <ul class="ps-list--link">
                        <li><a href="{{  url('/about_us') }}">รู้จักกับสัจจะวัสดุ</a></li>
                        <li><a href="{{  url('/contact_price_quotation') }}">ขอใบเสนอราคา</a></li>
                        <li><a href="{{  url('/blogs') }}">ข่าวประชาสัมพันธ์</a></li>
                        <li><a href="{{  url('/contact_us') }}">ติดต่อเรา</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">นโยบาย</h4>
                    <ul class="ps-list--link">
                        <li><a href="{{  url('/policy') }}">นโยบายความเป็นส่วนตัว</a></li>
                        <li><a href="{{  url('/terms') }}">ข้อตกลงและเงื่อนไข</a></li>
                        <li><a href="{{  url('/return') }}">เงื่อนไขการเปลี่ยน – คืนสินค้า</a></li>
                    </ul>
                </aside>
                
                <aside class="widget widget_footer">
                    <h4 class="widget-title">คำถามและข้อสงสัย</h4>
                    <ul class="ps-list--link">
                        <li><a href="{{  url('/delivery') }}">วิธีการสั่งซื้อสินค้า</a></li>
                        <li><a href="{{  url('/delivery') }}">การรับสินค้าด้วยตนเอง</a></li>
                        <li><a href="{{  url('/payment_option') }}">วิธีการชำระเงิน</a></li>
                        <li><a href="{{  url('/delivery') }}">วิธีการจัดส่ง</a></li>
                    </ul>
                </aside>
            </div>
            
            
            <div class="ps-footer__copyright">
                <p>© 2018 {{ setting()->nme_website }}. All Rights Reserved</p>
                <p><span>เราใช้การชำระเงินที่ปลอดภัย : </span>
                   
                    <a href="#">
                        <img src="{{ url('assets/img/payment-method/3.jpg') }}" alt="">
                    </a>
                    
                    <a href="#">
                        <img src="{{ url('assets/img/payment-method/5.jpg') }}" alt="">
                    </a>
                </p>
            </div>
        </div>
    </footer>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
   
    