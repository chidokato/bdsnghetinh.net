<!DOCTYPE HTML>
<html xml:lang="vi" lang="vi" xmlns="http://www.w3.org/1999/xhtml" lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta itemprop='name' content='{{$head_setting->name}}' />
<meta name="description" itemprop='description' content="@yield('description')"/>
<meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<link rel="shortcut icon" href="{{$head_setting->img}}" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="@yield('url')" hreflang="vi-vn" />
<meta itemprop='url' content="@yield('url')" />
<meta itemprop='image' content="@yield('img')" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('url')" />
<meta property="og:site_name" content="site_name" />
<meta property="og:image" content="@yield('img')">
<meta property="og:image:secure_url" content="@yield('img')">
<!-- and og -->
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<meta name='twitter:image' content="@yield('img')" />
<meta name='twitter:image:alt' content="@yield('title')" />
<!-- and twitter -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="article:author" content="admin" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="content-language" content="vi" />

<!-- Scripts -->
<script src='fontend/assets/jquery.mindb60.js?1500516118960' type='text/javascript'></script> 
<script src='fontend/assets/bootstrap.mindb60.js?1500516118960' type='text/javascript'></script> 
<!-- Styles -->
<link href='fontend/assets/bootstrap.mindb60.css?1500516118960' rel='stylesheet' type='text/css' />
<link href='fontend/assets/blogmatedb60.css?1500516118960' rel='stylesheet' type='text/css' />
<link href='fontend/assets/flexsliderdb60.css?1500516118960' rel='stylesheet' type='text/css' />
<link href='fontend/assets/styledb60.css?1500516118960' rel='stylesheet' type='text/css' />
<link href='fontend/assets/owl.carouseldb60.css?1500516118960' rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link rel="stylesheet" href="fontend/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Header hook for plugins ================================================== -->

<!-- ananytisc -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '{{$head_setting->analytics}}', 'auto');
  ga('send', 'pageview');
</script>
<!-- ananytisc -->
@yield('css')
{!!$head_setting->code_header!!}
</head>
@include('layout.function')
<body id="bat-dong-san" class="  cms-index-index cms-home-page" > 
  {!! $head_setting->code_body !!}
  <!-- header -->
  @include('layout.header')
  <!-- end header -->
	<!-- content -->
	@yield('content')
	<!-- end content -->
  <!-- footer -->
  @include('layout.footer')
  <!-- end footer -->
  <!--div id="back-top"><i class="fa fa-chevron-up"></i></div-->
  <script src='fontend/assets/commondb60.js' type='text/javascript'></script>
  <script src='fontend/assets/jquery.flexsliderdb60.js' type='text/javascript'></script>
  <script src='fontend/assets/cloud-zoomdb60.js' type='text/javascript'></script>
  <script src='fontend/assets/owl.carousel.mindb60.js' type='text/javascript'></script>
  <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span></a>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- chống coppy -->
  <script type="text/javascript" src="https://jgoogle.googlecode.com/svn/trunk/disable-copyright.js"></script>
  <style>
	body{
		-moz-user-select: none !important;
		-webkit-touch-callout: none!important;
		-webkit-user-select: none!important;
		-khtml-user-select: none!important;
		-moz-user-select: none!important;
		-ms-user-select: none!important;
		user-select: none!important;
	}
  </style>
</body>

@yield('js')

<!-- Mirrored from batdongsan-1.bizwebvietnam.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 06:02:05 GMT -->
</html>