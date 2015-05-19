@extends('layouts.page')
@section('title')
Project Categories Page | Protech Gas Ltd
@stop

@section('content')
@include('includes.admin-menu')
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
</div></div></div><!-- end admin -->


@stop