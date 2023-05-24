<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('head_title', getcong('site_name'))</title>
<meta name="description" content="@yield('head_description', getcong('site_description'))">
<meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
<meta name="viewport"content="width=device-width, initial-scale=1.0">

<meta property="og:type" content="article" />
<meta property="og:title" content="@yield('head_title',  getcong('site_name'))" />
<meta property="og:description" content="@yield('head_description', getcong('site_description'))" />
<meta property="og:image" content="@yield('head_image', url('/upload/logo.png'))" />
<meta property="og:url" content="@yield('head_url', url('/'))" />
 
<!-- Favicon-->
	<link rel="shortcut icon" href="{{ URL::asset('upload/'.getcong('site_favicon')) }}" type="image/x-icon">
<!--MAIN STYLE-->
<link href="{{ URL::asset('site_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('site_assets/fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('site_assets/css/owl.carousel.css') }}" rel="stylesheet" media="screen">
@if(getcong('site_style'))
<link href="{{ URL::asset('site_assets/css/'.getcong('site_style').'') }}" rel="stylesheet" type="text/css">
@else
<link href="{{ URL::asset('site_assets/css/style_blue.css') }}" rel="stylesheet" type="text/css">
@endif
<link href="{{ URL::asset('site_assets/css/responsive-style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('site_assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
 <link href="{{ URL::asset('site_assets/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('site_assets/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
  
<link href='https://fonts.googleapis.com/css?family=Dosis:400,300,500,700,800,600' rel='stylesheet' type='text/css'>

{!!getcong('site_header_code')!!}

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div class="se-pre-con"></div>
<div class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="{{ URL::asset('upload/'.getcong('site_logo')) }}" alt=""></a> </div>
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
      
        <li class="dropdown active"><a class="page-scroll" href="#rev-slider"> Home</a></li>
        @if(getcong('service_section')!=0)<li> <a class="page-scroll" href="#services-icon">{{getcong_service('section_name_service')}}</a> </li>@endif

		@if(getcong('about_section')!=0)<li> <a class="page-scroll" href="#about">{!!getcong_service('section_name_about')!!}</a> </li> @endif
        
        @if(getcong('portfolio_section')!=0)<li> <a class="page-scroll" href="#Portfolio">{!!getcong_service('section_name_portfolio')!!}</a> </li> @endif      
        
        @if(getcong('team_section')!=0)<li> <a class="page-scroll" href="#team">{!!getcong_service('section_name_team')!!}</a> </li>	@endif
        
        @if(getcong('features_section')!=0)<li> <a class="page-scroll" href="#awesome-features">{!!getcong_service('section_name_features')!!}</a> </li>	@endif      			
        
        @if(getcong('testimonials_section')!=0)<li> <a class="page-scroll" href="#testimonials">{!!getcong_service('section_name_testimonials')!!}</a> </li> @endif   
		
		@if(getcong('whychoose_section')!=0)<li> <a class="page-scroll" href="#why-choose">{!!getcong_service('section_name_whychoose')!!}</a> </li> @endif
        
        @if(getcong('contact_us_section')!=0)<li> <a class="page-scroll" href="#contact">{!!getcong_service('section_name_contact')!!}</a> </li> @endif
      
      </ul>
    </div>
  </div>
</div>

@yield("content")


<div class="footer-bottom">
  <div class="container">
  <div class="col-lg-6 col-md-6">
	<div class="f-b">
			@if(getcong('site_copyright'))
						
				{{getcong('site_copyright')}}
			
			@else
			
				Q09ERUxJU1QuQ0MgLSBFeGNsdXNpdmUgc2NyaXB0cywgcGx1Z2lucyAmIG1vYmlsZSE=

			@endif</div>
</div>
<div class="col-lg-6 col-md-6">
  <div class="footer-widget-social">
    <ul>
      @if(getcong('facebook_url'))<li><a data-tooltip="facebook" href="{{getcong('facebook_url')}}"><i class="fa fa-facebook"></i></a></li>@endif
	  @if(getcong('linkedin_url'))<li><a data-tooltip="Linkedin" href="{{getcong('linkedin_url')}}"><i class="fa fa-linkedin"></i> </a></li>@endif
      @if(getcong('twitter_url'))<li><a data-tooltip="twitter" href="{{getcong('twitter_url')}}"><i class="fa fa-twitter"></i></a></li>@endif           
      @if(getcong('pinterest_url'))<li><a data-tooltip="Pinterest" href="{{getcong('pinterest_url')}}"><i class="fa fa-pinterest-p"></i> </a></li>@endif
      @if(getcong('google_plus_url'))<li><a data-tooltip="Google-Plus" href="{{getcong('google_plus_url')}}"><i class="fa fa-google-plus"></i> </a></li>@endif      
    </ul>
  </div>
</div>
</div>
</div>

<a href="#" id="back-to-top" title="Back to top"><img src="{{ URL::asset('site_assets/img/top-arrow.png') }}" alt=""></a>

{!!getcong('site_footer_code')!!}

<script type="text/javascript" src="{{ URL::asset('site_assets/js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/jquery-latest.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/jquery-portfolio.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/main-portfolio.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/smooth-scroll.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/jquery-counter.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/waypoints.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/bootstrap-validation.js') }}"></script>
 
<script type="text/javascript" src="{{ URL::asset('site_assets/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/main.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script>
var tpj=jQuery;				
var revapi46;
tpj(document).ready(function() {
	if(tpj("#rev_slider_46_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_46_1");
	}else{
		revapi46 = tpj("#rev_slider_46_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				},
					bullets: {
			  enable: true,
				hide_onmobile: true,
				hide_under: 800,
				style: "zeus",
				hide_onleave: false,
				direction: "horizontal",
				h_align: "center",
				v_align: "bottom",
				h_offset: 0,
				v_offset: 30,
				space: 5,
				}
				
			},
			responsiveLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[868,768,960,720],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50],
				disable_onmobile:"on"
			},
			shadow:0,
	   spinner: "off",
		stopLoop: "off",
		stopAfterLoops: -1,
		stopAtSlide: -1,
			shuffle:"off",
			autoHeight:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "0px",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"on",
				nextSlideOnWindowFocus:"on",
				disableFocusListener:false,
			}
		});
	}
});	
</script>
</body>
</html>