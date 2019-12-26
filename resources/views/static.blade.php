@extends('layouts.base')
@section('content')

<!-- Page Heading/Breadcrumbs -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Главная</a>
      </li>
      <li class="breadcrumb-item active">{{$obj->name}}</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
	<div class="col-md-12">
	{!!$obj->body!!}
	</div>
    </div>
    
@endsection