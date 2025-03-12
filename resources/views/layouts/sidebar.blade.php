@php
    use App\Helpers\Helper;
@endphp
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a class="logo-anchor" href="{{ route('dashboard') }}">
                    <img class="img-fluid for-dark" src="{{ asset(Helper::getLogoLight()) }}" alt="">
                    <img class="img-fluid for-light" src="{{ asset(Helper::getLogoDark()) }}" alt="">
                </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('dashboard') }}"><img class="img-fluid"
                    src="{{ asset(Helper::getFavicon()) }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>{{ __('Back') }}</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                            <svg class="stroke-icon"></svg>
                            <span>{{ __('Dashboard') }}</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>{{ __('Management') }}</h6>
                        </div>
                    </li>
                    @can(['view category'])
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('dashboard.category.*') ? 'active' : '' }}"
                                href="{{ route('dashboard.category.index') }}">
                                <i class="icon-pin"></i>
                                <span>Category</span>
                            </a>
                        </li>
                    @endcan
                    @can(['view course'])
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('dashboard.course.*') ? 'active' : '' }}"
                                href="{{ route('dashboard.course.index') }}">
                                <i class="icon-pin"></i>
                                <span>Course</span>
                            </a>
                        </li>
                    @endcan
                    @can(['view user'])
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('dashboard.user.*') ? 'active' : '' }}"
                                href="{{ route('dashboard.user.index') }}">
                                <i class="icon-pin"></i>
                                <span>User</span>
                            </a>
                        </li>
                    @endcan

                    <li class="sidebar-main-title">
                        <div>
                            <h6>{{ __('Setup') }}</h6>
                        </div>
                    </li>
                    @can(['view role'])
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('dashboard.roles.*') ? 'active' : '' }}"
                                href="{{ route('dashboard.roles.index') }}">
                                <i class="icon-pin"></i>
                                <span>Roles</span>
                            </a>
                        </li>
                    @endcan

                    @can(['view permission'])
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{ request()->routeIs('dashboard.permissions.*') ? 'active' : '' }}"
                                href="{{ route('dashboard.permissions.index') }}">
                                <i class="icon-key"></i>
                                <span>Permissions</span>
                            </a>
                        </li>
                    @endcan

                    @can(['update setting'])
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard.setting.index') }}">
                                <i class="icon-settings"></i>
                                <span>{{ __('Settings') }}</span>
                            </a>
                        </li>
                    @endcan
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
