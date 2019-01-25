@extends('layouts.app')

@section('title', 'Page Title')

@section('header')
      @include('components.header')
@endsection


@section('content')
<div class="container">
    <nav class="navbar navbar-default">1</nav>
    <div class="row main_content">
        <div class="col-md-4">{{$printer->['0']->path}}</div>
        <div class="col-md-8">2</div>
    </div>

</div>


@endsection
