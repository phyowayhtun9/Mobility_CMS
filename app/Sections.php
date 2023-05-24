<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $table = 'sections';

    protected $fillable = ['section_name_service', 'section_service_title', 'section_service_desc','section_name_about','section_about_title','section_about_desc','section_about_image','section_name_portfolio','section_portfolio_title'];

 
	
	 public $timestamps = false;
    
}
