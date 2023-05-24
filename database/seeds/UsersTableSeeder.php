<?php

use App\Events\Inst;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // Create admin account
        DB::table('users')->insert([
            'usertype' => 'Admin',
            'first_name' => 'John',
            'last_name' => 'Deo',            
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'image_icon' => 'admin-965bf2e0f3108983112bb705d2db4304',
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        // Create Default Settings
        DB::table('settings')->insert([  
            'site_style' => 'style_blue.css',       
            'site_name' => 'Mobility CMS',             
            'site_email' => 'admin@admin.com',
            'site_logo' => 'logo.png',
            'site_favicon' => 'favicon.png',
            'site_description' => 'Mobility CMS Script is one page template is fully responsive, creative, clean, and multipurpose with very elegant appearance and web design styles.',
            'site_copyright' => 'Copyright © 2016 Mobility CMS Script. All Rights Reserved.', 
            'facebook_url' => '#',
            'linkedin_url' => '#',
            'twitter_url' => '#',
            'pinterest_url' => '#',
            'google_plus_url' => '#',
            'service_section' => '1',
            'about_section' => '1',
            'portfolio_section' => '1',
            'achivement_section' => '1',
            'team_section' => '1',
            'features_section' => '1',
            'testimonials_section' => '1',
            'whychoose_section' => '1',
            'our_clients_section' => '1',
            'contact_us_section' => '1'
        ]);

        // Create Default Clients
         DB::table('clients')->insert([            
            'name' => 'Logo 1',             
            'image' => 'themeforest_1466845518',
            'url' => '#' 
        ]);

        DB::table('clients')->insert([            
            'name' => 'Logo 2',             
            'image' => 'logo-2_1466845545',
            'url' => '#' 
        ]);
        
        DB::table('clients')->insert([            
            'name' => 'Logo 3',             
            'image' => 'logo-3_1466845574',
            'url' => '#' 
        ]);

        DB::table('clients')->insert([            
            'name' => 'Logo 4',             
            'image' => 'logo-4_1466845590',
            'url' => '#' 
        ]);

        DB::table('clients')->insert([            
            'name' => 'Logo 5',             
            'image' => 'logo-5_1466845604',
            'url' => '#' 
        ]);

        DB::table('clients')->insert([            
            'name' => 'Logo 6',             
            'image' => 'logo-6_1466846003',
            'url' => '#' 
        ]);

        DB::table('clients')->insert([            
            'name' => 'Logo 7',             
            'image' => 'logo-7_1466846019',
            'url' => '#' 
        ]);

        // Create Default Categories

        DB::table('categories')->insert([            
            'category_name' => 'LOGO',             
            'category_slug' => ''
             
        ]);

        DB::table('categories')->insert([            
            'category_name' => 'IDENTITY',             
            'category_slug' => ''
             
        ]); 

        // Create Default Portfolio
        DB::table('portfolio')->insert([            
            'cat_id' => '2',             
            'title' => 'Portfolio 1',
            'image' => 'portfolio-1_1466758030' 
        ]);

        DB::table('portfolio')->insert([            
            'cat_id' => '2',             
            'title' => 'Portfolio 2',
            'image' => 'portfolio-2_1466758040' 
        ]);

        DB::table('portfolio')->insert([            
            'cat_id' => '1',             
            'title' => 'Portfolio 3',
            'image' => 'portfolio-3_1466758049' 
        ]);

        DB::table('portfolio')->insert([            
            'cat_id' => '1',             
            'title' => 'Portfolio 4',
            'image' => 'portfolio-4_1466758060' 
        ]);

        DB::table('portfolio')->insert([            
            'cat_id' => '2',             
            'title' => 'Portfolio 5',
            'image' => 'portfolio-5_1466758073' 
        ]); 

        // Create Default sections
        DB::table('sections')->insert([            
            'section_name_service' => 'Services',             
            'section_service_title' => 'YOUR <strong>BUSINESS DREAMS</strong>',
            'section_service_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry\'s standard dummy</strong> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'section_name_about' => 'About Us', 
            'section_about_title' => 'We Transform <strong>Ideas</strong>', 
            'section_about_desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur! totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur. recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>', 
            'section_about_image' => 'about_image.png', 
            'section_name_portfolio' => 'Portfolio',
            'section_portfolio_title' => 'Our <strong>Portfolio</strong>',
            'section_name_achivement' => '',
            'section_achivement_title' => 'Best <strong>Achivement</strong>',
            'section_achivement_block1_icon' => 'fa-smile-o',
            'section_achivement_block1_number' => '819',
            'section_achivement_block1_title' => 'HAPPY CLIENTS',
            'section_achivement_block2_icon' => 'fa-code',
            'section_achivement_block2_number' => '4000',
            'section_achivement_block2_title' => 'WORKING HOURS',
            'section_achivement_block3_icon' => 'fa-check-square-o',
            'section_achivement_block3_number' => '560',
            'section_achivement_block3_title' => 'PROJECTS COMPLETED',
            'section_achivement_block4_icon' => 'fa-trophy',
            'section_achivement_block4_number' => '140',
            'section_achivement_block4_title' => 'AWARDS WON',
            'section_name_team' => 'Team',
            'section_team_title' => 'Meet the <strong>team</strong>',
            'section_team_desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

',
            'section_name_features' => 'Features',
            'section_features_title' => 'Awesome <strong>Features</strong>',
            'section_features_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            'section_features_image' => 'features_image.png',
            'section_features1_icon' => 'fa-mobile hi-icon',
            'section_features1_title' => '100% RESPONSIVE',
            'section_features1_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum reiciendis temporibus qui quibusdam.',
            'section_features2_icon' => 'fa-lightbulb-o hi-icon',
            'section_features2_title' => 'CREATIVE IDEAS',
            'section_features2_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum reiciendis temporibus qui quibusdam.',
            'section_features3_icon' => 'fa-gift hi-icon',
            'section_features3_title' => 'EASY OPTIONS',
            'section_features3_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum reiciendis temporibus qui quibusdam.',
            'section_features4_icon' => 'fa-magic hi-icon',
            'section_features4_title' => 'GREAT ANIMATIONS',  
            'section_features4_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum reiciendis temporibus qui quibusdam.',
            'section_features5_icon' => 'fa-cogs hi-icon',
            'section_features5_title' => 'MULTI-PURPOSE',
            'section_features5_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum reiciendis temporibus qui quibusdam.',
            'section_features6_icon' => 'fa-life-ring hi-icon',
            'section_features6_title' => 'UNLIMITED SUPPORT',
            'section_features6_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum reiciendis temporibus qui quibusdam.',
            'section_name_testimonials' => 'Testimonials',
            'section_testimonials_title' => 'TESTIMONIALS',
            'section_name_whychoose' => 'Why Choose',
            'section_whychoose_title' => 'Why <strong>Choose Us?</strong>',
            'section_our_client_title' => 'Our <strong>Clients</strong>',
            'section_name_contact' => 'Contact Us',
            'section_contact_title' => 'Contact <strong>Us</strong>',
            'section_contact_address' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'section_contact_email1' => 'info@test.com',
            'section_contact_email2' => 'info@demotest.com',
            'section_contact_phone1' => '+001 1250 1234',
            'section_contact_phone2' => '+001 1203 15354'

        ]); 
    
        // Create Default Services
        DB::table('services')->insert([            
            'service_title' => 'EASILY CUSTOMIZE',             
            'service_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum dolor sit ame consectetur adipisicing.',
            'service_icon' => 'easily-customize_1466672295' 
        ]);

         DB::table('services')->insert([            
            'service_title' => 'MODERN DESIGN',             
            'service_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum dolor sit ame consectetur adipisicing.',
            'service_icon' => 'modern-design_1466672956' 
        ]);


          DB::table('services')->insert([            
            'service_title' => 'SEO MARKETING',             
            'service_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum dolor sit ame consectetur adipisicing.',
            'service_icon' => 'seo-marketing_1466672974' 
        ]);

        // Create Default Sliders
        DB::table('sliders')->insert([            
            'slider_title' => 'CREATIVE MODERN AGENCY',             
            'slider_sub_title' => 'CREATION OF NEW WEBSITE HAS NEVER BEEN SO EASY AND SIMPLY',
            'slider_image' => 'creative-modern-agency_1466659912' 
        ]);

        DB::table('sliders')->insert([            
            'slider_title' => 'BUILD YOUR WEBSITE',             
            'slider_sub_title' => 'CREATION OF NEW WEBSITE HAS NEVER BEEN SO EASY AND SIMPLY',
            'slider_image' => 'build-your-website_1466659981' 
        ]);
        

         // Create Default Team
        DB::table('team')->insert([            
            'name' => 'John Doe',             
            'designation' => 'Co-Founder',
            'image' => 'john-doe_1466770792',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'gplus_url' => '#'  
        ]);

        DB::table('team')->insert([            
            'name' => 'John Doe',             
            'designation' => 'Analyst',
            'image' => 'john-doe_1466770809',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'gplus_url' => '#'  
        ]);

        DB::table('team')->insert([            
            'name' => 'John Doe',             
            'designation' => 'Developer',
            'image' => 'john-doe_1466770827',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'gplus_url' => '#'  
        ]); 
		 
        DB::table('team')->insert([            
            'name' => 'John Doe',             
            'designation' => 'Designer',
            'image' => 'john-doe_1466770844',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'gplus_url' => '#'  
        ]); 
        
        DB::table('team')->insert([            
            'name' => 'John Doe',             
            'designation' => 'Graphic designer',
            'image' => 'john-doe_1466770859',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'gplus_url' => '#'  
        ]);  
		
         // Create Default Testimonials
        DB::table('testimonials')->insert([            
            'name' => 'John Deo',             
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.',
            'image' => 'john-deo_1466838406' 
        ]);

        DB::table('testimonials')->insert([            
            'name' => 'John Roe',             
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.',
            'image' => 'john-roe_1466838495' 
        ]);

         // Create Default Why Choose
        DB::table('whychoose')->insert([            
            'title' => 'Highly Experienced Professional Team',             
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.' 
        ]);

        DB::table('whychoose')->insert([            
            'title' => 'Up-to-Date with the Latest Standards',             
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed utLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut' 
        ]);


        DB::table('whychoose')->insert([            
            'title' => 'We Emphasize Simplicity',             
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.' 
        ]);

        DB::table('whychoose')->insert([            
            'title' => 'We’re Friendly & Affordable',             
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.' 
        ]);

       // factory('App\User', 20)->create();
    }
}
