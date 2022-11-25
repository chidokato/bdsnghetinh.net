<nav class="hidden-desktop" id="site-nav">
	<div class="">
		<div class="nav-inner">
			<!-- mobile-menu -->
			<div  id="mobile-menu">
				<ul class="navmenu">
					<li>
						<div class="menutop">
							<div class="toggle">
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span>
							</div>
							<div class="logo">
								<a href="{{asset('')}}">
									@foreach($head_logo as $val)
									<img style="height: 35px; margin: 10px 0px;" alt="đất xanh nghệ an" src="{{$val->img}}">
									@endforeach
								</a> 
							</div>
						</div>
						<ul style="display:none;" class="submenu">
							<li>
								<ul class="topnav">
									<li>
										<a href='gioi-thieu'>Giới thiệu</a>
									</li>
									@foreach($head_category as $item)
										@if($item['parent'] == 0)
											<li>
												<a href="{{$item->slug}}">{{$item->name}}</a>
												<?php $count = DB::table('tbl_category')->where('parent',$item->id)->count(); ?>
												<?php if($count>0) { subcategory ($head_category,$item['id']); } ?>
											</li>
										@endif
									@endforeach
									<li>
										<a href='lien-he'>Liên hệ</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div> 
</nav>
			<!--End mobile-menu -->
<nav class="hidden-xs" id="site-nav">
	<div class="container">
		<div class="nav-inner">
			<ul id="nav"  style='float: left;'>
				@foreach($head_logo as $val)
				<a href="{{asset('')}}"><li><img style='height: 70px;' src='{{$val->img}}' /></li></a>
				@endforeach
			</ul>
			<ul id="nav"  style='float: right;'>
				<li class="home first"><a href="{{asset('')}}">TRANG CHỦ</a></li>
				<li><a  href="gioi-thieu">GIỚI THIỆU</a></li>
				@foreach($head_category as $item)
					@if($item['parent'] == 0)
						<li>
							<a href="{{$item->slug}}">{{$item->name}}</a>
							<?php $count = DB::table('tbl_category')->where('parent',$item->id)->count(); ?>
							<?php if($count>0) { subcategory ($head_category,$item['id']); } ?>
						</li>
					@endif
				@endforeach
				<li><a href='lien-he'>Liên hệ</a></li>
			</ul>
		</div>
	</div> 
</nav>


