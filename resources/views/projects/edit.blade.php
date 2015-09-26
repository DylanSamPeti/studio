@extends('app');

@section('content')

  <h1>Edit: {{ $project->title }} </h1>

  {!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]]) !!}

   @include('articles._form', ['submitButtonText' => 'Update Project'])

{!! Form::close() !!}

@include('errors.list')

@stop

