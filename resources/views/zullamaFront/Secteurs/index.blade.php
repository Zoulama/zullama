@extends('zullamaLayout.index')
@section('zullama-content')
<div class="banner dark-translucent-bg" style="background-image:url('z_assets/images/page-services-banner.jpg'); background-position: 50% 32%;">
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="{{ URL::to('/')}}">{!!trans('home.home')!!}</a></li>
				<li class="active">{!!trans('secteur.secteur')!!}</li>
			</ol>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20">
				<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Nos <strong>Secteurs d'activité</strong></h2>
				<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
				<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
					{!!trans('secteur.description')!!}
				</p>
			</div>
		</div>
	</div>
</div>

<section class="main-container padding-bottom-clear">
	<div class="container">
		<div class="row">
			<div class="main col-md-12">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon large default-bg circle">
								<i class="fa fa-industry"></i>
							</span>
							<h3>{!!trans('secteur.industrie')!!}</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon large dark-bg circle"><i class="fa fa-newspaper-o"></i></span>
							<h3>{!!trans('secteur.media')!!}</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<span class="icon large default-bg circle">
								<i class="fa fa-shopping-cart"></i></span>
							<h3>{!!trans('secteur.e_commerce')!!}</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a> -->
						</div>
					</div>
					<div class="clearfix visible-md"></div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon large dark-bg circle"><i class="fa fa-phone"></i></span>
							<h3>{!!trans('secteur.telecom')!!}</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon large default-bg circle"><i class="fa fa-subway"></i></span>
							<h3>{!!trans('secteur.transport')!!}</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<span class="icon large dark-bg circle"><i class="fa fa-medkit"></i></span>
							<h3>{!!trans('secteur.sante')!!}</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a> -->
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="section default-bg clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">
					<div class="row">
						<div class="col-sm-8">
							<h1 class="title">{!!trans('home.nos')!!} {!!trans('home.realisation')!!}</h1>
							<p></p>
						</div>
						<div class="col-sm-4">
							<br>
							<p>
								<a href="{{ URL::to('/realisation')}}" class="btn btn-lg btn-gray-transparent btn-animated"> 
									{!!trans('home.en_plus')!!} 
									<i class="fa fa-arrow-right pl-20"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section light-gray-bg pv-40 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h2 class="title">Nous rejoindre</h2>
							<p>Nous vous recontacterons</p>
							<div class="separator"></div>
							<form class="form-inline margin-clear">
								<div class="form-group has-feedback">
									<label class="sr-only" for="subscribe2">Email</label>
									<input type="email" class="form-control" id="subscribe2" placeholder="Enter email" name="subscribe2" required="">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Envoyer<i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection