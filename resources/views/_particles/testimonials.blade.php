<div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title center white">
      <h2 class="white">{!!getcong_service('section_testimonials_title')!!}</h2>
      <hr class="black">
    </div>
    <div id="Testimonial" class="owl-carousel">
      
      @foreach($testimonials as $i => $testimonial)
      <div class="item">
        <p><img src="{{ URL::asset('upload/testimonial/'.$testimonial->image.'-b.png') }}" alt=""></p>
        <p class="para-tex">{!!$testimonial->testimonial!!}</p>        
         
        <p class="clients-name"><strong>{{$testimonial->name}}</strong></p>
      </div>
      @endforeach
       
       
    </div>
  </div>
</div>