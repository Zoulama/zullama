@extends('zullamaLayout.index')
@section('zullama-content')
<div class="banner default-translucent-bg" style="background-image:url('/z_assets/images/page-about-me-banner.jpg');background-position:50% 0;">
		<div class="breadcrumb-container">
			<div class="container">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="{{ URL::to('/')}}">{!!trans('home.home')!!}</a></li>
					<li class="active"><a class="link-dark" href="{{ URL::to('/team')}}">{!!trans('team.equipe')!!}</a></li> 
					<li class="active">{{$team['name']}}</li></li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					<h1 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">{{$team['nom_prenom']}}</h1>
					<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">XXXXXXXX.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="page-title">{{$team['nom_prenom']}}</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-sm-4">
							<div class="image-box team-member shadow mb-20">
								<div class="overlay-container overlay-visible">
									<img src="/z_assets/images/team-member-3.jpg" alt="">
									<a href="/z_assets/images/team-member-3.jpg" class="popup-img overlay-link" title="Jane Doe - CEO"><i class="icon-plus-1"></i></a>
									<div class="overlay-bottom">
										<div class="text">
											<h3 class="title margin-clear">{{$team['nom_prenom']}}</h3>
											<p class="margin-clear">{{$team['role']}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-5">
							<p align="left">
							{{$team['description']}}
							</p>
							<div class="progress style-2 dark">
								<span class="text"></span>
								<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
									<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">XXXX</span>
								</div>
							</div>
							<div class="progress style-2 dark">
								<span class="text"></span>
								<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="85%">
									<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">XXXX</span>
								</div>
							</div>
							<div class="progress style-2 dark">
								<span class="text"></span>
								<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
									<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">XXXX</span>
								</div>
							</div>
							<div class="progress style-2 dark">
								<span class="text"></span>
								<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="80%">
									<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">XXXX</span>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-lg-offset-1">
							<h3 class="title">{!!trans('team.me_contacter')!!}</h3>
							<ul class="list-icons">
								<li><i class="fa fa-phone pr-10 text-default"></i>  +33 00000000</li>
								<li><i class="fa fa-mobile pr-10 text-default"></i> +33 00000000</li>
								<li><a href="mailto:info@janedoe.com"><i class="fa fa-envelope-o pr-10"></i>{{$team['email']}}</a></li>
							</ul>
							<h3>{!!trans('team.suivez_moi')!!}</h3>
							<div class="separator-2"></div>
							<a target="_blank" href="{{$team['linkedin']}}" class="btn btn-animated linkedin btn-sm">{!!trans('team.linkedin')!!}<i class="pl-10 fa fa-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	
	<div class="dark-bg  default-hovered footer-top animated-text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="call-to-action text-center">
						<div class="row">
							<div class="col-sm-8">
								<h2>xxxxx</h2>
								<h2>xxxxx</h2>
							</div>
							<div class="col-sm-4">
								<p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent "><i class="fa fa-cart-arrow-down pl-20"></i>XXXXX</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection