@extends('layout.index')

@section('title')
<?php if ( $category['title'] == '' ) echo $category['name']; else echo $category['title']; ?>
@endsection
@section('description')
<?php echo $category['description']; ?>
@endsection
@section('keywords')
<?php echo $category['keywords']; ?>
@endsection
@section('robots')
<?php if ( $category['robot'] == 0 ) echo "index, follow";  elseif ( $category['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset('').$category['slug']; ?>
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="inner">
            <ul>
                <li class="home"><a href="{{asset('')}}">Trang chủ</a> </li>
                <li>/</li>
                <li><strong>{!! $category->name !!}</strong></li>
            </ul>
        </div>
    </div>
</div>


<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-main col-md-9 col-sm-12 col-xs-12 collection">
                <article class="col-main">
                    <div class="category-description clearfix">
                        <h2 class="cat-heading">{!! $category->name !!}</h2>
                    </div>
                        <div class="box-content">
                            <div class="row">
                            @foreach($product as $val)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
							  </div>               
                            @endforeach  
                            </div>                
                        </div>
                    <div class="pager">              
                        <div class="pages">
                            {!! $product->links() !!}  
                        </div>
                    </div>
                </article>
            </div>
            <aside class="col-right sidebar col-md-3 col-sm-12 col-xs-12">
	
	
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
        </div>
    </div>
</section>



@endsection