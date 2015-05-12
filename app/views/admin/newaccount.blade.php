@extends('layouts.master')

@section('title')
create New Admin Page | Protech Gas Ltd
@stop

@section('content')
<ul class="nav navbar-nav navbar-right">
 <li><a class="active" href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
<li><a href="/about">About Us <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="/about#mission">Mission</a></li>
     <li><a href="/about#vision">Vision</a></li>
     <li><a href="/about#services">Services</a></li>
 </ul></li>
<li><a href="">Our Works <span class="caret"></span></a> 
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
<!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>New Admin Page</h2>
            <p>Create New Admin account</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li> New Admin account</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

  <div id="content">
  <div class="container">
    <div class="page-content">
      <div class="row">
         <div class="col-md-7">


		<h1>Create New Account</h1>
		@if (Session::has('message'))
                    <p class="alert">{{ Session::get('message') }}</p>
                @endif
                
		@if($errors->has())
		<div id="form-errors">
			<p>The following errors have occurred:</p>

			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><!-- end form-errors -->
		@endif

		{{ Form::open(array('url'=>'admin/create'), array('class'=>'form-inline')) }}

		<div class="control-group">
			{{ Form::label('firstname','', array('class'=>'control-label')) }}
			<div class="controls">
				{{ Form::text('firstname') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('lastname','', array('class'=>'control-label')) }}
			<div class="controls">
				{{ Form::text('lastname') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('username','', array('class'=>'control-label')) }}
			<div class="controls">
				{{ Form::text('username') }}
			</div>
		</div>	

		<div class= "control-group">
			{{ Form::label('email', '', array('class'=>'control-label')) }}
			<div class="controls">
				{{ Form::text('email') }}
			</div>
		</div>
		<div class= "control-group">
			{{ Form::label('password') }}
			<div class="controls">
				{{ Form::password('password') }}
			</div>
		</div>
		<div class= "control-group">
			{{ Form::label('password_confirmation') }}
			<div class="controls">
				{{ Form::password('password_confirmation') }}
			</div>
		</div>
		
		{{ Form::submit('CREATE NEW ACCOUNT', array('class'=>'btn btn-primary')) }}
		{{ Form::close() }}

	    </div>
	    <div class="col-md-5">
	    	<h2>I have an Admin Account</h2>
        <h3>Click below to login with our Admin login details</h3>

        {{ HTML::link('admin/signin', 'Admin Login', array('class'=>'btn-system btn-large')) }}
	</div>
	</div></div>
</div></div>

@stop