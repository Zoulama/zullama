<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	@include('zullamaHeader.css_header')
	<body class="no-trans front-page transparent-header">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
			@include('zullamaHeader.header')
			@yield('zullama-content')
			@include('zullamaFooter.footer')
			@include('zullamaFooter.js_footer')
		</div>
		<!-- page-wrapper end -->
	</body>
</html>