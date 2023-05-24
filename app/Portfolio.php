<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';

    protected $fillable = ['cat_id', 'name','image'];


	public $timestamps = false;
 
	 
}
