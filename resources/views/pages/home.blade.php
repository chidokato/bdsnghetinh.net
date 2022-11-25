@extends('layout.index')

@section('title')
<?php if ( $head_setting['title'] == '' ) echo $head_setting['name']; else echo $head_setting['title']; ?>
@endsection
@section('description')
<?php echo $head_setting['description']; ?>
@endsection
@section('keywords')
<?php echo $head_setting['keywords']; ?>
@endsection
@section('robots')
<?php if ( $head_setting['robot'] == 0 ) echo "index, follow";  elseif ( $head_setting['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('img')
{{asset('')}}<?php echo $head_setting['img']; ?>
@endsection
@section('url')
<?php echo asset(''); ?>
@endsection

@section('content')

<div style="padding-top: 60px;">
  <div class="main-slider-content" id="ow-slider">
    @foreach($home_slide as $val)
    <div class="item">
      <a href="{{$val->link}}"><img style='width: 100%;' src="{{$val->img}}" alt="{{$val->name}}"></a>
    </div>
    @endforeach
  </div>
</div>

<h1 style='position: absolute;left: -2000px;'>{{$head_setting->title}}</h1>

<section style='background-color: #f0f0f0; padding: 20px 0px;' class="home-project">
	<div class="container">
		<div class="box-title" style='text-align: center;'>
		  <h2><span style='color:#ed3237'>DỰ ÁN</span> NỔI BẬT</h2>
		  <p><img src='/public/upload/files/line.png'></p>
		</div>
		<div class="box-content">
		  <div class="row">
			  @foreach($duantieubieu as $val)
			  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="item">
				  <div class="col-item">
					<div class="item-inner" style='background-color: #fff;'>
					  <div class="product-wrapper">
						<div class="thumb-wrapper">
						  <a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html">
							<img style='width: 100%;height: 220px;object-fit: cover;' src="{{$val->img}}" alt="{{$val->name}}">
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

<section style='padding: 20px 0px;' class="home-project">
	<div class="container">
		<div class="box-title" style='text-align: center;'>
		  <h2><span style='color:#ed3237'>TIN TỨC</span> THỊ TRƯỜNG</h2>
		  <p><img src='/public/upload/files/line.png'></p>
		</div>
		<div class="box-content">
		  <div class="row">
			  @foreach($sidebar_news as $val)
			  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
				<div class="item">
				  <div class="col-item">
					<div class="item-inner" style='background-color: #fff;'>
					  <div class="product-wrapper">
						<div class="thumb-wrapper">
						  <a href="{{$val->slug}}/{{$val->id}}.html">
							<img class='homenew' style='' src="{{$val->img}}" alt="{{$val->name}}">
						  </a>
						</div>
					  </div>
					  <div class="item-info">
						<div class="item-content">
							<div class="item-title" style='max-height: 40px;'><a href="{{$val->slug}}/{{$val->id}}.html">{{$val->name}}</a> </div>
							<div class="item-vendor" style='height: 86px; overflow: hidden;'> {{$val->detail}} </div>
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

<section style='background-color: #f0f0f0;padding: 30px 0px 20px; 0px ' class="home-block-three">
  <div class="container">
	<div class="box-title" style='text-align: center;'>
      <h2><span style='color:#ed3237'>VIETHOME </span> WATCH</h2>
	  <p><img src='/public/upload/files/line.png'></p>
    </div>
    <div class="row">
		@foreach($video as $val)
		<div class="col-md-4">
			<div class="banner-mid" style='margin-bottom: 10px;'>
			  <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{$val->video}}" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		@endforeach
    </div>
  </div>
</section>

<section style='padding: 30px 0px 20px; 0px' class="home-news hidden-xs">
  <div class="container">
    <div class="box-title" style='text-align: center;'>
      <h2><span style='color:#ed3237'>TẠI SAO LỰA CHỌN</span> VIETHOME </h2>
	  <p><img src='/public/upload/files/line.png'></p>
    </div>
    <div class="row">
		<div class="col-md-3">
			<div class="dx-action7_content"><a href="#"><i class="fa fa-info"></i></a><h4>Thông tin chính thống</h4><ul><li>Cập nhật trực tiếp từ chủ đầu tư</li><li>Mới nhất</li><li>Chính xác nhất</li></ul></div>
		</div>
		<div class="col-md-3">
			<div class="dx-action7_content"><a href="#"><i class="fa fa-thumbs-up"></i></a><h4>Đối tác uy tín</h4><ul><li>Pháp lý rõ ràng</li><li>Chính sách bán hàng tốt nhất</li><li>Đảm bảo quyền lợi khách hàng</li></ul></div>
		</div>
		<div class="col-md-3">
			<div class="dx-action7_content"><a href="#"><i class="fa fa-cogs"></i></a><h4>Giải pháp đồng bộ</h4><ul><li>Tư vấn mua và thuê nhà từ A-Z</li><li>Tư vấn nội thất tài chính và pháp lý</li><li>Tư vấn nội thất tài chính và pháp lý</li></ul></div>
		</div>
		<div class="col-md-3">
			<div class="dx-action7_content"><a href="#"><i class="fa fa-usd"></i></a><h4>Sinh lời tối đa</h4><ul><li> Đầu tư hiệu quả</li><li> Giá trị căn hộ tăng theo thời gian</li><li>Đa dạng dòng sản phẩm</li></ul></div>
		</div>
    </div>
  </div>
</section>

<section class='home-iteam'>
	<div><img src='https://datxanhmienbac.com.vn/public/images/home-tu-van-noi-that.png' /></div>
	<div class="t-item noithat">
		<h3 style='margin-top: 0px;'>Tư vấn nội thất</h3>
		<p class="hidden-xs">Tham khảo các dự án có thiết kế ấn tượng từ các chuyên gia nội thất hàng đầu, giúp bạn hiện thực hóa giấc mơ về căn hộ hiện đại & cao cấp trong tầm tay.</p>
		<a class='xemthem' href='http://www.bdsnghetinh.net/noi-that'>XEM THÊM</a>
	</div>
	<div class='clr'></div>
	<div class="t-item moban">
		<h3 style='margin-top: 0px;'>Sự kiện mở bán</h3>
		<p class="hidden-xs">Khách hàng có thể nhận được những ưu đãi mới nhất từ Chủ Đầu Tư cũng nhữ những phần quà từ các chương trình khuyến mãi từ Tân Long Land</p>
		<a class='xemthem' href='http://www.bdsnghetinh.net/su-kien-mo-ban'>XEM THÊM</a>
	</div>
	<div><img src='https://datxanhmienbac.com.vn/public/images/home-tu-van-tai-chinh.png' /></div>
	<div class='clr'></div>
</section>

<section class='doitac'>
	<div class="container">
		<div class="box-title">
			<h2>ĐỐI TÁC CỦA VIETHOME </h2>
			<p><img src='/public/upload/files/line.png'></p>
			<p>Chúng tôi hợp tác với những đối tác hàng đầu trong lĩnh vực đầu tư bất động sản, tài chính, thiết kế nội thất... nhằm cung cấp cho gia đình bạn giải pháp mua và thuê đồng bộ và hiệu quả</p>
		</div>
	</div>
	<div class="container">
		<div class="col-md-2 col-xs-6"><img src='https://datxanhmienbac.com.vn/public/images/company-01.jpg' /></div>
		<div class="col-md-2 col-xs-6"><img src='https://datxanhmienbac.com.vn/public/images/company-02.jpg' /></div>
		<div class="col-md-2 col-xs-6"><img src='https://datxanhmienbac.com.vn/public/images/company-08.jpg' /></div>
		<div class="col-md-2 col-xs-6"><img src='https://datxanhmienbac.com.vn/public/images/company-10.jpg' /></div>
		<div class="col-md-2 col-xs-6"><img src='https://datxanhmienbac.com.vn/public/images/company-04.jpg' /></div>
		<div class="col-md-2 col-xs-6"><img src='https://datxanhmienbac.com.vn/public/images/company-06.jpg' /></div>
	</div>
</section>


@endsection