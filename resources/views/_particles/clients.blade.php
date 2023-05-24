<div id="client" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>{!!getcong_service('section_our_client_title')!!}</h2>
      <hr>
    </div>
    <div id="clients" class="owl-carousel">
      @foreach($clients as $i => $client)
      
      <div class="item">
        @if($client->url!="")
        <a href="{{ $client->url }}" target="_blank">
          <img src="{{ URL::asset('upload/clients/'.$client->image.'-b.png') }}" alt="{{ $client->name }}">
        </a> 
        @else
         <img src="{{ URL::asset('upload/clients/'.$client->image.'-b.png') }}" alt="{{ $client->name }}">
        @endif
      </div>

      @endforeach
 
         
    </div>
  </div>
</div>