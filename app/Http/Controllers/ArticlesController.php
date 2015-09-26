<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Auth;





class ArticlesController extends Controller
{
	public function index(){

		$posts = Article::latest('published_at')->published()->get();
		return view('articles.index')->with('posts', $posts);

	}

	public function create(){

	   $tags = \App\Tag::lists('name', 'id');

       return view('articles.create')->with('tags', $tags);
	}

	public function show(Article $article){
       

       return view('articles.show')->with('article', $article);

	}

	public function store(ArticleRequest $request){
        
        $this->createArticle($request);

		\Session::flash('flash_message', "Your article has been created");

        return redirect('articles');
   
	}	

	public function edit(Article $article)

	{

		$tags = Tag::lists('name', 'id');

		return view('articles.edit', compact('article', 'tags'));
	}

	public function update(Article $article, ArticleRequest $request)

	{

		$article->update($request->all());

		$this->syncTags($article, $request->input('tag_list'));

		return redirect('articles');
	}


		private function syncTags(Article $article, array $tags)
	{
		$article->tags()->sync($tags);

	}
    

         private function createArticle(ArticleRequest $request)
    {
    	Auth::user()->articles()->create($request->all());

		$this->syncTags($article, $request->input('tag_list'));

		return $article;
    }
}








