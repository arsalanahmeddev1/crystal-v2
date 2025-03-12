<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{ route('login') }}"><img class="img-fluid"
                        src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div class="notification-slider">
                <div class="d-flex h-100"> <img src="../assets/images/giftools.gif" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="font-primary"></span><span class="f-light">
                        Training program that gets you real work</span></h6><i class="icon-arrow-top-right f-light"></i>
                </div>
                <div class="d-flex h-100"><img src="../assets/images/giftools.gif" alt="gif">
                    <h6 class="mb-0 f-w-400"><span class="f-light">Training program that gets you real work </span></h6>
                    {{-- <a
                        class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a> --}}
                </div>
            </div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
        {{-- <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <ul class="nav-menus">
            </ul>
        </div> --}}
            <ul class="nav-menus">
                @if (env('ALLOW_TRANSLATION') == true)
                    <li class="language-nav">
                        <div class="translate_wrapper">
                            <div class="current_lang">
                                <div class="lang">
                                    <i
                                        class="flag-icon flag-icon-{{ App::getLocale() == 'en' ? 'us' : (App::getLocale() == 'cn' ? 'cn' : 'ae') }}"></i>
                                    <span class="lang-txt">{{ strtoupper(App::getLocale()) }}</span>
                                </div>
                            </div>
                            <div class="more_lang">
                                <a href="{{ route('lang', ['lang' => 'en']) }}"
                                    class="lang {{ App::getLocale() == 'en' ? 'selected' : '' }}" data-value="en">
                                    <i class="flag-icon flag-icon-us"></i>
                                    <span class="lang-txt">English<span> (US)</span></span>
                                </a>
                                <a href="{{ route('lang', ['lang' => 'cn']) }}"
                                    class="lang {{ App::getLocale() == 'cn' ? 'selected' : '' }}" data-value="cn">
                                    <i class="flag-icon flag-icon-cn"></i>
                                    <span class="lang-txt">简体中文<span>(CN)</span></span>
                                </a>
                                <a href="{{ route('lang', ['lang' => 'ae']) }}"
                                    class="lang {{ App::getLocale() == 'ae' ? 'selected' : '' }}" data-value="ae">
                                    <i class="flag-icon flag-icon-ae"></i>
                                    <span class="lang-txt">لعربية<span> (AE)</span></span>
                                </a>
                            </div>
                        </div>
                    </li>
                @endif
                
                <li> <span class="header-search">
                    <svg>
                      <use href="../assets/svg/icon-sprite.svg#search"></use>
                    </svg></span></li>
                <li class="onhover-dropdown">
                  <svg>
                    <use href="../assets/svg/icon-sprite.svg#star"></use>
                  </svg>
                  <div class="onhover-show-div bookmark-flip">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="front">
                          <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                          <ul class="bookmark-dropdown">
                            <li>
                              <div class="row">
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                  </div>
                                </div>
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                  </div>
                                </div>
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="text-center"><a class="flip-btn f-w-700 btn btn-primary w-100" id="flip-btn"
                                href="#!">Add Bookmark</a></li>
                          </ul>
                        </div>
                        <div class="back">
                          <ul>
                            <li>
                              <div class="bookmark-dropdown flip-back-content">
                                <input type="text" placeholder="Search...">
                              </div>
                            </li>
                            <li><a class="f-w-700 d-block flip-back btn btn-primary w-100" id="flip-back" href="#!">Back</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mode">
                    <svg>
                      <use href="../assets/svg/icon-sprite.svg#moon"></use>
                    </svg>
                  </div>
                </li>
                <li class="onhover-dropdown">
                  <div class="notification-box">
                    <svg>
                      <use href="../assets/svg/icon-sprite.svg#notification"></use>
                    </svg><span class="badge rounded-pill badge-success">4 </span>
                  </div>
                  <div class="onhover-show-div notification-dropdown">
                    <h6 class="f-18 mb-0 dropdown-title">Notifications </h6>
                    <ul>
                      <li
                        class="b-l-primary border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex justify-content-between">
                          <div class="toast-body">
                            <p>Delivery processing</p>
                          </div>
                          <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                        </div>
                      </li>
                      <li
                        class="b-l-success border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex justify-content-between">
                          <div class="toast-body">
                            <p>Order Complete</p>
                          </div>
                          <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                        </div>
                      </li>
                      <li
                        class="b-l-secondary border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex justify-content-between">
                          <div class="toast-body">
                            <p>Tickets Generated</p>
                          </div>
                          <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                        </div>
                      </li>
                      <li
                        class="b-l-warning border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex justify-content-between">
                          <div class="toast-body">
                            <p>Delivery Complete</p>
                          </div>
                          <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 py-0">
                    <div class="media profile-media profile-pic"><img class="b-r-10"
                            src="{{ asset(Auth::user()->profile_pic ?? 'assets/images/dashboard/profile.png') }}"
                            alt="">
                        <div class="media-body"><span>{{ __(Auth::user()->name) }}</span>
                            {{-- <p class="mb-0 font-roboto">{{ucfirst(Auth::user()->role->role)}}<i class="middle fa fa-angle-down"></i></p> --}}
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        {{-- <li><a href="{{ route('profile.edit',Auth::user()->id) }}"><i data-feather="user"></i><span>Profile </span></a></li> --}}
                        {{-- <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                        <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li> --}}
                        {{-- <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li> --}}
                        <li> <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                <i data-feather="log-in"> </i>
                                <span> {{ __('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                {{-- <li class="profile-nav onhover-dropdown pe-0 py-0">
                  <div class="d-flex profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.png" alt="">
                    <div class="flex-grow-1"><span>Emay Walter</span>
                      <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
                    </div>
                  </div>
                  <ul class="profile-dropdown onhover-show-div">
                    <li><a href="sign-up.html"><i data-feather="user"></i><span>Account </span></a></li>
                    <li><a href="mail-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                    <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                    <li><a href="add-user.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                    <li><a href="login.html"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                  </ul>
                </li> --}}
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">                        
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      {{-- <div class="ProfileCard-realName">{{name}}</div> --}}
      </div>
      </div>
    </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">{{ __('Your search turned up 0 results. This most likely means the backend is down, yikes!') }}</div></script>
    </div>
</div>
