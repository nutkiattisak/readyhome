<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">แผงควบคุม</li>
                <li>
                <a href="" class="{{ Request::is("home") ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        แผงควบคุม
                    </a>
                </li>
                <li class="app-sidebar__heading">
                    ห้องพัก
                </li>
                <li>
                <a href="{{ route('rooms.index') }}" class="{{ Request::is("rooms") ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>ห้องพัก
                    </a>
                </li>
                <li class="app-sidebar__heading">จดมิเตอร์</li>

                <li>
                <a href="{{ route('meters') }}" class="{{ Request::is("meters") ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        จดมิเตอร์
                    </a>
                </li>
   
                <li class="app-sidebar__heading">ผู้เช่า</li>
                <li>
                <a href="" class="{{ Request::is("members") ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        ผู้เช่าปัจจุบัน
                    </a>
                    <a href="">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        ผู้เช่าเก่า
                    </a>
                </li>

                <li class="app-sidebar__heading">การแจ้ง</li>
                <li>
                <a href="" class="{{ Request::is("members") ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        แจ้งซ่อม
                    </a>
                    <a href="">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        แจ้งย้ายออก
                    </a>
                </li>
               
                
                
                <li class="app-sidebar__heading">ตั้งค่า</li>
                <li>
                    <a href="{{ route('rooms-settings.index') }}">
                        <i class="metismenu-icon pe-7s-calculator {{ Request::is("members") ? 'mm-active' : '' }}"></i>
                        ห้องพัก
                    </a>
                    <a href="">
                        <i class="metismenu-icon pe-7s-calculator"></i>
                        คาบริการ
                    </a>
                    <a href="">
                        <i class="metismenu-icon pe-7s-gleam"></i>
                        ค่ามิเตอร์
                    </a>
                    <a href="">
                        <i class="metismenu-icon pe-7s-cash"></i>
                        บัญชีธนาคาร
                    </a>
                    <a href="{{ route('users.index') }}" class="{{ Request::is("users") ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        ผู้ใช้
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> 