<div class="echo-header-top">
    <div class="container">
        <div class="echo-full-header-top">
            <div class="row align-items-center plr_md--30">
                <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                   
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-7 col-8">
                    <div class="echo-header-top-date">
                        <div class="echo-day-name">
                            <span><i class="fa-regular fa-cloud"></i></span>
                            <span id="echo-day" class="echo-home-day"></span>
                            <span id="echo-date"></span>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-5 col-4 position-relative">
                    <div class="echo-header-top-subs-social-menu">
                        <div class="echo-header-top-subs-social">
                            <div class="echo-header-top-social-media">
                                <div class="rts-darkmode">
                                    <a id="rts-data-toggle" class="rts-dark-light">
                                        <i class="rts-go-dark fal fa-moon"></i>
                                        <i class="rts-go-light far fa-sun"></i>
                                    </a>
                                </div>
                                <a href="#" id="search" class="echo-header-top-search-btn search-icon action-item icon">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.11544 16.961C13.3484 16.961 16.7798 13.5296 16.7798 9.29665C16.7798 5.06373 13.3484 1.63226 9.11544 1.63226C4.88251 1.63226 1.45105 5.06373 1.45105 9.29665C1.45105 13.5296 4.88251 16.961 9.11544 16.961Z" stroke="#5E5E5E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.4461 15.0254L17.451 18.0225" stroke="#5E5E5E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="fa-regular fa-xmark-large rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @auth
                            <div>
                                <a href="{{ route('dashboard') }}">
                                    <span class="icon-wrapper d-flex">
                                        <i class="fa-regular fa-user align-items-center"></i>
                                        <span class="text ms-2">Dashboard</span>
                                    </span>
                                </a>
                            </div>
                        @else
                            <div>
                                <a href="{{ route('login') }}">
                                    <span class="icon-wrapper d-flex align-items-center">
                                        <i class="fa-regular fa-sign-in"></i>
                                        <span class="text ms-2">Login</span>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('register') }}">
                                    <span class="icon-wrapper d-flex align-items-center">
                                        <i class="fa-solid fa-registered"></i>
                                        <span class="text ms-2">Register</span>
                                    </span>
                                </a>
                            </div>
                        @endauth
                        
                        
                            
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>