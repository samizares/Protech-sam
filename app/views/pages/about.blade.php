@extends('layouts.page')
@section('title')
About Us | Protech Gas Ltd
@stop

@section('content')

<!-- Start Navigation List -->
<ul class="nav navbar-nav navbar-right">
 <li><a href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
<li><a class="active" href="/about">About Us <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="/about#mission">Mission</a></li>
     <li><a href="/about#vision">Vision</a></li>
     <li><a href="/about#services">Services</a></li>
 </ul></li>
<li><a href="/works">Our Works <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="/works#projects">Projects</a></li>
     <li><a href="/works#products">Products</a></li>
 </ul>
</li>
  <li><a href="/downloads">Downloads</a></li>
  <li><a href="/testimonials">Testimonials</a></li>
  <li><a href="/contacts">Contact</a></li>
</ul>
<!-- End Navigation List -->
</div>
</div>
</div>
<!-- End Header ( Logo & Naviagtion ) -->

</header>
<!-- End Header -->
<!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>About Us</h2>
            <p>We deliver on our promise</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

<!-- Start Content -->
<div id="content">
  <div class="container">
    <div class="page-content">
      <div class="row">
            
            <div class="col-md-7">
              
              <!-- Classic Heading -->
              <h4 class="classic-title"><span>About<span class="strong"> Protech Gas Ltd</span></span></h4>
              
              <!-- Some Text -->
              <p>Protech Gas Ltd is a medical health care delivery support services company establish in 2001 and
               duly incorporated with the corporate Affairs Commission (CAC) in 2009 to providing value added services
                driven by a team of multi-disciplinary and highly experienced professionals.</p>
              <p>The company's passion for excellence has necessitated its quest on the strategic areas of installation,
               maintenance and supplies of medical gas equipment, pipeline systems and medical/industrial equipment.</p>
              
            </div>
            
            <div class="col-md-5"> 
              
              <!-- Start Touch Slider -->
              <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                <div class="item"><img alt="" src="{{asset('images/aboutus/1.jpg') }}"></div>
                <div class="item"><img alt="" src="{{asset('images/aboutus/2.jpg') }}"></div>
                <div class="item"><img alt="" src="{{asset('images/aboutus/3.jpg') }}"></div>
              </div>
              <!-- End Touch Slider -->
              
            </div>
      </div>
      
      <!-- Divider -->
      <div class="hr1" style="margin-bottom:50px;"></div>

      <div class="row">
        <ul class="col-md-3 nav nav-pills nav-stacked">
          <li class="active"><a href="#mission" data-toggle="tab"><i class="fa fa-rocket"></i> Our Mission</a></li>
          <li><a href="#vision" data-toggle="tab"><i class="fa fa-eye"></i> Our Vision</a></li>
          <li><a href="#services" data-toggle="tab"><i class="fa fa-cogs"></i> Our Services</a></li>
        </ul>
        <div class="col-md-9">
          <div class="tab-content">
            <div id="mission" class="tab-pane fade active in">
              <div class="row">
              <h3 class="text-center">Our Mission</h3>
              <p class="col-md-6">We aim to become a one-stop entity for only standard quality 
                      healthcare equipment and solutions, while ensuring prompt and budget friendly services.</p>
              <p class="col-md-6">
                <img class="img-responsive" src="{{asset('images/icons/Icon-mission.png') }}" alt="">
              </p>
              </div>
            </div>
            <div id="vision" class="tab-pane fade in">
              <div class="row">
                <h3 class="text-center">Our Vision</h3>
                <div class="col-md-6">
                  <p>To continue to profer only quality and affordable healthcare equipment and medical gas pipeline solutions to our esteemed clients.</p>
                </div>
                <div class="col-md-6">
                  <img class="img-responsive" src="{{asset('images/aboutus/Business-Vision.png') }}" alt="">
                </div>
              </div>
            </div>
            <div id="services" class="tab-pane fade in">
              <div class="row">
                <h4 class="text-center">Our Services</h4>
                <div class="col-md-6">
                  <div class="text-left">
                    <p><i class="fa fa-check-square-o"></i> Manufacture of medical and industrial gases.</p>
                    <p><i class="fa fa-check-square-o"></i> Designing & installation of medical gas pipeline system.</p>
                    <p><i class="fa fa-check-square-o"></i> Supply & installation of laboratory gas systems.</p>
                    <p><i class="fa fa-check-square-o"></i> Procurement & installation of medical equipment.</p>
                    <p><i class="fa fa-check-square-o"></i> Design & manufacture of industrial and agro-allied machineries.</p>
                    <p><i class="fa fa-check-square-o"></i> Sales, supplies and installation of Electrical/Electronic materials, spare parts, industrial/domestic items and other accesories.</p>
                    <p><i class="fa fa-check-square-o"></i> Servicing and maintenance of medical equipment</p>
                    <p><i class="fa fa-check-square-o"></i> Technical training and service support systems. </p>
                   </div>
                </div>
                <div class="col-md-6">
                  <img class="img-responsive" src="{{asset('images/aboutus/Services.png') }}" alt="">
                </div>
              </div>                   
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>  
</div>
<!-- End Content -->
@stop