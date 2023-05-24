<div id="team" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>{!!getcong_service('section_team_title')!!}</h2>
      <hr>
      <p class="para">{!!getcong_service('section_team_desc')!!}</p>
    </div>
    <div id="our-teams" class="owl-carousel">
       
      @foreach($team as $k=>$team_member)
      @if($k==1)<div class="item text-center"> @else <div class="item"> @endif

        <img class="img-thumbnail" src="{{ URL::asset('upload/team/'.$team_member->image.'-b.jpg') }}" alt="">

        <div class="caption">
          <h3>{{$team_member->name}}</h3>
          <h5>{{$team_member->designation}}</h5>          
          <div class="text-center fnav">
            <ul class="footer-social">
              @if($team_member->facebook_url)<li><a href="{{$team_member->facebook_url}}"><i class="fa fa-facebook"></i></a></li>@endif
              @if($team_member->twitter_url)<li><a href="{{$team_member->twitter_url}}"><i class="fa fa-twitter"></i></a></li>@endif
              @if($team_member->linkedin_url)<li><a href="{{$team_member->linkedin_url}}"><i class="fa fa-dribbble"></i></a></li>@endif
              @if($team_member->gplus_url)<li><a href="{{$team_member->gplus_url}}"><i class="fa fa-linkedin"></i></a></li>@endif
            </ul>
          </div>
          <hr>
        </div>
      </div>
       
      @endforeach
       
    </div>
  </div>
</div>