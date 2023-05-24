<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';

    protected $fillable = ['site_name', 'site_email', 'site_logo', 'site_favicon','site_description','site_header_code','site_footer_code','facebook_url','linkedin_url','twitter_url','pinterest_url','google_plus_url','site_copyright'];

 
	
	 public $timestamps = false;
    
}
