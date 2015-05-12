<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Protech Gas</title>
    
    <link href=" {{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href=" {{asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href=" {{asset('css/animate.css') }}" rel="stylesheet">
    <link href=" {{asset('css/main.css') }}" rel="stylesheet">
    <link href=" {{asset('css/custom.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img width="130" height="50" src="{{asset('images/logo4.png')}}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="{{URL::to('/about')}}">About Us</a></li>
                    <li><a href="{{URL::to('/products')}}">Products</a></li>
                    <li><a href="{{URL::to('/projects')}}">Projects</a></li>
                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <div class="container">
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{asset('images/slider/img5.jpg')}})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">Our Mission</h2>
                                    <h3 class="boxed animation animated-item-2">To Redefine Healthcare Systems.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/img41.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">How?</h2>
                                    <h3 class="boxed animation animated-item-2">By Providing Top Health Facilities Installation</h3>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="services.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url({{asset('images/slider/img31.jpg')}})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h1 class="animation animated-item-1 boxed">TOGETHER</h1>
                                    <h2 class="animation animated-item-2 boxed">We Can CHANGE Healthcare Systems</h2>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                    <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="products" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-user icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">Our Mission</h2>
                            <blockquote><h3>"Redefining the standard of medical health delivery services in Nigeria and across Africa."</h3>
                            </blockquote>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-cogs icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Our Services</h3>
                            <p>We offer a complete range of medical gas solutions for health institutions in Nigeria and across Africa. We specialize in installation, maintenance and supplies of Medical Gas Pipeline System (MGPS) and other medical industrial equipments.</p>
                            <br>
                            <a class="btn btn-default btn-md" href="products.html">Read More</a>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-user icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Who We Are</h3>
                            <p>Protech gas Ltd is a medical health care delivery support services company establish in 2001 and duly incorporated with the corporate Affairs Commission (CAC) in 2009 to providing value added services driven by a team of multi-disciplinary and highly experienced professionals...</p>
                            <br>
                            <a class="btn btn-default btn-md" href="about-us.html">Read More</a>
                        </div>
                    </div>
                </div><!-- /.col-md-4 -->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Recent Projects</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <blockquote><p>Installation of Medical Gas Pipeline System (MGPS) at University of Benin Teaching Hospital (UBTH)</p>
                                                <br>
                                                <a class="btn btn-default btn-md" href="products.html">Read More</a></blockquote>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="MPGS" href="services.html" target="_blank"><i class="icon-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-md-4 col-xs-12">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <blockquote><p>Installation of Medical Gas Pipeline System (MGPS) at University of Benin Teaching Hospital (UBTH)</p>
                                                <br>
                                                <a class="btn btn-default btn-md" href="services.html">Read More</a></blockquote>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="MPGS" href="services.html" target="_blank"><i class="icon-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 col-xs-12">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <blockquote><p>Installation of Medical Gas Pipeline System (MGPS) at University of Benin Teaching Hospital (UBTH)</p>
                                                <br>
                                                <a class="btn btn-default btn-md" href="services.html">Read More</a></blockquote>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="MPGS" href="services.html" target="_blank"><i class="icon-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <blockquote><p>Installation of Medical Gas Pipeline System (MGPS) at University of Benin Teaching Hospital (UBTH)</p>
                                                <br>
                                                <a class="btn btn-default btn-md" href="services.html">Read More</a></blockquote>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="MPGS" href="services.html" target="_blank"><i class="icon-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-md-4 col-xs-12">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <blockquote><p>Installation of Medical Gas Pipeline System (MGPS) at University of Benin Teaching Hospital (UBTH)</p>
                                                <br>
                                                <a class="btn btn-default btn-md" href="services.html">Read More</a></blockquote>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="MPGS" href="services.html" target="_blank"><i class="icon-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="col-md-4 col-xs-12">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <blockquote><p>Installation of Medical Gas Pipeline System (MGPS) at University of Benin Teaching Hospital (UBTH)</p>
                                                <br>
                                                <a class="btn btn-default btn-md" href="services.html">Read More</a></blockquote>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="MPGS" href="services.html" target="_blank"><i class="icon-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="Clientele" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>Some of Our Clients</h2>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-12">
                        <div id="scroller2" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img src="images/" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                        </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller2" data-slide="prev"><i class="icon-angle-left text-center"></i></a>
                        <a class="btn btn-danger" href="#scroller2" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    </div>                    
                    <p class="gap"></p>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Protech gas Ltd is a medical health care delivery support services company establish in 2001 and duly incorporated with the corporate Affairs Commission (CAC) in 2009 to providing value added services driven by a team of multi-disciplinary and highly experienced professionals.</p>                    
                </div><!--/.col-md-3-->                
                <div class="col-md-3 col-sm-6  text-center">
                    <h4>(Head Office) Abuja Address</h4>
                    <address class="">
                        Suite 205, His Glory plaza, Ose Close,<br>
                        Off Ademola Adetokunbo-Crescent,<br>
                        Wuse 2, Abuja-FCT, Nigeria <br>
                        <i class="icon-mbile-phone"> (+234) 802-729-3995</i><br>
                        <i class="icon-mbile-phone"> (+234) 803-725-8827</i><br>
                         <i class="icon-envelope"> hopecenter@gmail.com</i>
                    </address>
                </div> <!--/.col-md-3-->
                <div class="col-md-3 col-sm-6  text-center">
                    <h4>Lagos Address</h4>
                    <address>
                        61, Bode Thomas street,<br>
                        Surulere, Lagos,<br>
                        Nigeria <br>
                        <i class="icon-mbile-phone"> (+234) 803-454-6709</i><br>
                        <i class="icon-mbile-phone"> (+234) 080-296-7780</i>
                    </address>
                    <address>
                        <h4>Benin Address</h4>
                        60,Sapele Road,<br>
                        Benin City,<br>
                        Edo State.
                    </address>
                </div>

                <div id="social-media" class="col-md-3 col-sm-6  text-center">
                    <h4>Find Us on Social Media</h4>
                    <ul class="list-unstyled btn-group">
                        <li class=""><a href=""><i class="icon-facebook btn btn-default"> Facebook</i></a>
                        </li>
                        <li><a href=""><i class="icon-twitter btn btn-default btn-md"> Twitter</i></a>
                        </li>
                        <li><a href=""><i class="icon-linkedin btn btn-default btn-md"> LinkedIn</i></a>
                        </li>
                    </ul>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
    </div><!-- container end -->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a href="" title="Protech Gas Ltd">Protech Gas Ltd</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="products.html">Products</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#">
                        <i class="icon-home"></i> <i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>