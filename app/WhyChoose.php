<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhyChoose extends Model
{
    protected $table = 'whychoose';

    protected $fillable = ['title', 'description'];


	public $timestamps = false;
 
	 
}
