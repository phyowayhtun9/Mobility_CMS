<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    protected $fillable = ['name', 'designation','image','facebook_url','twitter_url','linkedin_url','gplus_url'];


	public $timestamps = false;
 
	 
}
