<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurClients extends Model
{
    protected $table = 'clients';

    protected $fillable = ['name', 'image','url'];


	public $timestamps = false;
 
	 
}
