@extends('app')

@section('content')

 @if(count($posts))
 
   @foreach ($posts as $article) 

     <a href="{{ action('ArticlesController@show', [$article->id] ) }}"> <h2 class="title">{{ $article->title }}</h2> </a>

     <div class="body">{{ $article->body }}</div>


   @endforeach

 @endif



@stop