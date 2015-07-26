@extends('app')

@section('content')

<h1>Create a new article</h1>

{!! Form::open(['url' => 'articles']) !!}
   
 @include('articles._form', ['submitButtonText' => 'Add Article'])

{!! Form::close() !!}

@include('errors.list')

@stop