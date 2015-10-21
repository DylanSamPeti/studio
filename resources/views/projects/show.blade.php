@extends('projects/header')

@section('content')



  <div class="modal fade bs-example-modal-lg featured-video" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

       <div class="modal-content">
       	   <iframe id="embed_iframe" src="https://v.interlude.fm/embed/95664fa0-6e65-11e4-b280-fd949b525de2/default?auto_play=false" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>
       </div>

  </div>




   <div class="row single-post">
   
      <div class="post-image" style="background-image: url('{{ Request::root() . $project->thumbnail_path }}')">
      <div class="post-image-strip"><h1>{{ $project->title }}</h1></div>
      	<div class="single-post-banner-title">
      		
      		
           </div>
         		<div class="post-image-overlay"></div>
      </div>
   </div>

 <div class="container">
    <div class="row col-md-10 col-md-offset-1">
	    <div class="row">
				  
		    <div class="col-md-6">
		    	<h2 class="post-title">GAIA EXPERIMENTATAL VIDEO</h2>
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