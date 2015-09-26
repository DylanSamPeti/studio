<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Get the articles associated with the given tag
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */


class ProjectTag extends Model
{

	protected $fillable = [ 
     'name'
     ];


    public function ProjectTag()
    {
    	return $this->belongsToMany('App\Project');
    }
}
