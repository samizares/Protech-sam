<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Protech Gas</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
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
                <a class="navbar-brand" href="{{URL::to('/')}}"><img width="130" height="50" src="{{asset('images/logo4.png')}}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li class="active"><a href="{{URL::to('/about')}}">About Us</a></li>
                    <li><a href="{{URL::to('/products')}}">Products</a></li>
                    <li><a href="{{URL::to('/projects')}}">Projects</a></li>
                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>About Us</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Who we are</h2>
                <p>Protech gas Ltd is a medical health care delivery support services company establish in 2001 and duly incorporated with the corporate Affairs Commission (CAC) in 2009 to providing value added services driven by a team of multi-disciplinary and highly experienced professionals.</p>
                <p>The company's passion for excellence has necessitated its quest on the strategic areas of installation, maintenance and supplies of Medical Gas Pipeline System (MGPS) and other medical industrial equipments</p>
                <p>The company is a major vendor to Siemens, Philips e.t.c, and the sole representation to Gazcom Oxygen generators,Precision UK and Comen medical instrument ltd.</p>
                <p>Protech gas Ltd is aimed at redefining the standard of medical health delivery services in Nigeria and across Africa. We have been working around the clock to ensuring that health institutions get the best up to date health care delivery equipment</p>
            </div><!--/.col-sm-6-->
            <div class="col-sm-6">
                <h2>We Design, Supply, Install and provide Maintenence Services for the following Product lines:</h2>
                <div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span>Medical Gas Pipeline System (MGPS)</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span>Oxygen & Medical Air Units</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span>X-Rays Units</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span>Water Treatment Plants</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span>Industrial Pumps</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50" style="width: 100%;">
                            <span>General Hospital Equipments</span>
                        </div>
                    </div>
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->

        <div class="gap"></div>
        <h1 class="center">Meet the Team</h1>
        <p class="lead center">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <div class="gap"></div>

        <div id="meet-the-team" class="row">
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="{{asset('images/team-member.jpg')}}" alt="" ></p>
                    <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="{{asset('images/team-member.jpg')}}" alt="" ></p>
                    <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="{{asset('images/team-member.jpg')}}" alt="" ></p>
                    <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-3 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="{{asset('images/team-member.jpg')}}" alt="" ></p>
                    <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>
        </div><!--/#meet-the-team-->
    </section><!--/#about-us-->

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

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a href="" title="Protech Gas Ltd">Protech Gas Ltd</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="{{URL::to('/products')}}">Products</a></li>
                        <li><a href="{{URL::to('/about')}}">About Us</a></li>
                        <li><a href="{{URL::to('/contact')}}">Contact Us</a></li>
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