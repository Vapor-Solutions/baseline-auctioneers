<!-- Header Navbar Start -->
<nav class="header--navbar navbar bg--color-theme" data-sticky="999">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav"
                aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div id="headerNav" class="collapse navbar-collapse">
            <!-- Header Nav Links Start -->
            <ul class="header--nav-links nav float--left">
                <li class=" @if (Request::is('/')) active @endif">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class=" @if (Request::is('about')) active @endif">
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<span
                            class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="#">All Services</a></li>
                        <li><a href="#">Service Details</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span
                            class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">404</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <!-- Header Nav Links End -->

            <!-- Header Search Start -->
            <form class="header--search navbar-form float--right hidden-sm hidden-xs" data-form="validate">
                <input type="search" name="search" placeholder="Search..." class="form-control" autocomplete="off"
                    required>

                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <!-- Header Search End -->
        </div>
    </div>
</nav>
<!-- Header Navbar End -->
