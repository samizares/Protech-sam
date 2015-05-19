@extends('layouts.page')
@section('title')
Product Categories Page | Protech Gas Ltd
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
            <h2>Product Categories</h2>
            <p>See all product categories</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Product Categories</li>
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

        <h1>Product Categories Admin Panel</h1><hr>
        @if (Session::has('message'))
                    <p class="alert">{{ Session::get('message') }}</p>
                @endif

    <p>Here you can view, delete, and create new Product categories.</p>

    <h2>Product Categories</h2><hr>

    <table class="table">
      <caption>Product Categories Table</caption>
        <thead>
          <tr>
            <th>Categories Name(No space)</th>
            <th>Categories Title(Add space)</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>

      @foreach($prodcat as $category)

      <tr>
              <td>{{ $category->name }}</td>
              <td>{{ $category->title }}</td>

              <td>{{ Form::open(array('url'=>'admin/cat/products/destroy', 'class'=>'form-inline')) }}
          {{ Form::hidden('id', $category->id) }}
          {{ Form::submit('delete') }}
          {{ Form::close() }}</td>
         </tr>
      @endforeach
      </tbody>
      </table>
    

    <h2>Create New Product Category</h2><hr>

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

    {{ Form::open(array('url'=>'admin/cat/products/create')) }}
    <p>
      {{ Form::label('name') }}
      {{ Form::text('name') }}
    </p>
    <p>
      {{ Form::label('title') }}
      {{ Form::text('title') }}
    </p>
    {{ Form::submit('Create Product Category', array('class'=>'secondary-cart-btn')) }}
    {{ Form::close() }}
  </div>

  <div class=" col-md-5">
    <p>{{ HTML::link('admin/products/newproduct', 'Create New Product', array('class'=>'default-btn')) }}
    </p>
    <p>{{ HTML::link('admin/products/', 'See All products', array('class'=>'default-btn')) }}
    </p>

  </div>

</div>
</div></div></div><!-- end admin -->


@stop