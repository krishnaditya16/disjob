
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="/"><img src="{{asset('assets/homepage/img/logo/Logo2.png') }}" alt="" style="height: 50px;"></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/joblisting">Find a Jobs</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li><a href="/resume">Upload Resume</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn Authentication Links -->
                                @if (Auth::guest())
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="/register" class="btn head-btn1">Register</a>
                                    <a href="/login" class="btn head-btn2">Login</a>
                                </div>
                                @else
                                <li>
                                    <a href="#" class="dropdown-toggle genric-btn success-border circle header-btn d-none f-right d-lg-block" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} 
                                    </a>
                                    @if (Auth::user()-> role == "user")
                                    <ul class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="/user">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </ul>

                                    @else
                                    <ul class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="/employer">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </ul>
                                    @endif
                                </li>
                                @endif
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
 