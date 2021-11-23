<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="{{ url('admin/dashboard') }}"><img src="{{ url('assets/img/logo-sajja-all-size_v2.png') }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('admin/dashboard') }}"><img src="{{ url('assets/img/logo-sajja-all-size_v2.png') }}" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">


            <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">


              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <img src="{{ url('assets/img/1483556517.png') }}" alt="profile"/>
                  <span class="nav-profile-name"> {{ Auth::user()->name }} </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    
					
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('logout') }}">
                    <i class="icon-logout text-primary mr-2"></i>
                    ออกจากระบบ
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu text-dark"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="nav-bottom">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a href="{{ url('admin/dashboard') }}" class="nav-link"><i class="link-icon icon-pie-chart"></i><span class="menu-title">หน้าแรก</span></a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-handbag"></i><span class="menu-title">จัดการสินค้า</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="{{ url('admin/product') }}">สินค้าทั้งหมด</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('admin/brand') }}">Brands ทั้งหมด</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('admin/category') }}">หมวดหมู่สินค้า</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('admin/pro_download') }}">ดาวน์โหลด แคตตาล็อก</a></li>
              </div>
            </li>

           

            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-speech"></i><span class="menu-title">บทความ</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="{{ url('admin/blog') }}">บทความทั้งหมด</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('admin/blog_cat') }}">หมวดหมู่บทความ</a></li>
              </div>
            </li>
           

           

            <li class="nav-item">
              <a href="{{ url('admin/slide_show') }}" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">รูปสไลด์</span></a>
            </li>

            <li class="nav-item">
              <a href="{{ url('admin/quotation') }}" class="nav-link"><i class="link-icon icon-docs"></i><span class="menu-title">ใบเสนอราคา</span></a>
            </li>

            <li class="nav-item">
              <a href="{{ url('admin/contact') }}" class="nav-link"><i class="link-icon icon-bubbles"></i><span class="menu-title">ติดต่อเรา</span></a>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-settings"></i><span class="menu-title">ตั้งค่า</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="{{ url('admin/setting') }}">ตั้งค่าเว็บไซต์</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ url('admin/bank') }}">จัดการธนาคาร</a></li>
              </div>
            </li>
            
			



          </ul>
        </div>
      </div>
    </nav>
