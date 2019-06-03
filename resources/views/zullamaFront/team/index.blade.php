@extends('zullamaLayout.index')
@section('zullama-content')
	<div class="breadcrumb-container">
		<div class="container">
			<ol class="breadcrumb">
				<li><i class="fa fa-home pr-10"></i><a href="{{ URL::to('/')}}">{!!trans('home.home')!!}</a></li>
				<li class="active">{!!trans('team.equipe')!!}</li>
			</ol>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="page-title">{!!trans('team.equipe')!!}</h1>
					<div class="separator-2"></div>
					<div class="row grid-space-10">
						<div class="col-sm-6 col-md-3">
							<div class="team-member image-box style-2 mb-20 dark-bg text-center">
								<div class="overlay-container overlay-visible">
									<img src="z_assets/images/team-member-1.jpg" alt="">
									<div class="overlay-bottom">
										<ul class="social-links circle dark margin-clear">
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="{!!trans('team.team.kadia.linkedin')!!}"><i class="fa fa-linkedin"></i></a></li>
											<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="body">
									<h3 class="margin-clear">{!!trans('team.team.kadia.nom_prenom')!!}</h3>
									<small>{!!trans('team.team.kadia.role')!!}</small>
									<div class="separator mt-10"></div>
									<p class="small margin-clear" align="left">{!!trans('team.team.kadia.resume')!!}</p>
									<a href="mailto:k.konate@zullama.com" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-envelope-o"></i> {!!trans('team.me_contacter')!!}</a><br><br>
									<a href="{{route('zullama.team.detail',[trans('team.team.kadia.url_name')])}}" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="icon-eye"></i>{!!trans('home.en_plus')!!}</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="team-member image-box style-2 mb-20 dark-bg text-center">
								<div class="overlay-container overlay-visible">
									<img src="z_assets/images/team-member-1.jpg" alt="">
									<div class="overlay-bottom">
										<ul class="social-links circle dark margin-clear">
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="{!!trans('team.team.sileymane.linkedin')!!}"><i class="fa fa-linkedin"></i></a></li>
											<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="body">
									<h3 class="margin-clear">{!!trans('team.team.sileymane.nom_prenom')!!}</h3>
									<small>{!!trans('team.team.sileymane.role')!!}</small>
									<div class="separator mt-10"></div>
									<p class="small margin-clear" align="left">{!!trans('team.team.sileymane.resume')!!}</p>
									<a href="mailto:s.djimera@zullama.com" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-envelope-o"></i> {!!trans('team.me_contacter')!!}</a><br><br>
									<a href="{{route('zullama.team.detail',[trans('team.team.sileymane.url_name')])}}" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="icon-eye"></i>{!!trans('home.en_plus')!!}</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="team-member image-box style-2 mb-20 dark-bg text-center">
								<div class="overlay-container overlay-visible">
									<img src="z_assets/images/team-member-1.jpg" alt="">
									<div class="overlay-bottom">
										<ul class="social-links circle dark margin-clear">
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="{!!trans('team.team.deguene.linkedin')!!}"><i class="fa fa-linkedin"></i></a></li>
											<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="body">
									<h3 class="margin-clear">{!!trans('team.team.deguene.nom_prenom')!!}</h3>
									<small>{!!trans('team.team.deguene.role')!!}</small>
									<div class="separator mt-10"></div>
									<p class="small margin-clear" align="left">{!!trans('team.team.deguene.resume')!!}</p>
									<a href="mailto:d.diop@zullama.com" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-envelope-o"></i> {!!trans('team.me_contacter')!!}</a><br><br>
									<a href="{{route('zullama.team.detail',[trans('team.team.deguene.url_name')])}}" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="icon-eye"></i>{!!trans('home.en_plus')!!}</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="team-member image-box style-2 mb-20 dark-bg text-center">
								<div class="overlay-container overlay-visible">
									<img src="z_assets/images/team-member-1.jpg" alt="">
									<div class="overlay-bottom">
										<ul class="social-links circle dark margin-clear">
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="{!!trans('team.team.lamine.linkedin')!!}"><i class="fa fa-linkedin"></i></a></li>
											<li class="xing"><a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="body">
									<h3 class="margin-clear">{!!trans('team.team.lamine.nom_prenom')!!}</h3>
									<small>{!!trans('team.team.lamine.role')!!}</small>
									<div class="separator mt-10"></div>
									<p class="small margin-clear" align="left">{!!trans('team.team.lamine.resume')!!}</p>
									<a href="mailto:l.sow@zullama.com" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-envelope-o"></i> {!!trans('team.me_contacter')!!}</a><br><br>
									<a href="{{route('zullama.team.detail',[trans('team.team.lamine.url_name')])}}" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg"><i class="icon-eye"></i>{!!trans('home.en_plus')!!}</a>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
				</div>
			</div>
		</div>
	</section>
@endsection