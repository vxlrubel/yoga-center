<header class="clearfix position-relative" style="z-index: 10;">
    <div class="header-top border-bottom py-1 position-relative" style="z-index: 9999">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="d-flex align-items-center small">
                        <i class="material-icons" style="font-size: 1rem;">map</i>
                        <span class="ms-1">184 Main Collins Street</span>
                        <span class="mx-3">|</span>
                        <i class="material-icons" style="font-size: 1rem;">phone</i>
                        <span class="ms-1">(965) 436 3274</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-8 col-lg-12">
                            <div class="d-flex align-items-center justify-content-lg-end gap-2">
                                <div class="d-inline-flex gap-2">
                                    <a href="{{url('/login')}}" class="text-primary text-decoration-none">Login</a>
                                    <span class="text-primary">/</span>
                                    <a href="{{url('/register')}}" class="text-primary text-decoration-none">Register</a>
                                </div>

                                <div class="profile position-relative d-inline-flex align-items-center justify-content-end">
                                    <button class="profile-icon d-inline-flex border-0 rounded-circle p-0">
                                        <img src="{{asset('/assets/img/profile-placeholder.png')}}" alt="profile image">
                                    </button>
                                    <ul class="profile-dropdown list-unstyled p-2 m-0 position-absolute bg-white border shadow-sm">
                                        <li class="px-2"><a href="{{url('/profile')}}" class="text-decoration-none text-dark d-block py-1">Profile</a></li>
                                        <li class="px-2"><a href="javascript:void(0)" class="text-decoration-none text-dark d-block py-1">Edit Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-lg-none">
                            <div class="text-end">
                                <button class="btn btn-menu-toggle border-0 shadow-none btn-sm rounded-0 d-inline-flex gap-1 align-items-center">
                                    <span>MENU</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></button>
                                    </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- mobile menu --}}
        <div class="position-absolute start-0 end-0 bg-white d-lg-none" id="mobileMenuParent">
            <div class="container-fluid py-3">
                <ul class="mobile-menu p-0 list-unstyled m-0">
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ url('/classes') }}" class="{{ Request::is('classes') || Request::is('class-details') ? 'active' : '' }}">Classes</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/classes') }}" class="{{ Request::is('classes') ? 'active' : '' }}">Our Classes</a></li>
                            <li><a href="{{ url('/class-details') }}" class="{{ Request::is('class-details') ? 'active' : '' }}">Class Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/trainers') }}" class="{{ Request::is('trainers') || Request::is('trainer-details') ? 'active' : '' }}">Trainers</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/trainers') }}" class="{{ Request::is('trainers') ? 'active' : '' }}">Our Trainers</a></li>
                            <li><a href="{{ url('/trainer-details') }}" class="{{ Request::is('trainer-details') ? 'active' : '' }}">Trainer Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/events') }}" class="{{ Request::is('events') || Request::is('event-details') ? 'active' : '' }}">Events</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/events') }}" class="{{ Request::is('events') ? 'active' : '' }}">Our Events</a></li>
                            <li><a href="{{ url('/event-details') }}" class="{{ Request::is('event-details') ? 'active' : '' }}">Event Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') || Request::is('blog-details') ? 'active' : '' }}">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Our Blog</a></li>
                            <li><a href="{{ url('/blog-details') }}" class="{{ Request::is('blog-details') ? 'active' : '' }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-menu bg-transparent text-white">
        <div class="container-fluid h-100">
            <div class="d-flex align-items-center header-navbar h-100">
                <div class="logo">
                    <a href="{{url('/')}}" class="logo-image">
                        <img src="{{asset('/assets/img/logo.png')}}" alt="logo image">
                    </a>
                </div>
                <div class="menu d-none d-lg-flex justify-content-center">
                    <ul class="p-0 list-unstyled m-0 d-flex gap-3 align-items-center px-3">
                        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ url('/classes') }}" class="{{ Request::is('classes') || Request::is('class-details') ? 'active' : '' }}">Classes</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/classes') }}" class="{{ Request::is('classes') ? 'active' : '' }}">Our Classes</a></li>
                                <li><a href="{{ url('/class-details') }}" class="{{ Request::is('class-details') ? 'active' : '' }}">Class Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/trainers') }}" class="{{ Request::is('trainers') || Request::is('trainer-details') ? 'active' : '' }}">Trainers</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/trainers') }}" class="{{ Request::is('trainers') ? 'active' : '' }}">Our Trainers</a></li>
                                <li><a href="{{ url('/trainer-details') }}" class="{{ Request::is('trainer-details') ? 'active' : '' }}">Trainer Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/events') }}" class="{{ Request::is('events') || Request::is('event-details') ? 'active' : '' }}">Events</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/events') }}" class="{{ Request::is('events') ? 'active' : '' }}">Our Events</a></li>
                                <li><a href="{{ url('/event-details') }}" class="{{ Request::is('event-details') ? 'active' : '' }}">Event Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') || Request::is('blog-details') ? 'active' : '' }}">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Our Blog</a></li>
                                <li><a href="{{ url('/blog-details') }}" class="{{ Request::is('blog-details') ? 'active' : '' }}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>
                </div>
                <div class="menu-last-item">
                    <div class="text-end">
                        <a href="{{url('/booknow')}}" class="btn btn-light text-dark btn-sm small text-uppercase py-2 rounded-pill px-4">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
