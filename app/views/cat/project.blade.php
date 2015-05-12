@extends('layouts.page')
@section('title')
Project Categories Page | Protech Gas Ltd
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
            <h2>Project Categories</h2>
            <p>See all project categories</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Project Categories</li>
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
        <h1>Protechgas Project Admin Panel</h1><hr>
        @if (Session::has('message'))
                    <p class="alert">{{ Session::get('message') }}</p>
                @endif

    <p>Here you can view, delete, and create new Projects.</p><hr>

    <table class="table">
      <caption>Protechgas Project Lists</caption>
        <thead>
          <tr>
            <th>Projects Name(No space)</th>
            <th>Projects Title(Add space)</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($projcat as $category)

      <tr>
              <td>{{ $category->name }}</td>
              <td>{{ $category->title }}</td>

              <td>{{ Form::open(array('url'=>'admin/projects/destroy', 'class'=>'form-inline')) }}
          {{ Form::hidden('id', $category->id) }}
          {{ Form::submit('delete') }}
          {{ Form::close() }}</td>
         </tr>
      @endforeach
      </tbody>
      </table>


    <h2>Create New Project</h2><hr>

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

    {{ Form::open(array('url'=>'admin/projects/create')) }}
    <p>
      {{ Form::label('name') }}
      {{ Form::text('name') }}
    </p>
    <p>
      {{ Form::label('title') }}
      {{ Form::text('title') }}
    </p>
    {{ Form::submit('Create Project', array('class'=>'secondary-cart-btn')) }}
    {{ Form::close() }}
  </div>
  <div class=" col-md-5">

    <p>{{ HTML::link('admin/projects/p/newprojectphoto', 'Add photo to Project', array('class'=>'default-btn')) }}
    </p>

    <p>{{ HTML::link('admin/projects/', 'See All products', array('class'=>'default-btn')) }}
    </p>

  </div>
</div>
</div></div></div><!-- end admin -->


@stop