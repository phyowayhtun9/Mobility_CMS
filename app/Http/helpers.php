<?php
use App\Settings;
use App\Sections;
 

 
if (! function_exists('getcong')) {

    function getcong($key)
    {
    	 
        $settings = Settings::findOrFail('1'); 

        return $settings->$key;
    }
}

if (! function_exists('getcong_service')) {

    function getcong_service($key)
    {
    	 
        $sections = Sections::findOrFail('1'); 

        return $sections->$key;
    }
}


if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        $path = explode('.', $path);
        $segment = 2;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return ' active';
    }
}

 