@extends('layouts.page')

@section('title')
Welcome to our Testimonials Page | Protech Gas Ltd
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
<li><a href="/downloads">Downloads</a></li>
<li><a class="active" href="/testimonials">Testimonials</a></li>
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
            <h2>Success Stories <i class="fa fa-book"></i></h2>
            <p>Read about contracts we have been awarded and successfully completed the projects.</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Success Stories</li>
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
        <div class="col-md-8" style="overflow-y: scroll;height:400px;">
          <ul class="list-unstyled border-bttm">
            <li class="classic-testimonials">
              <div class="testimonial-author">Client - <span>University of Benin Teaching Hospital (UBTH)</span></div>
              <div class="testimonial-content">
                <p> <span>Supply and installation of Oxygen & Medical Air Terminal Unit
                    for new Intensive Unit and Accidents & Emergency Unit.</span></p>
              </div>
            </li>
            <li class="classic-testimonials">
              <div class="testimonial-author">Client - <span>University of Benin Teaching Hospital (UBTH)</span></div>
              <div class="testimonial-content">
                <p> <span> Installation of Medical Gas Pipeline System (MGPS) for main theatre.</span></p>
              </div>
            </li>
            <li class="classic-testimonials">
              <div class="testimonial-author">Client - <span>University of Benin Teaching Hospital (UBTH)</span></div>
              <div class="testimonial-content">
                <p><span> Installation of Medical Gas Pipeline System (MGPS) for A1 and A3 wards.</span></p>
              </div>
            </li>
            <li class="classic-testimonials">
              <div class="testimonial-author">Client - <span>Delta State University, Oghara</span></div>
              <div class="testimonial-content">
                <p><span> Designing, Supply & Installation of comprehensve Medical Gas Pipeline System (MGPS).</span></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <figure>
            <img src="{{asset('images/icons/dart.png') }}" alt="" class="img-responsive center-block">
          </figure>
        </div>
      </div>
    </div>
    
  </div>  
</div>
<!-- End Content -->
@stop