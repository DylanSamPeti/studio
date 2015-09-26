<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $fillable = [
     
     'title',
     'body',
     'thumbnail_path',
     'thumbnail_icon_path',
     'published_at',
     'user_id'

    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {

    	$query->where('published_at', '<=', Carbon::now());

    }

    public function setPublishedAtAttribute($date) 
    {
    
     $this->attributes['published_at'] = Carbon::parse($date);

    }
    //The article belongs to the user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get the tags associated with the given article.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    
    // public function tags()
    // {
    //     return $this->belongsToMany('App\ProjectTag')->withTimestamps();
    // }

     /**
     * Get a list of tag ids accociated with the article
     *
     * @return array
     */ 

    public function getTagListAttribute()
    {
        return $this->tags()->lists('id')->all();
    }

}
