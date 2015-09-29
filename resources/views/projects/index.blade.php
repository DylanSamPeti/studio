@extends('projects/header')

@section('content')

<div class="container">


@if(count($posts))

  
		<div class="title">
			<h1>Projects</h1>
		</div>



		<div class="breadcrumb">{{ "Home / " . Request::path() }}</div>


<div class="row">
 @foreach ($posts as $project)
 
	

	
	   <div class="col-md-6">
			<div class="post archieve-post">
	
           <div class="post-image" style="background-image: url('{{ Request::root() . $project->thumbnail_path }}')">
			    		<div class="post-image-overlay"></div>
		  <div class="post-image-icon" style="background-image: url('{{ Request::root() . $project->thumbnail_icon_path }}')"></div>
			    	</div>
	
				
				<div class="row">
				  
				  <div class="col-md-6">
				    <div class="post-title">{{ $project->title }}</div>
				  </div>
				  
				  <div class="col-md-6 post-date-box" style="">
				    <div class="post-date">{{ date('d-m-Y') }}</div>
				  </div>
                    
				</div>
                 
     
				 <div class="row col-md-12">
					<div class="post-tags">
						@foreach($project->tags as $tag)
                          <h5>{{ $tag->name }}</h5>
                        @endforeach
					</div>
				   </div>
	
				
           
				  <div class="row post-content">
				    <div class="col-md-12">
				    	<p>{!! str_limit($project->body, 350) !!}</p>
				    </div>
				  </div>
			
				
		
				  <div class="post-readmore"><a href="{{ action('ProjectsController@show', [$project->id] ) }}" class="btn-primary">View More</a></div>
	

			</div>
		</div>



@endforeach

 </div>
 	</div>

@endif
@include('projects/footer')
@stop

