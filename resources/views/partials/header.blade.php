<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src" style="height: 23px;width: 97px;background: url('https://demo.dashboardpack.com/architectui-html-pro/assets/images/logo-inverse.png');"></div>
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
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="ค้นหา...">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
            <ul class="header-menu nav">
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-database"> </i>
                        Statistics
                    </a>
                </li>
                <li class="btn-group nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-edit"></i>
                        Projects
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-cog"></i>
                        Settings
                    </a>
                </li>
            </ul>        
        </div>
        <div class="app-header-right">
        <div class="header-dots">
                    
                    
                    <div class="dropdown show">
                        <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link" aria-expanded="true">
                            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                <span class="icon-wrapper-bg bg-focus"></span>
                                <span class="language-icon opacity-8 flag large TH"></span>
                            </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-198px, 46px, 0px);">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                    <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                    <div class="menu-header-content text-center text-white">
                                        <h6 class="menu-header-subtitle mt-0">
                                            เลือกภาษา
                                        </h6>
                                    </div>
                                </div>
                            </div>
                       
                            <button type="button" tabindex="0" class="dropdown-item" data-lang="us">
                                <span class="mr-3 opacity-8 flag large US"></span>
                                USA
                            </button>
                            
                            
                            
                        </div>
                    </div>
                    
                </div>
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper c-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a  class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="{{ Gravatar::src(Auth::user()->email) }}" alt="">
                                </a>
                                
                            </div>
                        </div>
                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                        <!-- <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}
                            </div>
                            <div class="widget-subheading">
                                Admin
                            </div>
                        </div> -->
                        <!-- <i class="fa fa-angle-down ml-2 opacity-8"></i> -->
                    </div>
                    
                    <!-- <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('profile') }}" class="dropdown-item">บัญชีผู้ใช้</a>
                                    <button type="button" tabindex="0" class="dropdown-item">ตั้งค่า </button>
                        
                                        
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <a  href="{{ route('logout') }}" tabindex="0" class="dropdown-item" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div> -->
                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-rounded dropdown-menu-lg dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-293px, 44px, 0px);">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-success">
                                                <div class="menu-header-image opacity-2" style="background-image: url('https://demo.dashboardpack.com/architectui-html-pro/assets/images/dropdown-header/abstract3.jpg');"></div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="{{ Gravatar::src(Auth::user()->email) }}" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">
                                                                    {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}
                                                                </div>
                                                                <div class="widget-subheading opacity-8">Admin</div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('profile') }}" class="dropdown-item"><i class="dropdown-icon fas fa-user"> </i>บัญชีผู้ใช้</a>
                                        <a href="#" class="dropdown-item"><i class="dropdown-icon fas fa-envelope"> </i>ข้อความ</a>
                                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Graphic Design</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Graphic Design</button>
                                </div>
                </div>
            </div>        
        </div>
    </div>
</div>      