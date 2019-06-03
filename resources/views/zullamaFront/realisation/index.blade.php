@extends('zullamaLayout.index')
@section('zullama-content')
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><i class="fa fa-home pr-10"></i><a href="{{URL::to('/')}}">{!!trans('home.home')!!}</a></li>
				<li class="active">{!!trans('realisation.title')!!}</li>
			</ol>
		</div>
	</div>
	<section class="main-container">

		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="page-title">{!!trans('realisation.title')!!}</h1>
					<div class="separator-2"></div>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit Illo quaerat <br> commodi excepturi dignissimos!</p>
					<div class="filters">
						<ul class="nav nav-pills">
							<li class="active"><a href="#" data-filter="*">Tous</a></li>
							<li><a href="#" data-filter=".web-design">Web design</a></li>
							<li><a href="#" data-filter=".app-development">Developpement d'application</a></li>
							<li><a href="#" data-filter=".site-building">Site web</a></li>
						</ul>
					</div>
					<div class="isotope-container-fitrows row grid-space-10">
						<div class="col-sm-6 col-md-4 isotope-item web-design">
							<div class="image-box style-2 mb-20 bordered text-center">
								<div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators top">
										<li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-portfolio" data-slide-to="1"></li>
										<li data-target="#carousel-portfolio" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner" role="listbox">
										<div class="item active">
											<div class="overlay-container">
												<img src="z_assets/images/portfolio-1.jpg" alt="">
												<div class="overlay-to-top">
													<p class="small margin-clear"><em>Web design <br> Lorem ipsum dolor sit</em></p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="overlay-container">
												<img src="z_assets/images/portfolio-1-2.jpg" alt="">
												<div class="overlay-to-top">
													<p class="small margin-clear"><em>Web design <br> Lorem ipsum dolor sit</em></p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="overlay-container">
												<img src="z_assets/images/portfolio-1-3.jpg" alt="">
												<div class="overlay-to-top">
													<p class="small margin-clear"><em>Web design <br> Lorem ipsum dolor sit</em></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="body shadow light-gray-bg ">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 isotope-item app-development">
							<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
								<div class="overlay-container">
									<img src="z_assets/images/portfolio-2.jpg" alt="">
									<div class="overlay-to-top">
										<p class="small margin-clear"><em>App development <br> Lorem ipsum dolor sit</em></p>
									</div>
								</div>
								<div class="body">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 isotope-item app-development">
							<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
								<div class="overlay-container">
									<img src="z_assets/images/portfolio-3.jpg" alt="">
									<div class="overlay-to-top">
										<p class="small margin-clear"><em>App development <br> Lorem ipsum dolor sit</em></p>
									</div>
								</div>
								<div class="body">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 isotope-item web-design">
							<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
								<div class="overlay-container">
									<img src="z_assets/images/portfolio-4.jpg" alt="">
									<div class="overlay-to-top">
										<p class="small margin-clear"><em>Web design <br> Lorem ipsum dolor sit</em></p>
									</div>
								</div>
								<div class="body">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 isotope-item site-building">
							<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
								<div class="overlay-container">
									<img src="z_assets/images/portfolio-5.jpg" alt="">
									<div class="overlay-to-top">
										<p class="small margin-clear"><em>Site building <br> Lorem ipsum dolor sit</em></p>
									</div>
								</div>
								<div class="body">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 isotope-item app-development">
							<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
								<div class="overlay-container">
									<img src="z_assets/images/portfolio-6.jpg" alt="">
									<div class="overlay-to-top">
										<p class="small margin-clear"><em>App development <br> Lorem ipsum dolor sit</em></p>
									</div>
								</div>
								<div class="body">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 isotope-item site-building">
							<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
								<div class="overlay-container">
									<img src="z_assets/images/portfolio-7.jpg" alt="">
									<div class="overlay-to-top">
										<p class="small margin-clear"><em>Site building <br> Lorem ipsum dolor sit</em></p>
									</div>
								</div>
								<div class="body">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 isotope-item app-development">
							<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
								<div class="overlay-container">
									<img src="z_assets/images/portfolio-8.jpg" alt="">
									<div class="overlay-to-top">
										<p class="small margin-clear"><em>App development <br> Lorem ipsum dolor sit</em></p>
									</div>
								</div>
								<div class="body">
									<h3>Projet</h3>
									<div class="separator"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection