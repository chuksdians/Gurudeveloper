<!DOCTYPE HTML>
<html>
<head>
    <title>GURUDEVELOPER| Home :: We make you work less</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Healing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{url('files/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{url('files/css/style.css')}}" rel='stylesheet' type='text/css' />
    <script src="{{url('files/js/jquery-1.11.1.min.js')}}"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Six+Caps' rel='stylesheet' type='text/css' />
    <!--//webfonts-->
    <link rel="stylesheet" href="{{url('files/css/flexslider.css')}}" type="text/css" media="screen" />
    <script type="text/javascript" src="{{url('files/js/bootstrap.js')}}"></script>
    <!--light-box-files -->
    <script src="{{url('files/js/modernizr.custom.97074.js')}}"></script>
    <script src="{{url('files/js/jquery.chocolat.js')}}"></script>
    <link rel="stylesheet" href="{{url('files/css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">

    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.g-left a').Chocolat();
        });
    </script>
    <!--light-box-files -->
    <script type="text/javascript" src="{{url('files/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{url('files/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>

</head>
<body>
<!-- header -->

<!-- header-bottom -->
<div class="header-bottom">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!--/.navbar-header-->
            {{--<div><img src="files/images/guru.png"  id="logo"  class="img-responsive" alt="" ></div>--}}
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#services" class="scroll">Services</a></li>
                    <li><a href="#about" class="scroll">About</a></li>
                    <li><a href="#gallery" class="scroll">Gallery</a></li>
                    <li><a href="#insurance" class="scroll">Tech Support</a></li>
                    <li><a href="#contact" class="scroll">Contact</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <div class="search-box">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div>
        <div class="clearfix"> </div>

        <!-- search-scripts -->
        <script src="{{url('files/js/classie.js')}}"></script>
        <script src="{{url('filesjs/uisearch.js')}}"></script>
        <script>
            new UISearch( document.getElementById( 'sb-search' ) );
        </script>
        <!-- //search-scripts -->

    </div>
</div>
<!-- /header-bottom -->

<!-- header -->
<!-- banner -->
<div class="banner" id="home">
    <div class="container">
        {{--<div class="logo">--}}
            {{--<h1><a href="{{url('/')}}">Healing</a></h1>--}}
        {{--</div>--}}


        <!-- FlexSlider -->
        <script defer="" src="{{url('files/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(function(){

            });
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- FlexSlider -->

    </div>
    <svg id="clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
                             M0 100 Q 5 0 10 100
                             M5 100 Q 10 30 15 100
                             M10 100 Q 15 10 20 100
                             M15 100 Q 20 30 25 100
                             M20 100 Q 25 -10 30 100
                             M25 100 Q 30 10 35 100
                             M30 100 Q 35 30 40 100
                             M35 100 Q 40 10 45 100
                             M40 100 Q 45 50 50 100
                             M45 100 Q 50 20 55 100
                             M50 100 Q 55 40 60 100
                             M55 100 Q 60 60 65 100
                             M60 100 Q 65 50 70 100
                             M65 100 Q 70 20 75 100
                             M70 100 Q 75 45 80 100
                             M75 100 Q 80 30 85 100
                             M80 100 Q 85 20 90 100
                             M85 100 Q 90 50 95 100
                             M90 100 Q 95 25 100 100
                             M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>
</div>
<!-- banner -->

<!---sliding info--->
<div class="about" id="about">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="banner-info">
                            <h2>Web Design</h2>
                            <h4>branding ,Developing & hosting</h4>
                            <p>Nasagni dolorequaone voluptase keroas emsequi nesas ciuneque pobasera .</p>
                            <a class="hvr-shutter-in-horizontal" href="#">Read More</a>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h2>Console Application</h2>
                            <h4>DeskTop, Eri business planing, AI personal Assistant</h4>
                            <p>Nasagni dolorequaone voluptase keroas emsequi nesas ciuneque pobasera .</p>
                            <a class="hvr-shutter-in-horizontal" href="#">Read More</a>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h2>Graphics</h2>
                            <h4>G.i.f, branding & illustrations</h4>
                            <p>Nasagni dolorequaone voluptase keroas emsequi nesas ciuneque pobasera .</p>
                            <a class="hvr-shutter-in-horizontal" href="#">Read More</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- about -->

        <div class="fresh">

            <h3 align="center">About</h3>

            <div class="col-md-6 about-right">

                <div class="abt-top">
                    <div class="abt-lft">
                        <img src="files/images/p3.jpg" class="img-responsive" alt="">
                    </div>


                    <div class="abt-rgt">
                        <h4>MAC , Windows & linux Application </h4>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="abt-top">
                    <div class="abt-lft">
                        <img src="files/images/4.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="abt-rgt">
                        <h4>Website Applications </h4>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 about-right">

            <div class="abt-top">
                <div class="abt-lft">
                    <img src="files/images/p3.jpg" class="img-responsive" alt="">
                </div>
                <div class="abt-rgt">
                    <h4>IOS & Andriod, Windows apps</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="abt-top">
                <div class="abt-lft">
                    <img src="files/images/4.jpg" class="img-responsive" alt="">
                </div>
                <div class="abt-rgt">
                    <h4>Graphics & Branding </h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- about -->
<svg id="stamp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 0 Q 2.5 40 5 0
						 Q 7.5 40 10 0
						 Q 12.5 40 15 0
						 Q 17.5 40 20 0
						 Q 22.5 40 25 0
						 Q 27.5 40 30 0
						 Q 32.5 40 35 0
						 Q 37.5 40 40 0
						 Q 42.5 40 45 0
						 Q 47.5 40 50 0
						 Q 52.5 40 55 0
						 Q 57.5 40 60 0
						 Q 62.5 40 65 0
						 Q 67.5 40 70 0
						 Q 72.5 40 75 0
						 Q 77.5 40 80 0
						 Q 82.5 40 85 0
						 Q 87.5 40 90 0
						 Q 92.5 40 95 0
						 Q 97.5 40 100 0 Z">
    </path>
</svg>

<!-- services -->
<div class="services" id="services">
    <div class="container">
        <h6>Services</h6>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <h3>Console And Web App Debugging & Development</h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
            <h3>Web Hosting</h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            <h3>Digital Illustration</h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            <h3>Monetized Mobile APPS </h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- services -->
<!-- insurance -->
<div class="insurance" id="insurance">
    <div class="container">
        <h6>Tech Support</h6>
        <div class="col-md-6 about-right">
            <div class="abt-top">
                <div class="abt-lft">
                    <img src="files/images/4.jpg" class="img-responsive" alt="">
                </div>
                <div class="abt-rgt">
                    <h4>Online & Onsite Tech Support plans</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 about-right">
            <div class="abt-top">
                <div class="abt-lft">
                    <img src="files/images/4.jpg" class="img-responsive" alt="">
                </div>
                <div class="abt-rgt">
                    <h4>Hardware & Software Tech Support </h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
        <div class="clearfix"></div>
    </div>

<!-- insurance -->

<!---svgbreak-->
<svg id="stamp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 0 Q 2.5 40 5 0
						 Q 7.5 40 10 0
						 Q 12.5 40 15 0
						 Q 17.5 40 20 0
						 Q 22.5 40 25 0
						 Q 27.5 40 30 0
						 Q 32.5 40 35 0
						 Q 37.5 40 40 0
						 Q 42.5 40 45 0
						 Q 47.5 40 50 0
						 Q 52.5 40 55 0
						 Q 57.5 40 60 0
						 Q 62.5 40 65 0
						 Q 67.5 40 70 0
						 Q 72.5 40 75 0
						 Q 77.5 40 80 0
						 Q 82.5 40 85 0
						 Q 87.5 40 90 0
						 Q 92.5 40 95 0
						 Q 97.5 40 100 0 Z">
    </path>
</svg>

<!-- services -->
<div class="services" id="services">
    <div class="container">
        <h6>Services</h6>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <h3>Branding</h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
            <h3>Our Advice</h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            <h3>Services</h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="col-md-3 services-left">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            <h3>Tech support</h3>
            <P>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
            <a class="hvr-shutter-in-horizontal" href="#">More</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- services -->


<!---services2--->
<div class="insurance" id="insurance">
    <div class="container">
        <h6 class="center-block">University & Personal <br>IT Projects Consultaion</h6>
        <div class="col-md-6 about-right">
            <div class="abt-top">
                <div class="abt-lft">
                    <img src="files/images/4.jpg" class="img-responsive" alt="">
                </div>
                <div class="abt-rgt">
                    <h4>Student I.T Projects </h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 about-right">
            <div class="abt-top">
                <div class="abt-lft">
                    <img src="files/images/4.jpg" class="img-responsive" alt="">
                </div>
                <div class="abt-rgt">
                    <h4>Company & Personal E.R.P</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!---//services--->
<!-- gallery -->
<div class="gallery" id="gallery">
    <div class="container">
        <div class="gallery-top heading">
            <h6>Our Gallery</h6>
        </div>
        <div class="gallery-bottom">
            <div class="grid">
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/12.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/12.jpg" alt="">
                            <figcaption>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/11.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/11.jpg" alt="">
                            <figcaption>
                            </figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/10.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/10.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="grid">
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/9.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/9.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/8.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/8.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/7.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/7.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="grid">
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/6.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/6.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/5.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/5.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="{{url('files/images/2.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="files/images/2.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- gallery -->
<!-- our team -->
<div class="ourteam">
    <div class="container">
        <h6>Our Team</h6>
        <ul class="ch-grid">
            <li>
                <a href="#"><div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <div class="soci">
                                <h5><a href="#"><i class="f-1"> </i></a>
                                    <a href="#"><i class="t-1"> </i></a>
                                    <a href="#"><i class="g-1"> </i></a></h5>
                            </div>
                        </div>
                    </div></a>
            </li>
            <li>
                <a href="#"><div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <div class="soci">
                                <h5><a href="#"><i class="f-1"> </i></a>
                                    <a href="#"><i class="t-1"> </i></a>
                                    <a href="#"><i class="g-1"> </i></a></h5>
                            </div>
                        </div>
                    </div></a>
            </li>
        </ul>
        <div class="social">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="www.facebook.com/"><i class="facebok"> </i></a></li>
                <li><a href="#"><i class="twiter"> </i></a></li>
                <li><a href="https://www.instagram.com/thegurudeveloper/"><i class="inst"> </i></a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>
<!-- our team -->
<svg id="stamp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0 0 Q 2.5 40 5 0
						 Q 7.5 40 10 0
						 Q 12.5 40 15 0
						 Q 17.5 40 20 0
						 Q 22.5 40 25 0
						 Q 27.5 40 30 0
						 Q 32.5 40 35 0
						 Q 37.5 40 40 0
						 Q 42.5 40 45 0
						 Q 47.5 40 50 0
						 Q 52.5 40 55 0
						 Q 57.5 40 60 0
						 Q 62.5 40 65 0
						 Q 67.5 40 70 0
						 Q 72.5 40 75 0
						 Q 77.5 40 80 0
						 Q 82.5 40 85 0
						 Q 87.5 40 90 0
						 Q 92.5 40 95 0
						 Q 97.5 40 100 0 Z">
    </path>
</svg>
<!-- footer -->
<div class="footer" id="contact">
    <div class="container">
        <h6>Contact Us</h6>
        <div class="co-ntact">
            <form  method="post" action="{{url('/contact')}}">
                {{csrf_field()}}
                <div class="to">
                    <input value="Name" type="text" class="text" name="Name" onfocus="this.value='';" onblur="if(this.value==''){this.value='Name';}" >
                    <input value="Email" type="text" class="text" name="Email"  onfocus="this.value='';" onblur="if(this.value==''){this.value='Email';}">
                    <input value="Subject" type="text" class="text" name="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                </div>
                <div class="text">
                    <textarea value="Message"  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>

                    <div class="form-submit">
                        <input type="submit" id="submit" value="Submit"><br>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="copyright">
            <p>© 2016 GURUDEVELOPER . All rights reserved | Design by</p>
        </div>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.829468171367!2d7.47910131424603!3d9.079295290700427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0af80868a9a5%3A0x309af9d44595a87e!2sPosh+Point!5e0!3m2!1sen!2sng!4v1471857506519"  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- footer -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
</body>
</html>