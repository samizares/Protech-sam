@extends('layouts.master')
@section('title')
Contact Page | Protech Gas Ltd
@stop

@section('content')

<!-- Start Navigation List -->
<ul class="nav navbar-nav navbar-right">
 <li><a href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
<li><a href="/about">About Us <span class="caret"></span></a> 
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
  <li><a class="active" href="/contacts">Contact</a></li>
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
            <h2>Contact US <i class="fa fa-book"></i></h2>
            <p>We have branches strategically located accross Nigeria in addition to an online presence.</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
<!-- Start Map -->
    <div style="overflow:hidden;height:215px;width:100%;">
      <div id="gmap_canvas" style="height:415px;width:100%;"></div>
      <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
      <a class="google-map-code" href="http://www.trivoo.net/google-maps/" id="get-map-data">google maps</a>
    </div>
<!-- End Map -->

<!-- Start Content -->
<div id="content">
  <div class="container">
    <div class="page-content">
      <div class="row">
        <div class="col-md-8">
        
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Email Us</span></h4>
        
        <!-- Start Contact Form -->
    <form role="form" class="contact-form" id="contact-form" method="post">
    <div class="form-group">
    <div class="controls">
    <input type="text" placeholder="Name" name="name">
    </div>
    </div>
    <div class="form-group">
    <div class="controls">
    <input type="email" class="email" placeholder="Email" name="email">
    </div>
    </div>
    <div class="form-group">
    <div class="controls">
    <input type="text" class="requiredField" placeholder="Subject" name="subject">
    </div>
    </div>

    <div class="form-group">

    <div class="controls">
    <textarea rows="7"  placeholder="Message" name="message"></textarea>
    </div>
    </div>
    <button type="submit" id="submit" class="btn-system btn-large">Send</button><div id="success" style="color:#34495e;"></div>
    </form>
        <!-- End Contact Form -->
        
      </div>
      
      <div class="col-md-4">
        
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Head Office - Abuja</span></h4>
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:10px;"></div>        
        <!-- Info - Icons List -->
        <ul class="icons-list">
          <li><i class="fa fa-map-marker">  </i> <strong>Address:</strong><br> 
                Suite 205, His Glory plaza, Ose Close,<br>
                Off Ademola Adetokunbo-Crescent,<br>
                Wuse 2, Abuja-FCT, Nigeria.
          </li>
          <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> hopecenter@gmail.com</li>
          <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> (+234) 802-729-3995 | (+234) 803-725-8827</li>
        </ul>
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:15px;"></div>
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Lagos Office</span></h4>
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:10px;"></div>        
        <!-- Info - Icons List -->
        <ul class="icons-list">
          <li><i class="fa fa-map-marker">  </i> <strong>Address:</strong><br> 
                9 Balogun Street,off Taiwo Close, <br>
                Oregun - Aluasa , Ikeja, Lagos, <br>
                Nigeria.
          </li>
          <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> (+234) 809-585-5382</li>
        </ul>
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:15px;"></div>
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Benin Address</span></h4>        
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:10px;"></div>        
        <!-- Info - Icons List -->
        <ul class="icons-list">
          <li><i class="fa fa-map-marker">  </i> <strong>Address:</strong><br> 
                60,Sapele Road,<br>
                        Benin City,
                        Edo State.
          </li>
        </ul>
      </div>
      
    </div>
      </div>
    </div>
    
  </div>  
</div>
<!-- End Content -->

@stop