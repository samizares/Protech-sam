@extends('layouts.page')
@section('title')
Welcome to ProtechGas Homepage | Protech Gas Ltd
@stop
<!-- Start Navigation List -->
@section('content')
<ul class="nav navbar-nav navbar-right">
 <li><a class="active" href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
<li><a href="/about">About Us <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="/about#mission">Mission</a></li>
     <li><a href="/about#vision">Vision</a></li>
     <li><a href="/about#services">Services</a></li>
 </ul></a></li>
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
 <!-- Start HomePage Slider -->

<section id="home"> 
  <!-- Carousel -->
  <div id="main-slide" class="carousel slide" data-ride="carousel">

     <!-- Indicators -->
     <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
        <li data-target="#main-slide" data-slide-to="3"></li>
        <li data-target="#main-slide" data-slide-to="4"></li>
    </ol><!--/ Indicators end-->

    <!-- Carousel inner -->
    <div class="carousel-inner">
     <div class="item active">
        <img class="img-responsive" src="{{asset('images/slider/bg1.jpg') }}" alt="slider">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated2 white"><span>Our <strong>Mission</strong></span></h2>
            <h3 class="animated3 white"><span>To Redefine Healthcare System</span></h3>
            <p class="slider-bg animated2 center-block"></p>
          </div>
</div>
</div><!--/ Carousel item end -->
<div class="item">
  <img class="img-responsive" src="{{asset('images/slider/bg2.jpg') }}" alt="slider">
  <div class="slider-content">
    <div class="col-md-12 text-center">
      <h2 class="animated5 white">
        <span><strong>How?</strong></span>
    </h2>
    <h3 class="animated4 white"><span>By providing seamless health care facilities installation</span></h3>       
    <p class="animated6 white"><a href="#" class="slider btn btn-default btn-large">Learn how</a></p>
    <p class="slider-bg animated2 center-block"></p>        
</div>
</div>
</div><!--/ Carousel item end -->
<div class="item">
  <img class="img-responsive" src="{{asset('images/slider/bg3.jpg')}}" alt="slider">
  <div class="slider-content">
    <div class="col-md-12 text-center">
      <h2 class="animated7 white">
        <span><strong>Together</strong></span>
    </h2>
    <h3 class="animated8 white">
     <span>We Can CHANGE Healthcare System</span>
 </h3>      
 <div class="">
  <a class="animated4 slider btn btn-default btn-large btn-min-block" href="#">Product Gallery</a>
  <a class="animated4 slider btn btn-default btn-min-block" href="#">Projects</a>
</div>
<p class="slider-bg animated2 center-block"></p> 
</div>
</div>
</div><!--/ Carousel item end -->
<div class="item">
  <img class="img-responsive" src="{{asset('images/slider/bg4.jpg') }}" alt="slider">
</div><!--/ Carousel item end -->
<div class="item">
  <img class="img-responsive" src="{{asset('images/slider/bg5.jpg') }}" alt="slider">
</div><!--/ Carousel item end -->
</div><!-- Carousel inner end-->

<!-- Controls -->
<a class="left carousel-control" href="#main-slide" data-slide="prev">
   <span><i class="fa fa-angle-left"></i></span>
</a>
<a class="right carousel-control" href="#main-slide" data-slide="next">
   <span><i class="fa fa-angle-right"></i></span>
</a>
</div><!-- /carousel -->        
</section>
<!-- End HomePage Slider -->

<div id="content">
<div class="container">
      
      <!-- Start Services Icons -->
    <div class="row">        
      <!-- Start Big Heading -->
          <div class="big-title text-center animated fadeIn delay-02">
            <h1>We are <strong>Protech Gas Ltd</strong></h1>
            <p class="title-desc">Specialist in Medical Equipment, Gas Plant and Pipeline Solutions</p>
          </div>
          <!-- End Big Heading -->
        <div class="row">
             <!-- Start Service Icon 1 -->
            <div class="col-md-4 col-sm-6 service-box service-center
                  animated fadeIn delay-03" data-animation="fadeIn" data-animation-delay="03">
              <div class="service-boxed">
                  <div class="service-icon" style="margin-top:-25px;">
                    <i class="fa fa-rocket icon-medium-effect icon-effect-2"></i>
                  </div>
                  <div class="service-content">
                    <h4>Our Mission</h4>
                    <p>We aim to become a one-stop entity for only standard quality 
                      healthcare equipment and solutions, while ensuring prompt and budget friendly services.</p>
                  </div>
              </div>
            </div>
            <!-- End Service Icon 1 -->
            <!-- Start Service Icon 1 -->
            <div class="col-md-4 col-sm-6 service-box service-center
                animated fadeIn delay-04" data-animation="fadeIn" data-animation-delay="04">
              <div class="service-boxed">
                  <div class="service-icon" style="margin-top:-25px;">
                    <i class="fa fa-eye icon-medium-effect icon-effect-2"></i>
                  </div>
                  <div class="service-content animated fadeIn delay-01">
                    <h4>Our Vision</h4>
                    <p>Redefining the standard of medical health delivery services in Nigeria and across Africa.</p>
                  </div>
              </div>
            </div>
            <!-- End Service Icon 1 --><!-- Start Service Icon 1 -->
            <div class="col-md-4 col-sm-6 service-box service-center
                animated fadeIn delay-05" data-animation="fadeIn" data-animation-delay="05">
              <div class="service-boxed">
                  <div class="service-icon" style="margin-top:-25px;">
                    <i class="fa fa-cogs icon-medium-effect icon-effect-2"></i>
                  </div>
                  <div class="service-content">
                   <h4>Our Services</h4>
                   <div class="text-left">
                    <p><i class="fa fa-check-square-o"></i> Manufacture of medical and industrial gases.</p>
                    <p><i class="fa fa-check-square-o"></i> Designing & installation of medical gas pipeline system.</p>
                    <p><i class="fa fa-check-square-o"></i> Supply & installation of laboratory gas systems.</p>
                    <p><i class="fa fa-check-square-o"></i> Procurement & installation of medical equipment.</p>
                   </div>
                    <br>
                    <!-- Button in Center -->
                    <p class="text-center"><a href="/about#services" class="btn-system btn-small border-btn"><i class="icon-brush"></i> Read more</a></p>
                  </div>
              </div>
            </div>
        </div>
            <!-- End Service Icon 1 -->
    </div>
    <!-- End Services Icons -->

      <!-- Divider -->
      <div class="hr1 margin-top"></div>
       
       
       
       <!-- Start Recent Projects Carousel -->
				<div class="recent-projects">
					<h4 class="title"><span>Recent Projects</span></h4>
					<div class="projects-carousel touch-carousel">
						
						<div class="portfolio-item item">
							<div class="portfolio-border">
								<div class="portfolio-thumb">
									<a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/gen-hosp-delta.jpg') }}">
										<div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
										<img alt="" src="{{asset('images/projects/gen-hosp-delta.jpg') }}" />
									</a>
								</div>
								<div class="portfolio-details">
									<a href="#">
										<h4>KOKO GENERAL HOSPITAL</h4>
										<span>DELTA STATE</span>
									</a>
								</div>
							</div>
						</div>	
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/army-hosp-kaduna.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/army-hosp-kaduna.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>44 ARMY REFERENCE HOSPITAL</h4>
                    <span>KADUNA STATE</span>
                  </a>
                </div>
              </div>
            </div> 
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/obi-jackson2.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/obi-jackson2.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>OBI-JACKSON CHILDREN HOSPITAL</h4>
                    <span>OKIJA</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/obi-jackson.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/obi-jackson.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>OBI-JACKSON CHILDREN HOSPITAL</h4>
                    <span>OKIJA</span>
                  </a>
                </div>
              </div>
            </div> 
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/navy-calabar.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/navy-calabar.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>NIGERIAN NAVY HOSPITAL CALABAR</h4>
                    <span>CROSS RIVER STATE</span>
                  </a>
                </div>
              </div>
            </div> 
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/lasuth-lagos.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/lasuth-lagos.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>LASUTH</h4>
                    <span>LAGOS STATE</span>
                  </a>
                </div>
              </div>
            </div>  
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/fmc-keffi.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/fmc-keffi.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>FEDERAL MEDICAL CENTRE</h4>
                    <span>KEFFI STATE</span>
                  </a>
                </div>
              </div>
            </div>  
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/gen-hosp-warri.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/gen-hosp-warri.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>WARRI GENERAL HOSPITAL</h4>
                    <span>DELTA STATE</span>
                  </a>
                </div>
              </div>
            </div>  
            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/projects/uniben.jpg') }}">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="{{asset('images/projects/uniben.jpg') }}" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>UNIVERSITY OF BENIN - UNIBEN</h4>
                    <span>EDO STATE</span>
                  </a>
                </div>
              </div>
            </div> 					
					</div>
          <!-- Divider -->
          <div class="hr1" style="margin-bottom:30px;"></div>
          
          <!-- Button in Center -->
          <p class="text-center"><a href="projects.html" class="btn-system btn-medium border-btn"><i class="icon-brush"></i> View Full Portfolio</a></p>
				</div>
				<!-- End Recent Projects Carousel -->

<!-- Divider -->
<div class="hr1 margin-60"></div>

<!-- Start Full Width Section 3 Products Gallery-->
      <div class="recent-projects">
            <h4 class="title"><span>Featured Products</span></h4>
            <div class="projects-carousel touch-carousel">
              
              <!-- Start Project Item 1-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/AGSS-Plant.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/AGSS-Plant.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>AGSS PLANT</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
              <!-- Start Project Item 2-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/area-alarm.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/area-alarm.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>AREA ALARM</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
              <!-- Start Project Item 3-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/bed-head-panel.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/bed-head-panel.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>BED HEAD PANEL</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
              <!-- Start Project Item 4-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/CEILO-CEILING-MOUNTED.bmp') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/CEILO-CEILING-MOUNTED.bmp') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>CEILO CEILING MOUNTED</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
              <!-- Start Project Item 5-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/copper-fittings.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/copper-fittings.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>COPPER FITTINGS</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
              <!-- Start Project Item 6-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/Gas-station.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/Gas-station.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>GAS STATION</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
              <!-- Start Project Item 7-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/ID-TAPE.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/ID-TAPE.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>ID TAPE</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
              <!-- Start Project Item 8-->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/medical-gas-cylinder.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/medical-gas-cylinder.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>MEDICAL GAS CYLINDER</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item 9-->
              <!-- Start Project Item -->
              <div class="portfolio-item item">
                <div class="portfolio-border">
                  <!-- Start Project Thumb -->
                  <div class="portfolio-thumb">
                    <a class="lightbox" data-lightbox-type="ajax" href="{{asset('images/products/nist-tee-assembly.jpg') }}">
                      <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                      <img alt="" src="{{asset('images/products/nist-tee-assembly.jpg') }}" />
                    </a>
                  </div>
                  <!-- End Project Thumb -->
                  <!-- Start Project Details -->
                  <div class="portfolio-details">
                    <a href="#">
                      <h4>NIST TEE ASSEMBLY</h4>
                    </a>
                  </div>
                  <!-- End Project Details -->
                </div>
              </div>
              <!-- End Project Item -->
            </div>
            <!-- Divider -->
            <div class="hr1" style="margin-bottom:30px;"></div>
            <!-- Button in Center -->
          <p class="text-center"><a href="projects.html" class="btn-system btn-medium border-btn"><i class="icon-brush"></i> View Product Gallery</a></p>
          </div>
<!-- End Full Width Section 3 -->

<!-- Divider -->
<div class="hr1 margin-60"></div>



<div class="row">
   <div class="col-md-9">
     <!-- Start Clients Carousel -->
     <div class="our-clients">
        
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Our Partners</span></h4>
        
        <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="4">
          
          <!-- Client 1 -->
          <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/COMEN.jpg') }}" alt="" /></a>
        </div>
        
        <!-- Client 2 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/dodhys.png') }}" alt="" /></a>
        </div>
        
        <!-- Client 3 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/gas-arc.bmp') }}" alt="" /></a>
        </div>
        
        <!-- Client 4 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/gazcon.jpg') }}" alt="" /></a>
        </div>
        
        <!-- Client 5 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/LM.bmp') }}" alt="" /></a>
        </div>
        
        <!-- Client 6 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/MATACHANA.png') }}" alt="" /></a>
        </div>
        
        <!-- Client 7 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/penlon.bmp') }}" alt="" /></a>
        </div>
        
        <!-- Client 8 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/precision.bmp') }}" alt="" /></a>
        </div>

        <!-- Client 9 -->
        <div class="client-item item">
            <a href="#"><img src="{{asset('images/partners/vision-air.png') }}" alt="" /></a>
        </div>
        
    </div>
</div>
<!--End Clients Carousel-->
</div>
<div class="col-md-3">
   <h4 class="classic-title"><span>Partners We Work With</span></h4>
   <p>Our partners are the best within the industry and we work with them to ensure continued delivery of high quality healthcare and medical supplies to our clients. </p>
</div>
</div>

</div>
</div>
@stop
