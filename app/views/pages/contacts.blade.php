@extends('layouts.page')

@section('title')
Contact Page | Protech Gas Ltd
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
<li><a href="/works">Our Works <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="works#projects">Projects</a></li>
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

        {{Form::open(array('method' =>'post','url'=>'/contacts', 'class'=>'contact-form', 'id'=>'contact-form'))}}

    <!--   <form role="form" class="contact-form" id="contact-form" method="post" action="./contact">  -->

        <div id="success-container" class="text-center" style="display:none;">
          <p class="lead text-success"><span class="glyphicon glyphicon-ok"></span></p>
          <p class="lead">Your message has been sent successfully!</p>
        </div>
        
        <!-- Start Contact Form -->
    <div id="form-container">

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
      <div class="form-group">
        <div class="col-md-8 text-right" id="spin-area">
         <button type="submit" class="btn-system btn-large" id="btn-send">Send</button>
        </div>
      </div>
    </div>
    {{form::close()}}
 </div>
        <!-- End Contact Form -->
        
      
      
      <div class="col-md-4">
        
        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Head Office - Abuja</span></h4>
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:10px;"></div>        
        <!-- Info - Icons List -->
        <ul class="icons-list">
          <li><i class="fa fa-map-marker">  </i> <strong>Address:</strong><br> 
                Suite 40,1st Floor, Nandu Plaza,<br>
                Plot 566, Ndola Crescent off Micheal Opara Street,<br>
                Wuse Zone 5, Abuja Nigeria.
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
                185,Sapele Road,<br>
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

@section('script')
<script type="text/javascript" src="{{asset('js/humane.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/spin.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/jquery.spin.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript"> 
        function init_map(){
          var myOptions = {zoom:14,center:new google.maps.LatLng(9.059723, 7.454943),
            mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), 
              myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(9.059723, 7.454943)});
            infowindow = new google.maps.InfoWindow({content:"<b>Protech Gas Ltd (HQ)</b><br/>Suite 40,1st Floor, Nandu Plaza,Plot 566, Ndola Crescent off Micheal Opara Street,Wuse Zone 5, Abuja"  });
            google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
      </script>

    <script type="text/javascript"> 
    $(function() {
        var contactForm = $('#contact-form');
        var spinArea = $('#spin-area'); // Retrieve DOM element
        var formContainer = $('#form-container');
        var successContainer= $('#success-container');

       contactForm.submit(function(e){
         e.preventDefault();
        spinArea.spin('large'); // Attach the spinner
        $.ajax({
            type: "POST",
            url: contactForm.attr('action'),
            data: contactForm.serialize(),
            dataType: "json"
    })
    .done(function(response) {
    if (response.errors) {
    humane.log(response.errors,{ addnCls: 'humane-flatty-error'});
    } else {
    humane.log('Message sent',{ addnCls: 'humane-flatty-success'});
    successContainer.fadeIn();
    formContainer.slideUp();

    }

    })
    .fail(function () {
          humane.log('An error has occured, please try again',{ addnCls: 'humane-flatty-error'});
    })
    .always(function() {
    spinArea.spin(false); // Remove the spinner
    });
    });

 });
      </script>
@stop
