@extends("app")
@section("content")
 
@include("_particles.slider")

@if(getcong('service_section')!=0)
@include("_particles.services")
@endif

@if(getcong('about_section')!=0)
@include("_particles.about")
@endif

@if(getcong('portfolio_section')!=0)
@include("_particles.portfolio")
@endif

@if(getcong('achivement_section')!=0)
@include("_particles.achivement") 
@endif

@if(getcong('team_section')!=0)
@include("_particles.team")
@endif

@if(getcong('features_section')!=0)
@include("_particles.features")
@endif

@if(getcong('testimonials_section')!=0)
@include("_particles.testimonials")
@endif

@if(getcong('whychoose_section')!=0)
@include("_particles.whychoose")
@endif

@if(getcong('our_clients_section')!=0)
@include("_particles.clients")
@endif

@if(getcong('contact_us_section')!=0)
@include("_particles.contact") 
@endif

@endsection
