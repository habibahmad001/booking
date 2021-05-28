@extends('layouts.home')

@section('content')
<!-- intro section -->
<section id="intro" class="section intro">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#events" class="btn btn-large">Events</a>
        </div>
    </div>
</section>
<!-- intro section -->

<section id="events" class="section teams">
    <br />
    <div class="section-header">
        <h2 class="wow fadeInDown animated">This week event's</h2>
    </div>
    <div class="row content">
        <div class="col-sm-3 leftpan">
            <table id="calendar-demo" class="calendar"></table>

            <div class="user-filter">
                <h3>Filter</h3>
                @if(count(App\Hallar::all()) > 0)
                    @foreach(App\Hallar::all() as $v)
                        <p>
                            <input type="checkbox" name="filterName" id="filterId{!! $v->userID !!}" value="{!! $v->userID !!}" onclick="javascript:callcal();"> {!! $v->name !!}
                        </p>
                    @endforeach
                @else
                    <p>No filter set yet!!</p>
                @endif
            </div>
        </div>
        <div class="col-sm-9 text-left rightpan showfull">
            <!-- Banner Starts Here -->
            <div id="calcont" class="evecalendar">
                <div id="calendar" class="evecalendar"></div>
            </div>
        </div>
    </div>
</section>


<!-- services section -->
<section id="services" class="services service-section">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">News & Updates</h2>
            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-recycle"></span>
                <div class="services-content">
                    <h5>Musical Night</h5>
                    <b>Day 1</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
                <div class="services-content">
                    <h5>Dancing Night</h5>
                    <b>Day 2</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <h5>Food Night</h5>
                    <b>Day 3</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- gallery section -->
<section id="gallery" class="gallery section">
    <div class="container-fluid">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Gallery</h2>
            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/01.jpg" class="work-box"> <img src="images/portfolio/01.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/02.jpg" class="work-box"> <img src="images/portfolio/02.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/03.jpg" class="work-box"> <img src="images/portfolio/03.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/04.jpg" class="work-box"> <img src="images/portfolio/04.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/05.jpg" class="work-box"> <img src="images/portfolio/05.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/06.jpg" class="work-box"> <img src="images/portfolio/06.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/07.jpg" class="work-box"> <img src="images/portfolio/07.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/08.jpg" class="work-box"> <img src="images/portfolio/08.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
        </div>
    </div>
</section>
<!-- gallery section -->


<!-- package section -->
<section id="package" class="packageList">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Trainer package's</h2>
            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                    <h5>Earth Alive</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>38</strong>
                </div><!-- end package -->

                <div class="package wow fadeInLeft animated" data-wow-offset="200" data-wow-delay="300m">
                    <h5>Light Blue</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>75</strong>
                </div><!-- end package -->

                <div class="package no-border wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m" >
                    <h5>Rock n Roll</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>46</strong>
                </div><!-- end package -->

            </div><!-- end col-md-6 -->
            <div class="col-md-6">

                <div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="500m" >
                    <h5>Love Life</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>15</strong>
                </div><!-- end package -->

                <div class="package wow fadeInRight animated" data-wow-offset="200" data-wow-delay="600m">
                    <h5>Back Street</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>84</strong>
                </div><!-- end package -->

                <div class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
                    <h5>Golden Days</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>95</strong>
                </div><!-- end package -->

            </div><!-- end col-md-6 -->
        </div><!-- end row -->
    </div>
</section>
<!-- package section -->

<!-- our team section -->
<section id="teams" class="section teams">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Clients</h2>
            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
                    <div class="person-content">
                        <h4>Jonh Dow</h4>
                        <h5 class="role">Founder</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
                    <div class="person-content">
                        <h4>Markus Linn</h4>
                        <h5 class="role">Music</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
                    <div class="person-content">
                        <h4>Chris Jemes</h4>
                        <h5 class="role">Singer</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
                    <div class="person-content">
                        <h4>Vintes Mars</h4>
                        <h5 class="role">Singler</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our team section -->
<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="flexslider">
                <br />
                <div class="section-header">
                    <h2 class="wow fadeInDown animated">Testimonial's</h2>
                </div>
                <ul class="slides">
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>Chris Mentsl</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Praesent eget risus vitae massa Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>Kristean velnly</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>Markus Denny</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Vitae massa semper aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>John Doe</p>
                            </blockquote>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section -->

<!-- contact section -->
<section id="contact" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Contact Us</h2>
            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row">
            <div class="col-md-7 conForm">
                <div id="message"></div>
                <form method="post" action="php/contact.php" name="cform" id="cform">
                    <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
                    <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
                    <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
                    <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
                    <div id="simple-msg"></div>
                </form>
            </div>

            <div class="col-xs-5" style="">
                <h3 style="margin-top:0;color:#fff;">Our Address</h3>
                <address style="color:#fff;">
                    <strong>Company name</strong><br>
                    1234 Street Dr.<br>
                    Vancouver, BC<br>
                    Canada<br>
                    V6G 1G9<br>
                    <abbr title="Phone">Tel:</abbr> (604) 555-4321
                </address>
                © 2018 Company Name. Template by <a target="_blank" href="http://webthemez.com/" title="Bootstrap Templates">WebThemez.com</a><br/>
                Find More <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Templates</a>
            </div>

        </div>
    </div>
</section>
<!-- contact section -->
@endsection