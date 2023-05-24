<div id="Portfolio">
  <div class="section-title center">
    <h2>{!!getcong_service('section_portfolio_title')!!}</strong></h2>
    <hr>
  </div>
  <div id="js-filters-masonry-projects" class="vcf-l-filters-buttonCenter">
    <div data-filter="*" class="vcf-filter-item-active vcf-filter-item">All</div>
    @foreach($categories as $category)
      <div data-filter=".{{$category->id}}" class="vcf-filter-item">{{$category->category_name}}</div>
    @endforeach    
     
  </div>
  <div id="js-grid-masonry-projects" class="vcf vcf-l-grid-masonry-projects">
    
    @foreach($portfolio as $portfolio_item)
      
      <div class="vcf-item {{$portfolio_item->cat_id}}">
        <div class="vcf-caption">
          <div class="vcf-caption-defaultWrap"> <img src="{{ URL::asset('upload/portfolio/'.$portfolio_item->image.'-b.jpg') }}" alt=""> </div>
          <div class="vcf-caption-activeWrap">
            <div class="vcf-l-caption-alignCenter">
              <div class="vcf-l-caption-body"> <a href="{{ URL::asset('upload/portfolio/'.$portfolio_item->image.'-b.jpg') }}" class="vcf-lightbox vcf-l-caption-buttonRight" data-title="{{\App\Categories::getCategoryInfo($portfolio_item->cat_id)->category_name}}"><i class="fa fa-fw"></i></a> </div>
            </div>
          </div>
        </div>
      <div class="inner-list-detail">
          <a href="#" class="vcf-l-grid-masonry-projects-title" rel="nofollow">{{$portfolio_item->title}}</a>
          <div class="vcf-l-grid-masonry-projects-desc">{{\App\Categories::getCategoryInfo($portfolio_item->cat_id)->category_name}}</div>
      </div>
      </div>
    
    @endforeach
     
      
  </div>
</div>