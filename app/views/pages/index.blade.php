@extends('layouts.page')

@section('header')
<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    {{ HTML::image('images/logo4.png', 'logo', array('width'=>130,'height'=>50)) }}
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/projects">Projects</a></li>
                    <li><a href="/contacts">Contact</a></li>
                </ul>
            </div>
        </div>

@stop
@section('content')

<div class="container">
    @include('includes.slider')

    @include('includes.recent')

    @include('includes.client')

    @include('includes.address')
    </div><!-- container end -->

@stop