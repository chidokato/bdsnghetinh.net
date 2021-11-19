@extends('layout.index')

@section('title')
Tìm kiếm {!! $key !!}
@endsection
@section('description')
Tìm kiếm {!! $key !!}
@endsection
@section('keywords')
Tìm kiếm {!! $key !!}
@endsection
@section('robots')
noindex, nofollow
@endsection
@section('url')
<?php echo asset('').'tim-kiem'; ?>
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="inner">
            <ul>
                <li class="home"><a href="{{asset('')}}">Trang chủ</a> </li>
                <li>/</li>
                <li><strong>Tìm kiếm: <i>{!! $key !!}</i></strong></li>
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
                        <h2 class="cat-heading">Tìm kiếm: <i>{!! $key !!}</i></h2>
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
                                        <div class="item-vendor"><b>Vị trí:</b> {{$val->address}}, {{$val->district->name}}, {{$val->district->city->name}}</div>
                                        
                                        @if($val->acreage)
                                        <div class="item-type"><b>Diện tích:</b> {{$val->acreage}}</div>
                                        @else
                                        <div class="item-type"><b>Diện tích:</b> Đang cập nhật</div>
                                        @endif
                                      </div>
                                      <div class="actions">
                                          <a class="pull-left">
                                            <div class="item-price">         
                                              <div class="price-box">
                                                @if($val->price)
                                                <span class="regular-price"><b>Giá:</b> <span style='color: red;' class="price"><strong>{{$val->price}}</strong></span></span>
                                                @else
                                                <span class="regular-price"><b>Giá:</b> <span style='color: red;' class="price"><strong>Liên hệ</strong></span></span>
                                                @endif
                                              </div>
                                            </div>
                                          </a>
                                          <button class="button btn-cart btn-more" type="button" onclick="window.location.href='{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html'"><span>Xem ngay <i class="fa fa-arrow-circle-o-right"></i></span></button>
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
                        </div>
                    </div>
                </article>
            </div>
            @include('layout.sitebar')
        </div>
    </div>
</section>

@endsection

@section('function')
    <?php 
    
    function submenu ($menu,$id)
    {
        echo "<ul class='sub-menu'>";
        foreach ($menu as $item) 
        {
            if($item['parent_id'] == $id)
            {
                echo "<li><a href='".$item['menu_slug']."'>".$item['menu_name']."</a>";
                submenu($menu,$item['id']);
                echo "</li>";
            }
        }
        echo "</ul>";
    }
    ?>
@endsection