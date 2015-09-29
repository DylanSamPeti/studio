@extends('projects/header')

@section('content')

<div class="container">


@if(count($posts))

 @foreach ($posts as $project)
  
    <div class="row">
		<div class="title">
			<h1>Projects</h1>
		</div>
	</div>

	<div class="row">
		<div class="breadcrumb">{{ "Home / " . Request::path() }}</div>
	</div>

	<div class="row">
	   <div class="col-md-6">
			<div class="post archieve-post">
			    <div class="row">
                    <div class="post-image" style="background-image: url('{{ Request::root() . $project->thumbnail_path }}')">
			    		<div class="post-image-overlay"></div>
		  <div class="post-image-icon" style="background-image: url('{{ Request::root() . $project->thumbnail_icon_path }}')"></div>
			    	</div>
			    </div>
				
				<div class="row">
				  
				  <div class="row col-md-6">
				    <div class="post-title">{{ $project->title }}</div>
				  </div>
				  
				  <div class="col-md-6 post-date-box" style="padding-right: 0;">
				    <div class="post-date">{{ date('d-m-Y') }}</div>
				  </div>
                    
				</div>
                 
                <div class="row">
				 <div class="row col-md-12">
					<div class="post-tags">
						@foreach($project->tags as $tag)
                          <h5>{{ $tag->name }}</h5>
                        @endforeach
					</div>
				   </div>
				  </div>
				
                <div class="row">
				  <div class="row post-content">
				    <div class="col-md-12">
				    	<p>{!! ($project->body) !!}</p>
				    </div>
				  </div>
				</div>
				
				<div class="row">
				  <div class="post-readmore"><a href="{{ action('ProjectsController@show', [$project->id] ) }}" class="btn-primary">Read More</a></div>
				</div>

			</div>
		</div>
	</div>
 </div>

 @endforeach

@endif

@stop