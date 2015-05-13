@extends('layouts.page')

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
                	@if($prodcatnav)
                	  @foreach($prodcatnav as $prodcat )
                  <li><a href="#{{{$prodcat->name}}}" data-toggle="tab" role="tab">{{{$prodcat->name}}}</a></li>
                  @endforeach
                  @endif
                </ul>
              </li>

              <li><h3 class="tab-pane-title">PROJECT GALLERY</h3>
                <ul class="list-unstyled">
                  @if($projcatnav)
                    @foreach($projcatnav as $projcat )
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
            @if($prodcatnav)
              @foreach($prodcatnav as $prodcat)
                   
            <div class="tab-pane" id="{{{$prodcat->name}}}">
              <h3 class="text-center well"> {{$prodcat->title }} Product Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul class="portfolio-items col-4">
                	@foreach($prodcat->products as $product)

                <li class="portfolio-item">
                <div class="item-inner">
                    <img src="{{{$product->image}}}" alt="{{$product->name}}">
                    <h5>{{$product->name}}</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{$product->image}}" rel="prettyPhoto" title="{{{$product->description}}}">
                        <i class="icon-eye-open"></i></a>
                                     
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
                	
              @endforeach
                </ul>
              </div>
            </div>
            @endforeach
            	     @endif

            <!-- PROJECTS -->
            @if($projcatnav)
              @foreach($projcatnav as $projcat)
                   
            <div class="tab-pane" id="{{{$projcat->name}}}">
              <h3 class="text-center well"> {{$projcat->title }} Project Gallery</h3>
              <div class="portfolio-page portfolio-4column">
                <ul class="portfolio-items col-4">
                  @foreach($projcat->photos as $product)

                <li class="portfolio-item">
                <div class="item-inner">
                    <img src="{{{$product->image}}}" alt="{{$product->name}}">
                    <h5>{{$product->name}}</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="{{$product->image}}" rel="prettyPhoto" title="{{{$product->description}}}">
                        <i class="icon-eye-open"></i></a>
                                     
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
                  
              @endforeach
                </ul>
              </div>
            </div>
            @endforeach
                   @endif

            <div class="tab-pane active" id="Mobilife">
              <h3 class="text-center well"> Mobilife Product Gallery</h3>
                <div class="portfolio-page portfolio-4column">
                  <ul class="portfolio-items col-4">
                   <li class="portfolio-item">
                      <div class="item-inner">
                     {{ HTML::image('images/products/mobi-front-gas.jpg', 'mobile life') }}
                     <h5>Mobile Life Full Front View</h5>
                      <div class="overlay">
                        <a class="preview btn btn-danger" href="{{asset('images/products/mobi-front-gas.jpg')}}" rel="prettyPhoto" 
                        title="Protechgas introduces Mobile-life, a mobile oxygen carrier for hospitals for easy transportation to different wards">
                        <i class="icon-eye-open"></i></a>
                      </div>
                    </div>           
                  </li><!--/.portfolio-item-->

                  <li class="portfolio-item">
                    <div class="item-inner">
                    {{ HTML::image('images/products/mobi-side.jpg', 'mobile life') }}
                     <h5>Mobile Life Side View</h5>
                      <div class="overlay">
                        <a class="preview btn btn-danger" href="{{asset('images/products/mobi-side.jpg')}}" rel="prettyPhoto" 
                        title="Side view of Mobile-life. Protechgas introduces Mobile-life, a mobile oxygen carrier for hospitals for easy transportation to different wards">
                        <i class="icon-eye-open"></i></a>
                      </div>
                    </div>           
                  </li><!--/.portfolio-item-->

                  <li class="portfolio-item">
                    <div class="item-inner">
                    {{ HTML::image('images/products/mobi-back.jpg', 'mobile life') }}
                     <h5>Mobile Back Front View</h5>
                      <div class="overlay">
                        <a class="preview btn btn-danger" href="{{asset('images/products/mobi-back.jpg')}}" rel="prettyPhoto" 
                        title="Back view of Mobile-life. Protechgas introduces Mobile-life, a mobile oxygen carrier for hospitals for easy transportation to different wards">
                        <i class="icon-eye-open"></i></a>
                      </div>
                    </div>           
                  </li><!--/.portfolio-item-->

                  <li class="portfolio-item">
                    <div class="item-inner">
                    {{ HTML::image('images/products/mobi-front.jpg', 'mobile life') }}
                     <h5>Mobile Life Front View</h5>
                      <div class="overlay">
                        <a class="preview btn btn-danger" href="{{asset('images/products/mobi-front.jpg')}}" rel="prettyPhoto" 
                        title="Front view of Mobile-life without the oxygen gas attach. Protechgas introduces Mobile-life, a mobile oxygen carrier for hospitals for easy transportation to different wards">
                        <i class="icon-eye-open"></i></a>
                      </div>
                    </div>           
                  </li><!--/.portfolio-item-->
            
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