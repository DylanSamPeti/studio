@extends('projects/header')

@section('content')

<div class="container">
  <div class="row">
  	<div class="title">
  		<h1>Create Project</h1>
  	</div>
  </div>

  <div class="row">
{!! Form::open(['url' => 'projects']) !!}
   
 @include('projects._form', ['submitButtonText' => 'Add project'])

{!! Form::close() !!}


@include('errors.list')

</div>

@stop