<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';

    protected $fillable = ['service_title', 'service_text','service_icon'];


	public $timestamps = false;
 
	 
}
