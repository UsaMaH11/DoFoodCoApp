<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img
                    class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}"
                    alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        {{-- <a href="{{route('/')}}"><img class="img-fluid"
                            src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a> --}}
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General Settings</h6>
                            {{-- <p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p> --}}
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#"><i data-feather="home"></i><span class="lan-3">Dashboards</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="/admin/user-management"><i data-feather="users"></i><span class="lan-3">User Management</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="/admin/requested-food"><i data-feather="users"></i><span class="lan-3">Requested Food</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="/admin/shop-management"><i data-feather="shopping-bag"></i><span class="lan-3">Shop Management</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#"><i data-feather="message-circle"></i><span class="lan-3">Chat Management</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="#"><i data-feather="mail"></i><span class="lan-3">Customer Service</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
