<aside class="col-right sidebar col-md-3 col-sm-12 col-xs-12">
	<div class="sidebar-news block">
        <div class="sidebar-title"><h2>Dự Án Tiêu Biểu</h2></div>
        <div class="sidebar-news-content">
            @foreach($duantieubieu as $val)
            <div class="item">
			  <div class="col-item">
				<div class="item-inner">
				  <div class="product-wrapper">
					<div class="thumb-wrapper">
					  <a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html">
						<img src="{{$val->img}}" alt="{{$val->name}}">
					  </a>
					</div>
				  </div>
				  <div class="item-info">
					<div class="item-content">
						<div class="item-title"><a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html">{{$val->name}}</a> </div>
						<div class="item-vendor"> {{$val->address}}, {{$val->district->name}}, {{$val->district->city->name}}</div>
						<div>
							<div class="item-price">         
								<div class="price-box">
									@if($val->price)
									<span class="regular-price"><b>Giá:</b> <span style='color: red;' class="price"><strong>{{$val->price}}</strong></span></span>
									@else
									<span class="regular-price"><b>Giá:</b> <span style='color: red;' class="price"><strong>Liên hệ</strong></span></span>
									@endif
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
            @endforeach
        </div>
    </div>
	
    <div class="sidebar-news block">
        <div class="sidebar-title"><h2>Tin Tức Nổi Bật</h2></div>
        <div class="sidebar-news-content">
            @foreach($sidebar_news as $val)
            <div class="sidebar-news-info">
                <div class="sidebar-news-name">
                    <h3><a href="{{$val->slug}}/{{$val->id}}.html">{{$val->name}}</a></h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @foreach($banner1 as $val)
    <div class="banner-img"><a href="{{$val->link}}"><img src="{{$val->img}}" /></a></div>
    <br>
    @endforeach

</aside>