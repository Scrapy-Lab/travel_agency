    <!--====== Header Area ======-->

    <header class="header-area header-one transparent-header">

        <!--====== Header Navigation ======-->

        <div class="header-navigation navigation-white">

            <div class="nav-overlay"></div>

            <div class="container-fluid">

                <div class="primary-menu">

                    <!--====== Site Branding ======-->

                    <div class="site-branding">

                        <a href="index.html" class="brand-logo"><img class="brandLogo" src="{{asset('img/logo/logo.jpg')}}"
                                alt="Site Logo"></a>

                    </div>

                    <!--====== Nav Menu ======-->

                    <div class="nav-menu">

                        <!--====== Site Branding ======-->

                        <div class="mobile-logo mb-30 d-block d-xl-none">

                            <a href="index.html" class="brand-logo"><img src="{{asset('img/logo/logo.jpg')}}"
                                    alt="Site Logo"></a>

                        </div>

                        <!--=== Nav Search ===-->

                        <div class="nav-search mb-30 d-block d-xl-none ">

                            <form>

                                <div class="form_group">

                                    <input type="email" class="form_control" placeholder="Search Here" name="email"
                                        required>

                                    <button class="search-btn"><i class="fas fa-search"></i></button>

                                </div>

                            </form>

                        </div>

                        <!--====== main Menu ======-->

                        <nav class="main-menu mb-2 mt-2">

                            <ul>

                                <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : ''}}"><a class="text-black" href="{{route('home')}}">Home</a></li>
                                <li  class="{{(\Request::route()->getName() == 'tour') ? 'active' : ''}}"><a class="text-black" href="{{route('tour')}}">Tour</a></li>
                                <li  class="{{(\Request::route()->getName() == 'taxi') ? 'active' : ''}}"><a class="text-black" href="{{route('taxi')}}">Taxi</a></li>
                                <li  class="{{(\Request::route()->getName() == 'about') ? 'active' : ''}}"><a class="text-black" href="{{route('about')}}">About</a></li>
                                <li  class="{{(\Request::route()->getName() == 'contact') ? 'active' : ''}}"><a class="text-black" href="{{route('contact')}}">Contact Us</a></li>

                            </ul>

                        </nav>

                        <!--====== Menu Button ======-->

                        <div class="menu-button mt-40 d-xl-none">

                            <a href="contact.html" class="main-btn secondary-btn">Book Now<i
                                    class="fas fa-paper-plane"></i></a>

                        </div>

                    </div>

                    <!--====== Nav Right Item ======-->

                    <div class="nav-right-item">

                        <div class="menu-button d-xl-block d-none">

                            <a href="contact.html" class="main-btn primary-btn">Book Now<i
                                    class="fas fa-paper-plane"></i></a>

                        </div>

                        <div class="navbar-toggler">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header><!--====== End Area ======-->
