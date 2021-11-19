@extends('layout.index')

@section('title')
<?php if ( $singlenews['title'] == '' ) echo $singlenews['name']; else echo $singlenews['title']; ?>
@endsection
@section('description')
<?php echo $singlenews['desc']; ?>
@endsection
@section('keywords')
<?php echo $singlenews['key']; ?>
@endsection
@section('robots')
<?php if ( $singlenews['robot'] == 0 ) echo "index, follow";  elseif ( $singlenews['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')<?php echo asset('').$singlenews['slug'].'/'.$singlenews['id'].'.html'; ?>@endsection
@section('img')<?php echo 'http://www.bdsnghetinh.net'.$singlenews['img']; ?>@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="inner">
            <ul>
                <li class="home"><a href="/">Trang chủ</a> </li>
                <li>/</li>
                <li><a href="{{$singlenews->category->slug}}">{{$singlenews->category->name}}</a></li>
                <li>/</li>
                <li><strong>{{$singlenews->name}}</strong></li>
            </ul>
        </div>
    </div>
</div>


<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-main col-md-9 col-sm-12 col-xs-12 collection">
                <div class="blog-wrapper" id="main">
                    <div class="site-content" id="primary">
                        <div role="main" id="content">
                            <article class="blog_entry clearfix">
                                <header class="blog_entry-header clearfix">
                                    <div class="blog_entry-header-inner">
                                        <h2 class="blog_entry-title">{!! $singlenews->name !!}</h2>
                                    </div>
                                    <!--div class="post-author">
                                        <ul>
                                            <li><span datetime="{!! $singlenews->date !!}" class="date"><i class="fa fa-calendar"></i> {!! $singlenews->date !!}</span></li>
                                            <li><span class="title"><i class="fa fa-user"></i> {!! $singlenews->user !!}</span></li>
                                            <li><span class="title"><i class="fa fa-eye"></i> {!! $singlenews->hits !!}</span></li>
                                            <li><span class="blog-cate"><a href="{!! $singlenews->category->slug !!}"><i class="fa fa-folder-open"></i> {!! $singlenews->category->name !!}</a></span></li>
                                        </ul>
                                    </div-->
                                    <!--blog_entry-header-inner-->
                                    <div class="entry-content">
                                        {!! $singlenews->content !!}
                                    </div>
									
									<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox_7fcs"></div>
									
									
										
                                </header>
                            </article>
                            
                            <hr>
                            <div class="fb-comments" xid="{{$singlenews->id}}" data-width="100%" data-numposts="5"></div>
                            <div class="blog-related clearfix">
                                <div class="related-title">Tin Liên Quan</div>
                                @foreach($tinlienquan as $val)
                                <div class="related-item">
                                    <h3><i class="fa fa-caret-right" aria-hidden="true"></i> 
                                        <a href="{{$val->slug}}/{{$val->id}}.html" class="rel-item">{{$val->name}} 
                                            <!--span class="related-author hidden-xs">
                                                (<span datetime="{{$val->date}}" class="date">{{$val->date}}</span> &nbsp;|&nbsp;
                                                <span class="blog-cate">{{$val->user}}</span>)
                                            </span-->
                                        </a>
                                    </h3>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.sitebar')
        </div>
    </div>
</section>


@endsection

