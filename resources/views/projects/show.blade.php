@extends('projects/header')

@section('content')


<div class="row single-post">

<div class="post-image" style="background-image: url('{{ Request::root() . $project->thumbnail_path }}')">
	<div class="single-post-banner-title">
		<h1>{{ $project->title }}</h1>
		<h3>An Interactive Film Project</h3>
   		<div class="post-image-overlay"></div>
	</div>
</div>

 <div class="container">




    <div class="row col-md-10 col-md-offset-1">
	    <div class="row">
				  
		    <div class="col-md-6">
		    	<h2 class="post-title">OVERVIEW</h2>
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
				      {!! $project->body !!}
				    
				    </div>
				  </div>
			</div>

    </div>
  </div>
 </div>


 


@include('projects/footer')
@stop