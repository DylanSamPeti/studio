@extends('projects/header')

@section('content')

<div class="container">


@if(count($posts))

  @foreach ($posts as $project)

  <h2>{{ $project->title }}</h2>

  @endforeach

@endif



	<div class="row">
		<div class="title">
			<h1>PROJECTS</h1>
		</div>
	</div>

	<div class="row">
		<div class="breadcrumb">{{ "Home / " . Request::path() }}</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="post">
			<div class="row">
				<div class="post-image">
					<div class="post-image-overlay"></div>
					<div class="post-image-icon"></div>
				</div>
			</div>
				<div class="row">
				  <div class="col-md-6">
				    <div class="post-title">Level Lounge</div>
				  </div>
				  <div class="col-md-6" style="padding-right: 0;">
				    <div class="post-date">{{ date('d-m-Y') }}</div>
				  </div>
                    <div class="col-md-12">
					<div class="post-tags">Interactive Video | Transmedia </div>
					</div>
		
				</div>
				
                <div class="row">
				  <div class="post-content">
				  <div class="col-md-12">
				  	<p>Level Lounge is an interactive film project, exploring diversifying perspectives 
				  	of event participants. The video experience aims at not only the development of the 
				  	subjects but the development of the viewer, through video interaction. This offers the
				  	viewer a rich digital experience of an event without participating. </p>
				  	</div>
				  </div>
				</div>
				<div class="row">
				  <div class="post-readmore"><a class="btn-primary">Read More</a></div>
				</div>

			</div>
		</div>
	</div>
</div>

@stop