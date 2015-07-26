<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Get the articles associated with the given tag
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */


class Tag extends Model
{

	protected $fillable = [ 
     'name'
     ];


    public function articles()
    {
    	return $this->belongsToMany('App\Article');
    }
}
