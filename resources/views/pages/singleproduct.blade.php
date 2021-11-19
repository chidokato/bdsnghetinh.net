@extends('layout.index')

@section('title')
<?php if ( $singleproduct['title'] == '' ) echo $singleproduct['name']; else echo $singleproduct['title']; ?>
@endsection
@section('description')
<?php echo $singleproduct['description']; ?>
@endsection
@section('keywords')
<?php echo $singleproduct['keywords']; ?>
@endsection
@section('robots')
<?php if ( $singleproduct['robot'] == 0 ) echo "index, follow";  elseif ( $singleproduct['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('img'){{asset('')}}{{$singleproduct->img}}@endsection
@section('url')
<?php echo asset('').$singleproduct->category['slug'].'/'.$singleproduct['slug'].'/'.$singleproduct['id'].'.html'; ?>
@endsection

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="inner">
            <ul>
                <li class="home"><a href="/">Trang chủ</a> </li>
                <li>/</li>
                <li><a href="{{$singleproduct->category->slug}}">{{$singleproduct->category->name}}</a></li>
                <li>/</li>
                <li><strong>{{$singleproduct->name}}</strong></li>
            </ul>
        </div>
    </div>
</div>

<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-main col-md-12 col-sm-12 col-xs-12 collection">
                <div itemscope="" itemtype="http://schema.org/Product">
                    <meta itemprop="url" content="{{$singleproduct->category->slug}}/{{$singleproduct->slug}}/{{$singleproduct->id}}.html">
                    <meta itemprop="image" content="{{$singleproduct->img}}">
                    <meta itemprop="shop-currency" content="">
                    <div class="main">
                        <div class="col-main">
                            
                            <div class="row">
                                <div class="product-view clearfix">
                                    <div class="product-essential ">
                                        <div class="product-img-box col-sm-7 col-xs-12 col-lg-7">
                                            <div class="product-image">
                                                <div class="large-image"> 
                                                    <a href="{{$singleproduct->img}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20" style="position: relative; display: block;"> 
                                                        <img src="{{$singleproduct->img}}" alt="{{$singleproduct->name}}" style="display: block;">
                                                        <div class="cloud-zoom-lens" style="z-index: 98; position: absolute; width: 349.607px; height: 234.09px; opacity: 0; left: 0px; top: 0px; background-position: 0px 0px;"></div>
                                                    </a> 
                                                    <div class="mousetrap" style="z-index: 999; position: absolute; width: 458px; height: 306px; left: 0px; top: 0px; cursor: auto;"></div>
                                                    <div id="cloud-zoom-big" class="cloud-zoom-big" style="position: absolute; left: 15px; top: 0px; width: 458px; height: 306px; background-image: url({{$singleproduct->img}}); z-index: 99; opacity: 0; background-position: -12px -40px;">
                                                    </div>
                                                </div>
                                                <div class="flexslider flexslider-thumb">
                                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                                        <ul class="previews-list slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-78px, 0px, 0px);">
                                                            <a href="{{$singleproduct->img}}" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{$singleproduct->img}}' ">
                                                                <li style="width: 76px; float: left; display: block;">
                                                                
                                                                    <img src="{{$singleproduct->img}}" alt="{{$singleproduct->name}}" draggable="false">
                                                                
                                                                </li>
                                                            </a>
                                                            @foreach($singleproduct->image as $image)
                                                            <li style="width: 76px; float: left; display: block;"><a href="{{$image->img}}" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '{{$image->img}}' "><img src="{{$image->img}}" alt="{{$image->name}}" draggable="false"></a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <ul class="flex-direction-nav"><li><a class="flex-prev" href="#" tabindex="-1"></a></li><li><a class="flex-next flex-disabled" href="#" tabindex="-1"></a></li></ul>
                                                </div>
                                            </div>


                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="product-shop col-sm-5 col-xs-12 col-lg-5">
                                            <div class="product-content">
                                                <div class="product-name">
                                                    <h1>{{$singleproduct->name}}</h1>
                                                </div>
                                                <div class="item-vendor"><strong>Vị trí:</strong> {{$singleproduct->address}}, {{$singleproduct->district->name}}, {{$singleproduct->district->city->name}}</div>

                                                @if($singleproduct->price)
                                                <div class="product-price">         
                                                    <div class="product-box"> 
                                                        <span class="regular-price"><b>Giá</b>: <span class="price">{{$singleproduct->price}}</span></span>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="product-box"> 
                                                    <span class="regular-price"><b>Giá</b>: <span class="price">Liên hệ</span></span>
                                                </div>
                                                @endif

                                                @if($singleproduct->investor)
                                                <div class="product-type"><b>Chủ đầu tư</b>: {{$singleproduct->investor}}</div>
                                                @endif

                                                @if($singleproduct->complete)
                                                <div class="product-type"><b>Ngày bàn giao</b>: {{$singleproduct->complete}} (dự kiến)</div>
                                                @endif

                                                @if($singleproduct->acreage)
                                                <div class="product-type"><b>Diện tích</b>: {{$singleproduct->acreage}}</div>
                                                @endif
                                            </div>
                                            <!-- <div class="short-description">
                                            </div> -->
                                            <div class="prod-hotline">
                                                <!-- <span>Tiếp nhận thông tin cập nhật về dự án:</span> -->
                                                @if($singleproduct->hotline)
                                                <a href="tel:{{$singleproduct->hotline}}">
                                                    <i class="fa fa-phone"></i> {{$singleproduct->hotline}}
                                                </a>
                                                @else
                                                <a href="tel:{{$head_setting->hotline}}">
                                                    <i class="fa fa-phone"></i> {{$head_setting->hotline}}
                                                </a>
                                                @endif
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="product-collateral clearfix">
                                    <div class="col-main col-md-9 col-sm-12 col-xs-12">
                                        <div class="entry-content">
                                            {!! $singleproduct->content !!}
                                        </div>
										
										
										
										<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox_7fcs"></div>
										
                                        <!-- <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                            <li class="active"> <a href="#product_tabs_description" data-toggle="tab">Chi tiết dự án</a> </li>
                                            <li class=""> <a href="#product_tabs_custom" data-toggle="tab">Mặt bằng dự án</a> </li>
                                        </ul> -->
                                        <!-- <div id="productTabContent" class="tab-content">
                                            <div class="tab-pane fade active in" id="product_tabs_description">
                                                <div class="std">
                                                    {!! $singleproduct->content !!}
                                                </div>
                                            </div>
                                            
                                            <div class="tab-pane fade" id="product_tabs_custom">
                                                <div class="product-tabs-content-inner clearfix">
                                                    
                                                </div>
                                            </div>
                                             
                                        </div> -->
                                        <!-- social -->
                                        
                                        <hr>
                                        <div class="fb-comments" xid="{{$singleproduct->id}}" data-width="100%" data-numposts="5"></div>
                                    </div>
                                    @include('layout.sitebar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="upsell-pro">
                    <div class="">
                        <div class="slider-items-products">
                            <div class="box-title">
                                <h2>Dự án liên quan</h2>
                            </div>
                            <div class="row">
                                @foreach($lienquan as $val)
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
                    </div>
                </section>
            </div>
            
        </div>
    </div>
</section>



@endsection


@section('js')


@endsection