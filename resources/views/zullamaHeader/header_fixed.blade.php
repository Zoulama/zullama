 <header class="header  fixed    clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-3 ">
				<div class="header-left clearfix">
					<div class="header-dropdown-buttons visible-xs">
						<div class="btn-group dropdown">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></button>
							<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
								<li>
									<form role="search" class="search-box margin-clear">
										<div class="form-group has-feedback">
											<input type="text" class="form-control" placeholder="Search">
											<i class="icon-search form-control-feedback"></i>
										</div>
									</form>
								</li>
							</ul>
						</div>
					</div>
					<div id="logo" class="logo inline">
						<a href="{{ URL::to('/')}}"><img id="logo_img" src="/z_assets/logo/zullama_logo.png"></a>
					</div>
					<div class="site-slogan">
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="header-right clearfix">
				<div class="main-navigation  animated with-dropdown-buttons">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
									<span class="sr-only"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="collapse navbar-collapse" id="navbar-collapse-1">
								<ul class="nav navbar-nav ">
									<li class=" @if(Request::is('/')) active @endif mega-menu" >
										<a href="{{ URL::to('/')}}">
											{!!trans('home.home')!!}
										</a>
									</li>

									<li class=" mega-menu @if(Request::is('secteurs')) active @endif" >
										<a href="{{ URL::to('/secteurs')}}">
											{!!trans('home.secteurs')!!}
										</a>
									</li>

									<li class=" mega-menu @if(Request::is('services')) active @endif" >
										<a href="{{ URL::to('/services')}}">
											{!!trans('home.services')!!}
										</a>
									</li>

									<li class="mega-menu @if(Request::is('realisation')) active @endif">
										<a href="{{ URL::to('/realisation')}}">
											{!!trans('home.realisations')!!}
										</a>
									</li>
									<li class="mega-menu @if(Request::is('team') ||
											 Request::is('team/*'))  active @endif"> 
										<a href="{{ URL::to('/team')}}">
											{!!trans('home.equipe')!!}
										</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>
				</div>
			</div>
		</div>
	</div>
</header>