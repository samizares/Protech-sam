@extends('layouts.master')

@section('title')
Welcome to our Works Page | Protech Gas Ltd
@stop
<!-- Start Navigation List -->
@section('content')
<ul class="nav navbar-nav navbar-right">
 <li><a href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
<li><a href="/about">About Us <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="/about#mission">Mission</a></li>
     <li><a href="/about#vision">Vision</a></li>
     <li><a href="/about#services">Services</a></li>
 </ul></a></li>
<li><a class="active" href="">Our Works <span class="caret"></span></a> 
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
            <h2>Our Works</h2>
            <p>We deliver top quality projects and products to our clients. </p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a></li>
              <li>Our Works</li>
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
        <div id="categories" class="col-md-3">
          <div class="accordion">
            <ul class="nav nav-pills nav-stacked accordion-tab" role="tablist">
              <li><h3 class="tab-pane-title">PRODUCT GALLERY</h3>
                <ul class="list-unstyled">
                	@if($prodcats)
                	  @foreach($prodcats as $prodcat )
                  <li><a href="#{{$prodcat->name}}" data-toggle="tab" role="tab">{{$prodcat->name}}</a></li>
                   @endforeach
            	     @endif
                </ul>
              </li>
              <li><h3 class="tab-pane-title">PROJECT GALLERY</h3>
                <ul class="list-unstyled">
                	@if($projcats)
                	  @foreach($projcats as $projcat )
                	 <li><a href="#{{$projcat->name}}" data-toggle="tab" role="tab">{{$projcat->name}}</a></li> 
                	 @endforeach
            	     @endif
         		</ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <!-- PRODUCTS -->
            @if($prodcats)
                	  @foreach($prodcats as $prodcat )
            <div class="tab-pane active" id="{{$prodcat->name}}">
              <h3 class="text-center well"> {{$prodcat->name }} Product Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                	@foreach($prodcat->products as $product)
                	
                  <li>
                    <img src="{{$product->image}}" alt="this is it" />
                    <div class="portfolio-item-content">
                      <span class="header">{{$product->name}}</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="{{$product->image}}"><i class="fa fa-camera more"></i></a>
                  </li>
              @endforeach
                </ul>
              </div>
            </div>
            @endforeach
            	     @endif
            

            
  
            <!--PROJECTS 44 ARMY -->
            <div class="tab-pane" id="44army">
              <h3 class="text-center well">44 Army Reference Hospital, Kaduna - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- FMC -->
            <div class="tab-pane" id="fmc">
              <h3 class="text-center well">Federal Medical Centre, Keffi - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- KGH -->
            <div class="tab-pane" id="kgh">
              <h3 class="text-center well">Koko General Hospital, Delta state - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- LASUTH -->
            <div class="tab-pane" id="lasuth">
              <h3 class="text-center well">Lagos State University Teaching Hospital - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- NNH -->
            <div class="tab-pane" id="nnh">
              <h3 class="text-center well">Nigeria Navy Hospital, Calabar - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- OBI -->
            <div class="tab-pane" id="obi">
              <h3 class="text-center well">Obi-Jackson Children's Hospital, Okija - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- UBTH -->
            <div class="tab-pane" id="ubth">
              <h3 class="text-center well">University Of Benin Teaching Hospital(UBTH), Benin City - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- WARRIGH -->
            <div class="tab-pane" id="warrigh">
              <h3 class="text-center well">Warri General Hospital, Delta State - Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul id="portfolio-list" data-animated="fadeIn">
                  <li>
                    <img src="images/products/area-alarm.jpg" alt="" />
                    <div class="portfolio-item-content">
                      <span class="header">AREA ALARM</span>
                      <p class="body"></p>
                    </div>
                    <a class="lightbox" data-lightbox-type="ajax" href="images/products/area-alarm.jpg"><i class="fa fa-camera more"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>  
</div>
@stop