@extends('zullamaLayout.index')
@section('zullama-content')
<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
			<li class="active">Portfolio Item</li>
		</ol>
	</div>
</div>
			
<div class="pv-40 banner light-gray-bg">
	<div class="container clearfix">
		<div class="slideshow">
			<div class="slider-banner-container">
				<div class="slider-banner-boxedwidth-stopped">
					<ul class="slides">
						<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="Slide 1">
						<img src="images/portfolio-item-banner-1.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
						
						<!-- Transparent Background -->
						<div class="tp-caption dark-translucent-bg"
							data-x="center"
							data-y="bottom"
							data-speed="600"
							data-start="0">
						</div>

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sfb fadeout text-center large_white"
							data-x="center"
							data-y="110"
							data-speed="500"
							data-start="1000"
							data-easing="easeOutQuad">Project Image 1
						</div>	

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfb fadeout text-center large_white tp-resizeme"
							data-x="center"
							data-y="155"
							data-speed="500"
							data-start="1300"
							data-easing="easeOutQuad"><div class="separator light"></div>
						</div>	

						<!-- LAYER NR. 3 -->
						<div class="tp-caption sfb fadeout medium_white text-center"
							data-x="center"
							data-y="190"
							data-speed="500"
							data-start="1300"
							data-easing="easeOutQuad"
							data-endspeed="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam <br> culpa offici, tenetur fugiat dolorum sapiente...
						</div>

						</li>
						<!-- slide 1 end -->

						<!-- slide 2 start -->
						<!-- ================ -->
						<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="Slide 2">
						
						<!-- main image -->
						<img src="images/portfolio-item-banner-2.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

						<!-- Transparent Background -->
						<div class="tp-caption dark-translucent-bg"
							data-x="center"
							data-y="bottom"
							data-speed="600"
							data-start="0">
						</div>

						<!-- LAYER NR. 1 -->
						<div class="tp-caption sfb fadeout text-center large_white"
							data-x="center"
							data-y="110"
							data-speed="500"
							data-start="1000"
							data-easing="easeOutQuad">Project Image 2
						</div>	

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfb fadeout text-center large_white tp-resizeme"
							data-x="center"
							data-y="155"
							data-speed="500"
							data-start="1300"
							data-easing="easeOutQuad"><div class="separator light"></div>
						</div>	

						<!-- LAYER NR. 3 -->
						<div class="tp-caption sfb fadeout medium_white text-center"
							data-x="center"
							data-y="190"
							data-speed="500"
							data-start="1300"
							data-easing="easeOutQuad"
							data-endspeed="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam <br> culpa offici, tenetur fugiat dolorum sapiente...
						</div>
						</li>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="main-container padding-ver-clear">
	<div class="container pv-40">
		<div class="row">
			<div class="main col-md-8">
				<h1 class="title">Project Title</h1>
				<div class="separator-2"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
				<p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
				<h3>Client Testimonial</h3>
				<blockquote class="margin-clear">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, magni, eos! Dignissimos voluptatum sequi ea sunt, nisi, doloribus facere asperiores dolorem quos laboriosam porro, velit in pariatur necessitatibus. Quisquam, mollitia!</p>	
					<footer><cite title="Source Title">Happy Client </cite></footer>
				</blockquote>
			</div>

			<aside class="col-md-4 col-lg-3 col-lg-offset-1">
				<div class="sidebar">
					<div class="block clearfix">
						<h3 class="title">Project Info</h3>
						<div class="separator-2"></div>
						<ul class="list margin-clear">
							<li><strong>Client: </strong> <span class="text-right">John Doe</span></li>
							<li><strong>Date: </strong> <span class="text-right">May 2015</span></li>
							<li><strong>In: </strong> <span class="text-right">Web Design</span></li>
							<li><strong>Place: </strong> <span class="text-right">Europe</span></li>
							<li><strong>URL: </strong> <span class="text-right"><a href="#">www.theproject.com</a></span></li>
						</ul>
						<a href="#" class="btn btn-animated btn-default btn-lg">External Link <i class="fa fa-external-link"></i></a>
						<h3>Share This</h3>
						<div class="separator-2"></div>
						<ul class="social-links colored circle small">
							<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
							<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
							<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
							<li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
						</ul>
					</div>
				</div>
			</aside>
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
							<h2 class="title">More info About This Project</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
							<div class="separator"></div>
							<form class="form-inline margin-clear">
								<div class="form-group has-feedback">
									<label class="sr-only" for="subscribe3">Email address</label>
									<input type="email" class="form-control" id="subscribe3" placeholder="Enter email" name="subscribe3" required="">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section pv-40 clearfix">
	<div class="container">
		<h3>Related <strong>Projects</strong></h3>
		<div class="row grid-space-10">
			<div class="col-sm-4">
				<div class="image-box style-2 mb-20 bordered text-center">
					<div id="carousel-portfolio" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators bottom margin-clear">
							<li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-portfolio" data-slide-to="1"></li>
							<li data-target="#carousel-portfolio" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="overlay-container">
									<img src="images/portfolio-1.jpg" alt="">
									<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="item">
								<div class="overlay-container">
									<img src="images/portfolio-1-2.jpg" alt="">
									<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="item">
								<div class="overlay-container">
									<img src="images/portfolio-1-3.jpg" alt="">
									<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="body shadow light-gray-bg ">
						<h3>Project Title</h3>
						<div class="separator"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
						<a href="portfolio-item.html" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
					<div class="overlay-container">
						<img src="images/portfolio-2.jpg" alt="">
						<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
					</div>
					<div class="body">
						<h3>Project Title</h3>
						<div class="separator"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
						<a href="portfolio-item.html" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
					<div class="overlay-container">
						<img src="images/portfolio-3.jpg" alt="">
						<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>
					</div>
					<div class="body">
						<h3>Project Title</h3>
						<div class="separator"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
						<a href="portfolio-item.html" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>												
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
							<h2>Powerful Bootstrap Template</h2>
							<h2>Waste no more time</h2>
						</div>
						<div class="col-sm-4">
							<p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent ">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection