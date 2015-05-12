@extends('layouts.page')
@section('title')
Products Page | Protech Gas Ltd
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
            <h2>Product Photos</h2>
            <p>See all Projects and their galleries</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Projects</li>
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
         <div class="col-md-8">
          <h2>Project Admin Panel</h2><hr>
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

    <table class="table">
      <caption>Project gallery Table</caption>
        <thead>
          <tr>
            <th>Images</th>
            <th>Name</th>
            <th>Project</th>
            <th>Admin</th>
            <th>Edit</th>
            <th>Delete</th>
            
          </tr>
        </thead>
        <tbody>
          @if($projects)
          @foreach($projects as $project)
            <tr>
              <td>{{ HTML::image($project->image, $project->name, array('width'=>'50')) }}</td>
              <td>{{ $project->name }}</td>
              <td>{{ $project->category->name}} </td>
              <td>{{ $project->user->first_name}} </td>
              <td>{{ Form::open(array('url'=>'admin/projects/p/edit', 'class'=>'form-inline','method'=>'get')) }}
                  {{ Form::hidden('id', $project->id) }}
                  {{ Form::submit('Edit') }}
                  {{ Form::close() }} </td>
              
              <td>{{ Form::open(array('url'=>'admin/projects/p/destroy', 'class'=>'form-inline')) }}
                  {{ Form::hidden('id', $project->id) }}
                  {{ Form::submit('Delete') }}
                  {{ Form::close() }} </td>
              
              </tr>
           @endforeach
           @endif
      </tbody>
      </table>

  
  </div> 

<div class="col-md-4">
        

      <p>{{ HTML::link('admin/projects/p/newprojectphoto', 'Add New Project Photo  ', array('class'=>'default-btn')) }}
      </p>
      <p>{{ HTML::link('admin/projects/', 'Create New Projects', array('class'=>'default-btn')) }}
      </p>
      <p>{{ HTML::link('admin/signout/', 'Sign out', array('class'=>'default-btn')) }}
      </p>
    </div>
</div></div>
</div></div>

@stop