@extends('/projects/header')

@section('content')
<div class="container">
  <div class="row">
    <div class="title">
     <h1>Edit: {{ $project->title }} </h1>
    </div>
   </div>

  <div class="row">
  {!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]]) !!}

   @include('projects._form', ['submitButtonText' => 'Update Project'])

{!! Form::close() !!}

@include('errors.list')

@stop

