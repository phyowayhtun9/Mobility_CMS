<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');                      
            $table->string('section_name_service');
            $table->string('section_service_title');
            $table->text('section_service_desc');
            $table->string('section_name_about');
            $table->string('section_about_title');
            $table->text('section_about_desc');
            $table->string('section_about_image');
            $table->string('section_name_portfolio');
            $table->string('section_portfolio_title');
            $table->string('section_name_achivement');
            $table->string('section_achivement_title');
            $table->string('section_achivement_block1_icon');
            $table->string('section_achivement_block1_number');
            $table->string('section_achivement_block1_title');
            $table->string('section_achivement_block2_icon');
            $table->string('section_achivement_block2_number');
            $table->string('section_achivement_block2_title');
            $table->string('section_achivement_block3_icon');
            $table->string('section_achivement_block3_number');
            $table->string('section_achivement_block3_title');
            $table->string('section_achivement_block4_icon');
            $table->string('section_achivement_block4_number');
            $table->string('section_achivement_block4_title');
            $table->string('section_name_team');
            $table->string('section_team_title');
            $table->text('section_team_desc');
            $table->string('section_name_features');
            $table->string('section_features_title');
            $table->text('section_features_desc');
            $table->string('section_features_image');
            $table->string('section_features1_icon');
            $table->string('section_features1_title');
            $table->text('section_features1_desc');
            $table->string('section_features2_icon');
            $table->string('section_features2_title');
            $table->text('section_features2_desc');
            $table->string('section_features3_icon');
            $table->string('section_features3_title');
            $table->text('section_features3_desc');
            $table->string('section_features4_icon');
            $table->string('section_features4_title');
            $table->text('section_features4_desc');
            $table->string('section_features5_icon');
            $table->string('section_features5_title');
            $table->text('section_features5_desc');
            $table->string('section_features6_icon');
            $table->string('section_features6_title');
            $table->text('section_features6_desc');
            $table->string('section_name_testimonials');
            $table->string('section_testimonials_title');
            $table->string('section_name_whychoose');
            $table->string('section_whychoose_title');
            $table->string('section_our_client_title');
            $table->string('section_name_contact');
            $table->string('section_contact_title');
            $table->text('section_contact_address');
            $table->string('section_contact_email1');
            $table->string('section_contact_email2');
            $table->string('section_contact_phone1');
            $table->string('section_contact_phone2');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sections');
    }
}
