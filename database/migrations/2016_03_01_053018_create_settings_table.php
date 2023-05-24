<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('site_style');               
            $table->string('site_name');             
            $table->string('site_email');
            $table->string('site_logo');
            $table->string('site_favicon');
            $table->string('site_description');
            $table->text('site_header_code');
            $table->text('site_footer_code');
            $table->string('site_copyright');                        
            $table->string('facebook_url');
            $table->string('linkedin_url');
            $table->string('twitter_url');
            $table->string('pinterest_url');
            $table->string('google_plus_url');
            $table->integer('service_section');
            $table->integer('about_section');
            $table->integer('portfolio_section');
            $table->integer('achivement_section');
            $table->integer('team_section');
            $table->integer('features_section');
            $table->integer('testimonials_section');
            $table->integer('whychoose_section');
            $table->integer('our_clients_section');
            $table->integer('contact_us_section');
             
            
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
