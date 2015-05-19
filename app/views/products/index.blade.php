@extends('layouts.page')
@section('title')
Products Page | Protech Gas Ltd
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

  
  


</div></div>
</div></div>

@stop