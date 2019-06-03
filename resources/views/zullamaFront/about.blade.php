@extends('zullamaLayout.index')
@section('zullama-content')
<!-- banner start -->
<!-- ================ -->
<div class="banner video-background-banner pv-40 dark-translucent-bg hovered">
	<!-- breadcrumb start -->
	<!-- ================ -->
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="{{ URL::to('/')}}">{!!trans('home.home')!!}</a></li>
				<li class="active"> {!!trans('about.qui_sommes')!!} </li>
			</ol>
		</div>
	</div>
	<!-- breadcrumb end -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20">
				<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">{!!trans('about.a_propos')!!}</h2>
				<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
				<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">{!!trans('home.qui_sommes_nous_content')!!}</p>
			</div>
		</div>
	</div>

</div>

<section class="main-container">
	<div class="container">
		<div class="row">
			<div class="main col-md-12">
				<div class="row">
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon without-bg"><i class="fa fa-diamond"></i></span>
							<div class="body">
								<h4 class="title"> {!!trans('home.solid_antecedent')!!} </h4>
								<p>{!!trans('home.solid_antecedent_content')!!}</p>
<!--								<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
							<span class="icon without-bg"><i class="fa fa-connectdevelop"></i></span>
							<div class="body">
								<h4 class="title"> {!!trans('home.detail_aime')!!}</h4>
								<p>{!!trans('home.detail_aime_content')!!}</p>
<!--								<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
							</div>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon without-bg"><i class="fa icon-snow"></i></span>
							<div class="body">
								<h4 class="title"> {!!trans('home.last_techno')!!} </h4>
								<p>{!!trans('home.last_techno_content')!!}</p>
<!--								<a href="#"> {!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a>-->
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon without-bg"><i class="fa fa-heart"></i></span>
							<div class="body">
								<h4 class="title"> {!!trans('home.code_lover')!!} </h4>
								<p>{!!trans('home.love_code')!!}</p>
<!--								<a href="#">{!!trans('home.en_plus')!!}e<i class="pl-5 fa fa-angle-double-right"></i></a>-->
							</div>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
							<span class="icon without-bg"><i class="fa fa-cogs"></i></span>
							<div class="body">
								<h4 class="title"> {!!trans('home.flexible')!!} </h4>
								<p>{!!trans('home.flexible_content')!!}</p>
<!--								<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
							</div>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon without-bg"><i class="fa icon-lifebuoy"></i></span>
							<div class="body">
								<h4 class="title"> {!!trans('home.accompagne')!!} </h4>
								<p>{!!trans('home.accompagne_content')!!}</p>
<!--								<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
							</div> 
						</div>
					</div>
				</div>
			</div>
			<!-- main end -->

		</div>
	</div>
</section>
<section class="main-container">
<div class="container">
	<div class="row">

		<!-- main start -->
		<!-- ================ -->
		<div class="main col-md-12">
			<h3 class="title">Who <strong>We Are</strong></h3>
			<div class="separator-2"></div>
			<div class="row">
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illo vero cupiditate, sed enim voluptatibus provident consectetur. Quo dolor sunt nostrum, eligendi illo accusamus odit, ipsam excepturi voluptatem nulla minus.</p>
					<p>Blanditiis aspernatur, non quasi, maxime corporis officiis quia. Cupiditate, voluptatibus ducimus, natus, labore mollitia dolorem incidunt voluptatum, delectus eius fugit porro placeat animi voluptatem autem hic eligendi sint. Amet pariatur odit repudiandae sunt. Rem ipsum dolor sit amet, consectetur adipisicing elit. Sunt asperiores a.</p>
					<ul class="list-icons">
						<li><i class="icon-check-1"></i> We are here to support you</li>
						<li><i class="icon-check-1"></i> Free updates</li>
						<li><i class="icon-check-1"></i> Unlimited options and variations</li>
						<li><i class="icon-check-1"></i> ipsam asperiores fugiat quo</li>
					</ul>
				</div>
				<div class="col-md-6">
					<div class="owl-carousel content-slider-with-controls">
						<div class="overlay-container overlay-visible">
							<img src="z_assets/images/page-about-1.jpg" alt="">
							<div class="overlay-bottom hidden-xs">
								<div class="text">
									<h3 class="title">We Can Do It</h3>
								</div>
							</div>
							<a href="z_assets/images/page-about-1.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
						</div>
						<div class="overlay-container overlay-visible">
							<img src="images/page-about-2.jpg" alt="">
							<div class="overlay-bottom hidden-xs">
								<div class="text">
									<h3 class="title">You Can Trust Us</h3>
								</div>
							</div>
							<a href="images/page-about-2.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
						</div>
						<div class="overlay-container overlay-visible">
							<img src="z_assets/images/page-about-3.jpg" alt="">
							<div class="overlay-bottom hidden-xs">
								<div class="text">
									<h3 class="title">We Love What We Do</h3>
								</div>
							</div>
							<a href="images/page-about-3.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main end -->

	</div>
</div>
</section>

<section class="object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
	<div class="full-width-section">
		<div class="full-image-container hovered">
			
		</div>
		<div class="full-text-container light-gray-bg border-bottom-clear">
			<h2 class="text-center">{!!trans('home.pourquoi')!!} {!!trans('home.nous')!!} <strong>{!!trans('home.choisir')!!}</strong> ?</h2>
			<div class="separator-2 visible-lg"></div>
			<p>{!!trans('home.pourquoi_content')!!}</p>
			<div class="separator-3 visible-lg"></div>
			<a href="mailto:" class="btn btn-default btn-animated">Nous contacter <i class="pl-5 fa fa-envelope-o"></i></a>
		</div>
	</div>
</section>

<section class="section pv-40 stats">
	<div class="container">
	@if(!empty($teams))	<h3 class="text-center title"> {!!trans('home.notre')!!}<strong>{!!trans('home.equipe')!!}</strong></h3> @endif
		<div class="separator"></div>
		@foreach($teams as $team)
		<div class="image-box team-member style-3-b">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="overlay-container overlay-visible">
						<img src="z_assets/images/team-member-1.jpg" alt="">
						<a href="z_assets/images/team-member-1.jpg" class="popup-img overlay-link" title="Jane Doe - CEO"><i class="icon-plus-1"></i></a>
						<div class="overlay-bottom hidden-xs">
							<div class="text">
								<p class="small margin-clear"><em>Some info <br> </em></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-6">
					<div class="body">
						<h3 class="title margin-clear">{{$team['first_name']}} {{$team['last_name']}} - <small>{{$team['role']}}</small></h3>
						<div class="separator-2 mt-10"></div>
						<p>{{$team['parcours']}}</p>
						<ul class="social-links circle margin-clear colored">
							<li class="linkedin"><a target="_blank" href="{{$team['linkedin']}}"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<br>
						<a href="tel:123123123123123" class="btn btn-gray-transparent"><i class="pr-10 fa fa-phone"></i>Call</a>
						<a href="mailto:info-contact@zullama.com" class="btn btn-gray-transparent"><i class="pr-10 fa fa-envelope-o"></i>Contact</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<h3 class="text-center">Quelques <strong>Informations</strong> sur <span class="logo-font"><span class="text-muted"></span> <span class="text-default">Zullama</span></span></h3>
		<div class="separator-2 mb-20"></div>
		<div class="row">
			<div class="col-md-3 col-xs-6 text-center">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
					<span class="icon without-bg text-center"><i class="text-default fa fa-diamond"></i></span>
					<h3>Projets</h3>
					<span class="counter" data-to="1525" data-speed="5000">0</span>
				</div>
			</div>
			<div class="col-md-3 col-xs-6 text-center">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
					<span class="icon without-bg text-center"><i class="text-default fa fa-users"></i></span>
					<h3>Clients</h3>
					<span class="counter" data-to="1225" data-speed="5000">0</span>
				</div>
			</div>
			
			<div class="col-md-3 col-xs-6 text-center">
				<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
					<span class="icon without-bg text-center"><i class="text-default fa fa-share"></i></span>
					<h3>Partager</h3>
					<span class="counter" data-to="15002" data-speed="5000">0</span>
				</div>
			</div>
		</div>
		<!--<div class="clients-container">
			<div class="clients">
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
					<a href="#"><img src="images/client-1.png" alt=""></a>
				</div>
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="200">
					<a href="#"><img src="images/client-2.png" alt=""></a>
				</div>
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
					<a href="#"><img src="images/client-3.png" alt=""></a>
				</div>
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="400">
					<a href="#"><img src="images/client-4.png" alt=""></a>
				</div>
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="500">
					<a href="#"><img src="images/client-5.png" alt=""></a>
				</div>
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="600">
					<a href="#"><img src="images/client-6.png" alt=""></a>
				</div>
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="700">
					<a href="#"><img src="images/client-7.png" alt=""></a>
				</div>
				<div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="800">
					<a href="#"><img src="images/client-8.png" alt=""></a>
				</div>
			</div>
		</div>	-->				
		<div class="separator-3"></div>
	</div>
</section>
<!-- section end -->
<!-- section start -->
<!-- ================ -->
<section class="pv-40 ding-bottom-clear parallax dark-translucent-bg hovered background-img-4">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="testimonial text-center">
					<div class="testimonial-image">
						<img src="z_assets/images/testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
					</div>
					<h3>Sper!</h3>
					<div class="separator"></div>
					<div class="testimonial-body">
						<blockquote>
							<p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
						</blockquote>
						<div class="testimonial-info-1">- xxxx</div>
						<div class="testimonial-info-2">Par XXXX</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<!-- section end -->
@endsection