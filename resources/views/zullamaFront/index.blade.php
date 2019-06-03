@extends('zullamaLayout.index')
@section('zullama-content')
<div class="banner clearfix">
	<div class="slideshow">
		<div class="slider-banner-container">
			<div class="slider-banner-fullscreen">
				<ul class="slides">
					<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">

					<img src="z_assets/images/slider-fullscreen-slide-1.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
					
					<div class="tp-caption dark-translucent-bg" data-x="center" data-y="bottom"              
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="0">
					</div>

					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfr stl xlarge_white"
						data-x="center"
						data-y="70"
						data-speed="200"
						data-easing="easeOutQuad"
						data-start="1000"
						data-end="2500"
						data-splitin="chars"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-splitout="chars">
						{!!trans('home.inspiration')!!}
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfl str xlarge_white"
						data-x="center"
						data-y="70"
						data-speed="200"
						data-easing="easeOutQuad"
						data-start="2500"
						data-end="4000"
						data-splitin="chars"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-splitout="chars">
						{!!trans('home.innovation')!!}
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfr stt xlarge_white"
						data-x="center"
						data-y="70"
						data-speed="200"
						data-easing="easeOutQuad"
						data-start="4000"
						data-end="6000"
						data-splitin="chars"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-splitout="chars"
						data-endspeed="400">
						 {!!trans('home.succes')!!}
					</div>					

					<!-- LAYER NR. 4 -->
					<div class="tp-caption sft fadeout text-center large_white"
						data-x="center"
						data-y="70"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="6400"
						data-end="10000"><span class="logo-font"> <span class="text-default">ZULLAMA</span></span> <br> Oui c'est possible
					</div>	

					<!-- LAYER NR. 9 -->
					<div class="tp-caption sft fadeout medium_white text-center"
						data-x="center"
						data-y="210"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="5800"
						data-end="10000"
						data-endspeed="600">
						{!!trans('home.text_slog')!!}
					</div>

					<!-- LAYER NR. 10 -->
					<div class="tp-caption fade fadeout"
						data-x="center"
						data-y="bottom"
						data-voffset="100"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="2000"
						data-end="10000"
						data-endspeed="200">
						<a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
					</div>
					</li>

					<li data-transition="random-static" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="">
					
					<img src="z_assets/images/slider-fullscreen-slide-2.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

					<div class="tp-caption dark-translucent-bg"
						data-x="center"
						data-y="bottom"
						data-speed="500"
						data-easing="easeOutQuad"
						data-start="0">
					</div>

					<!-- LAYER NR. 1 -->
					<div class="tp-caption sfb fadeout large_white"
						data-x="left"
						data-y="70"
						data-speed="500"
						data-start="1000"
						data-easing="easeOutQuad"
						data-end="10000"><span class="logo-font">{!!trans('home.app_name')!!}</span> <br>
					</div>	

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="200" 
						data-speed="500"
						data-start="1300"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span> {!!trans('home.response')!!}
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="260" 
						data-speed="500"
						data-start="1600"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-check"></i></span> {!!trans('home.design')!!}
					</div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="320" 
						data-speed="500"
						data-start="1900"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-gift"></i></span> {!!trans('home.techno')!!}
					</div>

					<!-- LAYER NR. 5 -->
					<div class="tp-caption sfb fadeout text-left medium_white"
						data-x="left"
						data-y="380" 
						data-speed="500"
						data-start="2200"
						data-easing="easeOutQuad"
						data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="icon-hourglass"></i></span> {!!trans('home.custom')!!}
					</div>

					<!-- LAYER NR. 6 -->
<!--					<div class="tp-caption sfb fadeout small_white"
						data-x="left"
						data-y="450"
						data-speed="500"
						data-start="2500"
						data-easing="easeOutQuad"
						data-endspeed="600"><a href="#" class="btn btn-default btn-lg btn-animated">En savoir plus <i class="fa fa-eye"></i></a>
					</div>-->
					</li>
					<!-- slide 2 end -->
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
	</div>
</div>

<div id="page-start"></div>

<section class="light-gray-bg pv-30 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!--<h2 class="text-center">Core <strong>Features</strong></h2> -->
				<div class="separator"></div>
				<p class="large text-center"></p>
			</div>
			<div class="row">
				<div class="col-md-4 ">
					<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
						<h3>{!!trans('home.solid_antecedent')!!}</h3>
						<div class="separator clearfix"></div>
						<p align="left">{!!trans('home.solid_antecedent_content')!!}</p>
<!--						<a href="{{URL::to('/a-propos')}}"> {!!trans('home.en_plus')!!} <i class="pl-5 fa fa-angle-double-right"></i></a> -->
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
						<span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
						<h3>{!!trans('home.flexible')!!}</h3>
						<div class="separator clearfix"></div>
						<p align="left">{!!trans('home.flexible_content')!!}</p>
<!--						<a href="{{URL::to('/a-propos')}}"> {!!trans('home.en_plus')!!} <i class="pl-5 fa fa-angle-double-right"></i></a> -->
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
						<span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
						<h3>{!!trans('home.last_techno')!!}</h3>
						<div class="separator clearfix"></div>
						<p>{!!trans('home.last_techno_content')!!}</p>
<!--						<a href="{{URL::to('/a-propos')}}"> {!!trans('home.en_plus')!!} <i class="pl-5 fa fa-angle-double-right"></i></a> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ">
					<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<span class="icon default-bg circle"><i class="fa fa-heart"></i></span>
						<h3>{!!trans('home.code_lover')!!}</h3>
						<div class="separator clearfix"></div>
						<p align="left">{!!trans('home.love_code')!!}</p>
<!--						<a href="{{URL::to('/a-propos')}}"> {!!trans('home.en_plus')!!} <i class="pl-5 fa fa-angle-double-right"></i></a> -->
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
						<span class="icon default-bg circle"><i class="fa fa-cogs"></i></span>
						<h3>{!!trans('home.detail_aime')!!}</h3>
						<div class="separator clearfix"></div>
						<p align="left">{!!trans('home.detail_aime_content')!!}</p>
<!--						<a href="{{URL::to('/a-propos')}}"> {!!trans('home.en_plus')!!} <i class="pl-5 fa fa-angle-double-right"></i></a> -->
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
						<span class="icon default-bg circle"><i class="icon-lifebuoy"></i></span>
						<h3>{!!trans('home.accompagne')!!}</h3>
						<div class="separator clearfix"></div>
						<p>{!!trans('home.accompagne_content')!!}</p>
<!--						<a href="{{URL::to('/a-propos')}}"> {!!trans('home.en_plus')!!} <i class="pl-5 fa fa-angle-double-right"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="main-container">
<div class="container">
	<div class="row">
		<div class="main col-md-12">
			<h3 class="title">{!!trans('home.qui')!!} <strong>{!!trans('home.somme_nous')!!}</strong></h3>
			<div class="separator-2"></div>
			<div class="row">
				<div class="col-md-6">
					<p>{!!trans('home.qui_sommes_nous_content')!!}</p>
				</div>
				<div class="col-md-6">
					<div class="owl-carousel content-slider-with-controls">
						<div class="overlay-container overlay-visible">
							<img src="z_assets/images/page-about-1.jpg" alt="">
							<div class="overlay-bottom hidden-xs">
								<div class="text">
									<h3 class="title"> {!!trans('home.on_peut')!!}</h3>
								</div>
							</div>
							<a href="z_assets/images/page-about-1.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
						</div>
						<div class="overlay-container overlay-visible">
							<img src="images/page-about-2.jpg" alt="">
							<div class="overlay-bottom hidden-xs">
								<div class="text">
									<h3 class="title"> {!!trans('home.trust_us')!!}</h3>
								</div>
							</div>
							<a href="images/page-about-2.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
						</div>
						<div class="overlay-container overlay-visible">
							<img src="z_assets/images/page-about-3.jpg" alt="">
							<div class="overlay-bottom hidden-xs">
								<div class="text">
									<h3 class="title"> {!!trans('home.ce_que_nous_faisons')!!}</h3>
								</div>
							</div>
							<a href="images/page-about-3.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
						</div>
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
							<h1 class="title">{!!trans('home.ne_manquez')!!}</h1>
							<p></p>
						</div>
						<div class="col-sm-4">
							<br>
							<p>
								<a href="{{URL::to('/a-propos')}}" class="btn btn-lg btn-gray-transparent btn-animated"> 
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

<section class="pv-30">
	<div class="container"> 
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">{!!trans('home.pourquoi')!!} {!!trans('home.nous')!!} <strong>{!!trans('home.choisir')!!}</strong> ?</h2>
				<div class="separator"></div>
				<p class="large text-center">{!!trans('home.pourquoi_content')!!}</p>
				<br>
			</div>
		</div>
	</div>
	<div class="owl-carousel content-slider-with-large-controls">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="z_assets/images/section-image-1.png" alt="">
				</div>
				<div class="col-md-6">
					<p class="space-top"></p>
					<div class="media">
						<div class="media-left pr-20">
							<a href="#">
								<span class="icon circle small default-bg"><i class="icon-eye"></i> </span>
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">{!!trans('home.flexible')!!}</h4>
							
						</div>
					</div>
					<div class="media">
						<div class="media-left pr-20">
							<a href="#">
								<span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">{!!trans('home.intuitif')!!}</h4>
							
						</div>
					</div>
					<div class="media">
						<div class="media-left pr-20">
							<a href="#">
								<span class="icon circle small default-bg"><i class="icon-lifebuoy"></i> </span>
							</a>
						</div>
						<div class="media-body">
							<h4 class="media-heading">{!!trans('home.support')!!}</h4>{!!trans('home.en_plus')!!}
							
						</div>
					</div>
					<p><a href="{{URL::to('/a-propos')}}" class="btn btn-default-transparent btn-animated">{!!trans('home.en_plus')!!} <i class="fa fa-arrow-right pl-10"></i></a></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-right">
					<p class="space-top"></p>
					<div class="media">
						<div class="media-body">
							<h4 class="media-heading">{!!trans('home.flexible')!!}</h4> 
							
						</div>
						<div class="media-right pl-20">
							<a href="#">
								<span class="icon circle small default-bg"><i class="icon-eye"></i> </span>
							</a>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h4 class="media-heading">{!!trans('home.intuitif')!!}</h4> 
							
						</div>
						<div class="media-right pl-20">
							<a href="#">
								<span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
							</a>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<h4 class="media-heading">{!!trans('home.support')!!}</h4> 
							
						</div>
						<div class="media-right pl-20">
							<a href="#">
								<span class="icon circle small default-bg"><i class="icon-lifebuoy"></i> </span>
							</a>
						</div>
					</div>
					<p><a href="{{URL::to('/a-propos')}}" class="btn btn-default-transparent btn-animated">{!!trans('home.en_plus')!!} <i class="fa fa-arrow-right pl-10"></i></a></p>
				</div>
				<div class="col-md-6">
					<img src="z_assets/images/section-image-2.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="light-gray-bg pv-20">
</section>

<section class="pv-30">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2> {!!trans('home.ce_que')!!} <strong> {!!trans('home.offer')!!} </strong></h2>
				<div class="separator-2"></div>
				<p>{!!trans('home.ce_que_content')!!}</p>

				<p></p>
				<a href="{{URL::to('/a-propos')}}" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="icon-users-1 pr-10"></i>{!!trans('home.en_plus')!!}</a>
			</div>
			<div class="col-md-6">
				<br>
				<div role="tabpanel">

					<ul class="nav nav-tabs style-1" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="icon-heart pr-10"></i>{!!trans('home.nous_ad')!!}</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{!!trans('home.vous')!!}</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">{!!trans('home.plaisir')!!}</a></li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home">
							<div class="overlay-container overlay-visible">
								<img src="z_assets/images/section-image-3.jpg" alt="">
								<a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
								<div class="overlay-bottom hidden-xs">
									<div class="text">
										
									</div>
								</div>
							</div>										
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
								<p><a href="http://vimeo.com/29198414"></a> de <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="messages">
						<!-- <h3>Lorem ipsum dolor sit amet</h3>
							<p>XXXXXXX XXXXXXX XXXXXXX XXXXXXX.</p>
							<p>XXXXXXX XXXXXXX XXXXXXX XXXXXXX</p>
							<p>XXXXXXX XXXXXXX XXXXXXX XXXXXXX</p>-->
						</div>
					</div>
				</div>					
			</div>
		</div>
	</div>
	<br>
</section>
@endsection