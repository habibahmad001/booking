<!-- header section -->
<section class="banner" role="banner" id="banner">
    <header id="header">
        <div class="header-content clearfix"> <span class="logo"><a href="{!! BASE_PATH !!}">Manage<b>Events</b></a></span>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="#banner">Home</a></li>
                    <li><a href="#intro">About</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#package">Packages</a></li>
                    <li><a href="#teams">Our Client's</a></li>
                    <li><a href="#contact">Contact</a></li>
                    @if(Auth::check())
                        <li><a href="{!! URL::to('/logout') !!}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    @else
                        <li class="dropdown">
                            <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-log-in"></span> <span class="nav-label"> Login</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a href="{!! URL::to('/instructor') !!}">Login</a></li>
                                <li><a href="{!! URL::to('/register') !!}">Register</a></li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
    <!-- banner text -->
    <div class="container">
        <div class="col-md-10">
            <div class="banner-text text-center">
                <h1>Get Started</h1>
                <p>Manage you'r Task</p>
                {{--<div class="countdown styled"></div>--}}
            </div>
            <!-- banner text -->
        </div>
    </div>
</section>
<!-- header section -->