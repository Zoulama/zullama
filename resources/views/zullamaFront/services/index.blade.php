@extends('zullamaLayout.index')
@section('zullama-content')
<div class="banner dark-translucent-bg" style="background-image:url('z_assets/images/page-services-banner.jpg'); background-position: 50% 32%;">
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="{{ URL::to('/')}}">{!!trans('home.home')!!}</a></li>
				<li class="active">{!!trans('service.services')!!}</li> 
			</ol>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20">
				<h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
					<font color="#f18d05">
						<strong>{!!trans('service.z_factu_title')!!}</strong>
					</font>
				</h2>
				<div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
				<p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">{!!trans('service.intro')!!}</p>
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
							<span class="icon large default-bg circle"><i class="fa fa-clock-o"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_1')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon large dark-bg circle"><i class="fa icon-doc-text-inv"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_2')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<span class="icon large default-bg circle"><i class="icon-mail"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_3')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="clearfix visible-md"></div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon large dark-bg circle"><i class="icon-mobile"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_4')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon large default-bg circle"><i class="icon-credit-card"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_5')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<span class="icon large dark-bg circle"><i class="fa fa-object-group"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_6')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="clearfix visible-md"></div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon large dark-bg circle"><i class="fa fa-file-pdf-o"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_7')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon large default-bg circle"><i class="fa fa-file-image-o"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_8')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<span class="icon large dark-bg circle"><i class="fa fa-eye"></i></span>
							<h3></h3>
							<div class="separator clearfix"></div>
							<p class="text-muted"><strong>{!!trans('service.zf_9')!!}</strong></p>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a> -->
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
							<h1 class="title">{!!trans('service.teste')!!}</h1>
							<p>{!!trans('service.info_zf')!!}</p> 
						</div>
						<div class="col-sm-4">
							<br>
							<p>
								<a href="#" class="btn btn-lg btn-gray-transparent btn-animated"> 
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
<section class="pv-20 padding-bottom-clear clearfix">
	<div class="container">
		<h2 class="text-center"> {!!trans('service.service_supple')!!} </h2>
		<div class="separator"></div>
		<p class="text-center space-bottom"><strong>{!!trans('service.content_servi')!!}</strong></p>
		<div class="row">
			<div class="col-md-6 space-top">
				<br>
				<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon without-bg"><i class="fa fa-calendar-minus-o"></i></span>
					<div class="body">
						<h4 class="title"></h4>
						<p>
						<strong>{!!trans('service.zf_13')!!} </strong>
							<!--<a href="#">{!!trans('home.en_plus')!!}<i class="pl-5 fa fa-angle-double-right"></i></a>-->
						</p>
						<div class="separator-3"></div>
					</div>
				</div>
				<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
					<span class="icon without-bg"><i class="fa fa-cogs"></i></span>
					<div class="body">
						<p>
							<strong>{!!trans('service.zf_11')!!}</strong>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a>-->
						</p>
						<div class="separator-3"></div>
					</div>
				</div>
				<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
					<span class="icon without-bg"><i class="fa fa-bell"></i></span>
					<div class="body">
						<p>
							<strong>{!!trans('service.zf_12')!!}</strong>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a> -->
						</p>
						<div class="separator-3"></div>
					</div>
				</div>
				<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
					<span class="icon without-bg"><i class="fa fa-arrow-circle-o-right"></i></span>
					<div class="body">
						<p>
							<strong>{!!trans('service.zf_10')!!}</strong>
							<!--<a href="#">{!!trans('home.en_plus')!!}
								<i class="pl-5 fa fa-angle-double-right"></i>
							</a>-->
						</p>
						<div class="separator-3"></div>
					</div>
				</div>
				
			</div>
			<div class="col-md-6">
				<img src="images/service-image-1.png" alt="">
			</div>
		</div>

<!--		<div class="pricing-tables circle-head object-non-visible" data-animation-effect="fadeInUpSmall"  data-effect-delay="0">
			<div class="row grid-space-10">
				<div class="col-sm-4">

					<div class="plan shadow light-gray-bg bordered">
						<div class="header dark-bg">
							<h3>{!!trans('service.facturation_op.basic.label')!!}</h3>
							<div class="price"><span>{!!trans('service.facturation_op.basic.prix')!!}</span>{!!trans('service.par_mois')!!}</div>
						</div>
						<ul class="">
							<li>{!!trans('service.facturation_op.basic.user')!!}</li>
							<li>
								<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="50GB Storage" data-trigger="hover">50GB Storage</a>
							</li>
							<li>
								<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15 Email Acounts">1 Email Acounts</a>
							</li>
							
							<li><a class="btn btn-dark radius-50 btn-animated btn-lg">{!!trans('service.subcribe')!!} <i class="fa fa-user"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="plan shadow light-gray-bg bordered best-value">
						<div class="header default-bg">
							<h3>{!!trans('service.facturation_op.premium.label')!!}</h3>
							<div class="price"><span>{!!trans('service.facturation_op.premium.prix')!!}</span>{!!trans('service.par_mois')!!}</div>
						</div>
						<ul>
							<li>{!!trans('service.facturation_op.premium.label')!!}</li>
							<li>Unlimited Disk Space</li>
							<li>
								<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Unlimited Subdomains">Unlimited Email Acounts</a>
							</li>        
							<li>Subdomains</li>
							
							<li><a class="btn btn-default btn-animated btn-lg radius-50">{!!trans('service.subcribe')!!} <i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>

				</div>
				<div class="col-sm-4">

					<div class="plan shadow light-gray-bg bordered">
						<div class="header dark-bg">
							<h3>{!!trans('service.facturation_op.pro.label')!!}</h3>
							<div class="price"><span>{!!trans('service.facturation_op.pro.prix')!!}</span>{!!trans('service.par_mois')!!}</div>
						</div>
						<ul>
							<li>{!!trans('service.facturation_op.pro.user')!!}</li>
							<li>
								<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Enchaned Security">Enchaned Security</a>
							</li>
							<li><a class="btn btn-dark btn-animated btn-lg radius-50">{!!trans('service.subcribe')!!} <i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
@endsection