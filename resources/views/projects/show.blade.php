@extends('projects/header')

@section('content')


 <div class="container">
  <div class="single-post">

    
        <div class="post-image" style="background-image: url('{{ Request::root() . $project->thumbnail_path }}')">
	        <div class="post-image-overlay"></div>
	        <div class="post-image-icon" style="background-image: url('{{ Request::root() . $project->thumbnail_icon_path}} ')"></div>
	    </div>

    <div class="row col-md-10 col-md-offset-1">
	    <div class="row">
				  
		    <div class="col-md-6">
		      <div class="post-title">{{ $project->title }}</div>
		    </div>
		    
		    <div class="col-md-6 post-date-box">
		      <div class="post-date">{{ date('d-m-Y') }}</div>
		    </div>
                    
		</div>

		<div class="row">
		<div class="col-md-12">
		   <div class="post-tags">
		       @foreach($project->tags as $tag)
                  <h5>{{ $tag->name }}</h5>
               @endforeach
		   </div>
		     </div>
		   </div>

		   <div class="row">
				  <div class="post-content">
				    <div class="col-md-12">
				    	<p>{{ $project->body }}</p>
				    </div>
				  </div>
			</div>

    </div>
  </div>
 </div>


 



@stop