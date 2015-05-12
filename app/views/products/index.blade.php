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
            <h2>Product List</h2>
            <p>See all products</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Products</li>
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
          <h2>Product Admin Panel</h2><hr>
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
      <caption>Product Table</caption>
        <thead>
          <tr>
            <th>Images</th>
            <th>Name</th>
            <th>Category</th>
            <th>Admin</th>
            <th>Delete</th>
            
          </tr>
        </thead>
        <tbody>
          @if($products)
          @foreach($products as $product)
            <tr>
              <td>{{ HTML::image($product->image, $product->name, array('width'=>'50')) }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->category->name}} </td>
              <td>{{ $product->user->first_name}} </td>
              <td>{{ Form::open(array('url'=>'admin/products/destroy', 'class'=>'form-inline')) }}
                  {{ Form::hidden('id', $product->id) }}
                  {{ Form::submit('delete') }}
                  {{ Form::close() }} </td>
              
              </tr>
           @endforeach
           @endif
      </tbody>
      </table>

  
  </div> 

<section id="signup">
        

      <p>{{ HTML::link('admin/products/newproduct', 'Create New Product', array('class'=>'default-btn')) }}
      </p>
      <p>{{ HTML::link('admin/cat/products/', 'Create New Product Categories', array('class'=>'default-btn')) }}
      </p>
      <p>{{ HTML::link('admin/signout/', 'Sign out', array('class'=>'default-btn')) }}
      </p>
    </section>
</div></div>
</div></div>

@stop