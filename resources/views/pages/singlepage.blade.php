@extends('layout.index')

@section('title')
<?php if ( $category['title'] == '' ) echo $category['name']; else echo $category['title']; ?>
@endsection
@section('description')
<?php echo $category['desc']; ?>
@endsection
@section('keywords')
<?php echo $category['key']; ?>
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

<section class="main-container col2-right-layout">
    <div class="main container">
        <div class="row">
            <div class="col-main col-md-9 col-sm-12 col-xs-12">
                <div class="blog-wrapper" id="main">
                    <div class="site-content" id="primary">
                        <div role="main" id="content">
                            <article class="blog_entry clearfix">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="blog_entry-title">Chọn người xông nhà, mở hàng năm Đinh Dậu</h2>
                                    </div>
                                    <div class="post-author">
                                        <ul>
                                            <li><span datetime="22/02/2017" class="date"><i class="fa fa-calendar"></i> 22/02/2017</span></li>
                                            <li><span class="title"><i class="fa fa-user"></i> Team LV</span></li>
                                            <li><span class="blog-cate"><a href="tin-tuc"><i class="fa fa-folder-open"></i> Tin tức</a></span></li>
                                        </ul>
                                    </div>
                                    <!--blog_entry-header-inner-->
                                    <div class="entry-content">
                                        {!! $category->content !!}
                                    </div>
                                </header>
                            </article>
							
                            <div class="fb-like" xid="{{$category->id}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
							<hr>
							<div class="fb-comments" xid="{{$category->id}}" data-width="100%" data-numposts="5"></div>
							
                            <!--div class="blog-related clearfix">
                                <div class="related-title">Tin cũ hơn</div>
                                
                                <div class="related-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i> 
                                        <a href="/chon-nguoi-xong-nha-mo-hang-nam-dinh-dau" class="rel-item">Chọn người xông nhà, mở hàng năm Đinh Dậu 
                                            <span class="related-author hidden-xs">
                                                (<span datetime="22/02/2017" class="date">22/02/2017</span> &nbsp;|&nbsp;
                                                <span class="blog-cate">Team LV</span>)
                                            </span>
                                        </a>
                                    </h3>
                                </div>
                                
                                <div class="related-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i> 
                                        <a href="/nhung-luu-y-phong-thuy-khi-treo-dong-ho-trong-nha" class="rel-item">Những lưu ý phong thủy khi treo đồng hồ trong nhà 
                                            <span class="related-author hidden-xs">
                                                (<span datetime="22/02/2017" class="date">22/02/2017</span> &nbsp;|&nbsp;
                                                <span class="blog-cate">Team LV</span>)
                                            </span>
                                        </a>
                                    </h3>
                                </div>
                                
                                <div class="related-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i> 
                                        <a href="/nhung-luu-y-ve-phong-thuy-trong-ngay-ram-thang-gieng" class="rel-item">Những lưu ý về phong thủy trong ngày rằm tháng Giêng 
                                            <span class="related-author hidden-xs">
                                                (<span datetime="22/02/2017" class="date">22/02/2017</span> &nbsp;|&nbsp;
                                                <span class="blog-cate">Team LV</span>)
                                            </span>
                                        </a>
                                    </h3>
                                </div>
                                
                            </div-->
                            
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.sitebar')
        </div>
    </div>
</section>

@endsection
