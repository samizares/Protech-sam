@extends('layouts.page')

@section('title')
Welcome to our Download Page | Protech Gas Ltd
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
<li><a href="">Our Works <span class="caret"></span></a> 
  <ul class="dropdown">
      <li><a href="/works#projects">Projects</a></li>
     <li><a href="/works#products">Products</a></li>
 </ul>
</li>
<li><a class="active" href="/downloads">Downloads</a></li>
<li><a href="/testimonials">Testimonials</a></li>
<li><a href="/contacts">Contact</a></li>
</ul>
<!-- End Navigation List -->
</div>
</div>
</div>
<!-- End Header ( Logo & Naviagtion ) -->

</header>

<!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Downloads <i class="fa fa-download"></i></h2>
            <p>Download our product catalogs and other documents here. </p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Downloads</li>
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
        <div class="col-md-8 downloads">
          <h4 class="classic-title"><span>Click the button links below to download our product catalogs</span></h4>
          <ul class="list-unstyled border-bttm">
            <li>
             <div class="row">
              <div class="col-md-1 hidden-xs"><span class="download-num">1</span></div>
              <div class="col-md-9 col-xs-9"><span class="download-title">Mobilife Catalog</span></div>
              <div class="col-md-2 col-xs-3"><span class="download-btn pull-right">
                <a class="btn-system btn border-btn" href="/downloads/mobilife.pdf" 
                target="_blank" download>
                <span class="hidden-xs">Download</span>
                  <i class="fa fa-download"></i></a></span></div>
             </div>
            </li>
            <li>
             <div class="row">
              <div class="col-md-1 hidden-xs"><span class="download-num">2</span></div>
              <div class="col-md-9 col-xs-9"><span class="download-title">PGL Catalog</span></div>
              <div class="col-md-2 col-xs-3"><span class="download-btn pull-right">
                <a class="btn-system btn border-btn" href="/downloads/pgl-catalog.pdf" 
                target="_blank" download>
                <span class="hidden-xs">Download</span>
                  <i class="fa fa-download"></i></a></span></div>
             </div>
            </li>
          </ul>
          
          </div>
        <div class="col-md-4 hidden-xs">
          <span class="download-img center-block" style="background: ">
          <i class="fa fa-download fa-img"></i></span>
        </div>
      </div>
    </div>
    
  </div>  
</div>
<!-- End Content -->
@stop