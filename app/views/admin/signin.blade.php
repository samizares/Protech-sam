@extends('layouts.page')

@section('title')
Signin Page | Protech Gas Ltd
@stop

@section('content')
<ul class="nav navbar-nav navbar-right">
 <li><a class="active" href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
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
            <h2>Login Page</h2>
            <p>Login an Admin</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Admin Login</li>
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
         <div class="col-md-5">

        <h1>I have an admin account</h1>
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
        {{ Form::open(array('url'=>'admin/signin')) }}
            <div class='form-group'>
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
            {{ Form::button('Sign In', array('type'=>'submit', 'class'=>'btn-system btn-large')) }}
        {{ Form::close() }}
    </div>

    
    <div class="col-md-7">
        <h2>I'm a new Admin</h2>
        <h3>You can create an account in just a few simple steps.<br>
            Click below to begin.</h3>

        {{ HTML::link('admin/newaccount', 'CREATE NEW ACCOUNT', array('class'=>'btn-system btn-large')) }}
    </div>
    </div>
</div></div></div>

@stop