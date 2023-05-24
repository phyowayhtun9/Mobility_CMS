<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table = 'sliders';

    protected $fillable = ['slider_title', 'slider_sub_title','slider_image'];


	public $timestamps = false;
 
	 
}
