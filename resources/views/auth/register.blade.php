@extends('zullamaLayout.index')
@section('zullama-content')
<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
			<li class="active">Page Sign Up</li>
		</ol>
	</div>
</div>
<!-- breadcrumb end -->

<!-- main-container start -->
<!-- ================ -->
<div class="main-container dark-translucent-bg" style="background-image:url('z_assets/images/background-img-6.jpg');">
	<div class="container">
		<div class="row">
			<!-- main start -->
			<!-- ================ -->
			<div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="form-block center-block p-30 light-gray-bg border-clear">
					<h2 class="title">Sign Up</h2>
					<form class="form-horizontal" role="form">
						<div class="form-group has-feedback">
							<label for="inputName" class="col-sm-3 control-label">First Name <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputName" placeholder="Fisrt Name" required>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="inputLastName" class="col-sm-3 control-label">Last Name <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputLastName" placeholder="Last Name" required>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="inputUserName" class="col-sm-3 control-label">User Name <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputUserName" placeholder="User Name" required>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="inputEmail" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
								<i class="fa fa-envelope form-control-feedback"></i>
							</div>
						</div>
						<div class="form-group has-feedback">
							<label for="inputPassword" class="col-sm-3 control-label">Password <span class="text-danger small">*</span></label>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
								<i class="fa fa-lock form-control-feedback"></i>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
								<div class="checkbox">
									<label>
										<input type="checkbox" required> Accept our <a href="#">privacy policy</a> and <a href="#">customer agreement</a>
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
								<button type="submit" class="btn btn-group btn-default btn-animated">Sign Up <i class="fa fa-check"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- main end -->
		</div>
	</div>
</div>
<!-- main-container end -->
@endsection