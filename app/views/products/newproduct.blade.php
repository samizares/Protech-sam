@extends('layouts.page')
@section('title')
Create New Products Page | Protech Gas Ltd
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
            <h2>Create product</h2>
            <p></p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>create product form</li>
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
         <h1>Create New product</h1><hr>

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

     {{Form::open(array('url'=>'admin/products/create','files'=> true)) }}
    <p>
      {{ Form::label('prodcat_id', 'Product Category') }}
      {{ Form::select('prodcat_id', $prodcats) }}
    </p>
      <p>
      {{Form::label('Product Name')}}
      {{Form::text('name')}}
    </p>

    <p>
        {{Form::label('Product Description')}}
        {{Form::textarea('description')}}
    </p>

    <p>
      {{ Form::label('image', 'Choose an image') }}
      {{ Form::file('image') }}
    </p>

    {{ Form::submit('Create Product', array('class'=>'secondary-cart-btn')) }}
    {{ Form::close() }}

    

  
  </div> 

<section id="signup">
        

    
      <p>{{ HTML::link('admin/cat/products/', 'Create New Product Categories', array('class'=>'default-btn')) }}
      </p>
      <p>{{ HTML::link('admin/signout/', 'Sign out', array('class'=>'default-btn')) }}
      </p>
    </section>
</div></div>
</div></div>

@stop