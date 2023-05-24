<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	
	Route::get('/', 'IndexController@index');
	
	Route::post('login', 'IndexController@postLogin');
	Route::get('logout', 'IndexController@logout');
	 
	Route::get('dashboard', 'DashboardController@index');
	
	Route::get('profile', 'AdminController@profile');	
	Route::post('profile', 'AdminController@updateProfile');	
	Route::post('profile_pass', 'AdminController@updatePassword');
	
	Route::get('settings', 'SettingsController@settings');	
	Route::post('settings', 'SettingsController@settingsUpdates');
	Route::post('sections_settings', 'SettingsController@sections_settings');
	Route::post('headfootupdate', 'SettingsController@headfootupdate');

	Route::get('sections', 'SectionsController@sections');	
	Route::post('service_section', 'SectionsController@service_section');
	Route::post('about_section', 'SectionsController@about_section');
	Route::post('portfolio_section', 'SectionsController@portfolio_section');
	Route::post('achivement_section', 'SectionsController@achivement_section');
	Route::post('team_section', 'SectionsController@team_section');
	Route::post('features_section', 'SectionsController@features_section');
	Route::post('testimonials_section', 'SectionsController@testimonials_section');
	Route::post('why_choose_section', 'SectionsController@why_choose_section');
	Route::post('our_clients_section', 'SectionsController@our_clients_section');
	Route::post('contact_section', 'SectionsController@contact_section');
 

	Route::get('sliders', 'SlidersController@sliders');		
	Route::get('sliders/addslider', 'SlidersController@addeditaddslider'); 
	Route::get('sliders/editslider/{slider_id}', 'SlidersController@editslider');	
	Route::post('sliders/addslider', 'SlidersController@addnew');
	Route::get('sliders/delete/{slider_id}', 'SlidersController@delete');

	Route::get('services', 'ServicesController@services');		
	Route::get('services/addservice', 'ServicesController@addeditaddservice'); 
	Route::get('services/editservice/{service_id}', 'ServicesController@editservice');	
	Route::post('services/addservice', 'ServicesController@addnew');
	Route::get('services/delete/{service_id}', 'ServicesController@delete');

	Route::get('categories', 'CategoriesController@categories');		
	Route::get('categories/addcategory', 'CategoriesController@addeditCategory'); 
	Route::get('categories/addcategory/{cat_id}', 'CategoriesController@editCategory');	
	Route::post('categories/addcategory', 'CategoriesController@addnew');
	Route::get('categories/delete/{cat_id}', 'CategoriesController@delete');

	Route::get('portfolio', 'PortfolioController@portfolio');		
	Route::get('portfolio/addportfolio', 'PortfolioController@addeditaddportfolio'); 
	Route::get('portfolio/editportfolio/{portfolio_id}', 'PortfolioController@editportfolio');	
	Route::post('portfolio/addportfolio', 'PortfolioController@addnew');
	Route::get('portfolio/delete/{portfolio_id}', 'PortfolioController@delete');

	Route::get('team', 'TeamController@team');		
	Route::get('team/addteam', 'TeamController@addeditaddteam'); 
	Route::get('team/editteam/{team_id}', 'TeamController@editteam');	
	Route::post('team/addteam', 'TeamController@addnew');
	Route::get('team/delete/{team_id}', 'TeamController@delete');

	Route::get('testimonials', 'TestimonialsController@testimonials');		
	Route::get('testimonials/addtestimonials', 'TestimonialsController@addeditaddtestimonials'); 
	Route::get('testimonials/edittestimonials/{testimonial_id}', 'TestimonialsController@edittestimonials');	
	Route::post('testimonials/addtestimonials', 'TestimonialsController@addnew');
	Route::get('testimonials/delete/{testimonial_id}', 'TestimonialsController@delete');

	Route::get('whychoose', 'WhyChooseController@whychoose');		
	Route::get('whychoose/addwhychoose', 'WhyChooseController@addeditaddwhychoose'); 
	Route::get('whychoose/editwhychoose/{whychoose_id}', 'WhyChooseController@editwhychoose');	
	Route::post('whychoose/addwhychoose', 'WhyChooseController@addnew');
	Route::get('whychoose/delete/{whychoose_id}', 'WhyChooseController@delete');  
	
	Route::get('clients', 'OurClientsController@clients');		
	Route::get('clients/addclients', 'OurClientsController@addeditclients'); 
	Route::get('clients/editclients/{clients_id}', 'OurClientsController@editclients');	
	Route::post('clients/addclients', 'OurClientsController@addnew');
	Route::get('clients/delete/{clients_id}', 'OurClientsController@delete');

	Route::get('users', 'UsersController@userslist');	
	Route::get('users/adduser', 'UsersController@addeditUser');	
	Route::post('users/adduser', 'UsersController@addnew');	
	Route::get('users/adduser/{id}', 'UsersController@editUser');	
	Route::get('users/delete/{id}', 'UsersController@delete');	
 
});

Route::get('/', 'IndexController@index');

  


// Password reset link request routes...
Route::get('admin/password/email', 'Auth\PasswordController@getEmail');
Route::post('admin/password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('admin/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('admin/password/reset', 'Auth\PasswordController@postReset');

Route::post('contact_send', 'IndexController@contact_send');

 

 
