@extends('layout.index')

@section('title')
Liên hệ với chúng tôi để nhận những thông tin ưu đãi sớm nhất
@endsection
@section('description')
Liên hệ với chúng tôi để nhận những thông tin ưu đãi sớm nhất, nhận bảng giá mới nhất và chính sách nhất, đăng ký đi xem căn hộ mẫu ...
@endsection
@section('keywords')

@endsection
@section('robots')
index, follow
@endsection
@section('url')
<?php echo asset('').'lien-he'; ?>
@endsection

@section('content')
<section class="main-container col2-left-layout">
    <div class="container gioi-thieu">
		<H1>THÔNG TIN LIÊN HỆ</H1>
       
		<hr>
		<div class="row">
            <div class="col-md-6" style='padding-top: 10px;text-align: justify;'> 
				<p><b>Địa chỉ:</b> {{$head_setting->address}} </p>
				<p><b>Điện thoại:</b> {{$head_setting->hotline}}  </p>
				@if($head_setting->hotline1)
				<p><b>Điện thoại:</b> {{$head_setting->hotline1}}  </p>
				@endif
				<p><b>Email:</b> {{$head_setting->email}}  </p>
				<br>
				<form class="footer-newsletter" action="dang-ky" method="post">
					<input style='border: 1px solid #ddd;' typr="name" name="email" placeholder="Họ & Tên" />
					<input style='border: 1px solid #ddd;' typr="email" name="email" placeholder="Email của bạn" />
					<input style='border: 1px solid #ddd;' typr="phone" name="phone" placeholder="Số điện thoại" />
					<button style='background-color: #ff7c35;' class="btn-newsletter" type="submit" value="Đăng ký" name="submitNewsletter">Đăng ký <i class="fa fa-long-arrow-right"></i></button>
				</form>
			</div>
            <div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.933959452981!2d105.67140821427007!3d18.66695926955413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce633e1589c5%3A0x4defd7337a2c8ac9!2zQ8O0bmcgdHkgQ1AgROG7i2NoIFbhu6UgVsOgIMSQ4buLYSDhu5BjIMSQ4bqldCBYYW5oIE1p4buBbiBC4bqvYyBjaGkgbmjDoW5oIE5naOG7hyBBbg!5e0!3m2!1svi!2s!4v1513322568039" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
        </div>
    </div>
</section>

@endsection
