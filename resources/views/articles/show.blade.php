@extends('app')

@section('content')

     <a href=""> <h2 class="title">{{ $article->title }}</h2> </a>

     <div class="body">{{ $article->body }}</div>
     
     @unless ($article->tags->isEmpty())

     <h2>Tags</h2>
     @foreach($article->tags as $tag)
       <p><strong>{{ $tag->name }}</strong></p>
     @endforeach

     @endunless



@stop