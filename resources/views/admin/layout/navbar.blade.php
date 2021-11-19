<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" target="_blank" href="{{asset('')}}"><span style='font-size: 24px;'>views wwebsite</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						@if(Auth::User())
						<li class="">
							<a class="btn" href="#">
								<i class="halflings-icon white user"></i> {{Auth::User()->name}}
							</a>
						</li>
						@endif
						<li class="">
							<a class="btn" href="admin/logout">
								<i class="halflings-icon white off"></i> Logout
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>