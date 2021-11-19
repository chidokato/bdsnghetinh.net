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
                <section class="home-news">
                    <div class="blog-news-title">
                        <h1>{!! $category->name !!}</h1>
                    </div>
                        @foreach($news as $val)
                        <div class="home-news-item">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="bds-blog-img">
                                        <a href="{{$val->slug}}/{{$val->id}}.html">
                                            <img src="{{$val->img}}" alt="{{$val->name}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="bds-blog-info">
                                        <div class="post-name"><h3><a href="{{$val->slug}}/{{$val->id}}.html">{{$val->name}}</a></h3></div>
                                        <!--div class="post-author">
                                            <ul>
                                                <li><span datetime="{{$val->date}}" class="date"><i class="fa fa-calendar"></i> {{$val->date}}</span></li>
                                                <li><span class="title"><i class="fa fa-user"></i> {{$val->user}}</span></li>
                                                <li><span class="blog-cate"><a href="{{$val->category->slug}}"><i class="fa fa-folder-open"></i> {{$val->category->name}}</a></span></li>
                                            </ul>
                                        </div-->
                                        <div class="post-desc">
                                            {{$val->detail}}...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    <div class="pager">              
                        <div class="pages">
                            {!! $news->links() !!}  
                        </div>
                    </div>
                </section>
            </div>
            @include('layout.sitebar')
        </div>
    </div>
</section>


@endsection
