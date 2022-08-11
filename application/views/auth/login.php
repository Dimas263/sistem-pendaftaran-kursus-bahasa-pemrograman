<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<div class="bg-image" style="background-image: url('https://images.unsplash.com/photo-1616596871445-bb8290a7a2c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1107&q=80');">
		<div class="hero-static content content-full bg-white-op-95 invisible" data-toggle="appear">
			<!-- Header -->
			<br><br><br>
			<div class="py-30 px-5 text-center">
				<h2 class="h2 font-w700 mt-50 mb-10">Selamat Datang</h2>
			</div>
			<!-- END Header -->

			<!-- Sign In Form -->
			<div class="row justify-content-center px-5">
				<div class="col-sm-8 col-md-6 col-xl-4">
					<form class="js-validation-bootstrap" action="<?=base_url('source/login_process')?>" method="post">
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-username"><img src="https://img.icons8.com/external-sbts2018-flat-sbts2018/24/000000/external-user-ecommerce-basic-1-sbts2018-flat-sbts2018.png"/> Username <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="val-username" name="val-username" placeholder="masukan username..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-password"><img src="https://img.icons8.com/color-glass/24/000000/lock.png"/> Password <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="val-password" name="val-password" placeholder="masukan password..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-confirm-password"><img src="https://img.icons8.com/color-glass/24/000000/lock.png"/> Confirm <span class="text-danger">*</span></label>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="masukan ulang password..">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label"></label>
							<div class="col-lg-8">
								<input type="checkbox" onclick="showPassword()"> Show Password
								<script>
									function showPassword() {
										var x = document.getElementById("val-password");
										var y = document.getElementById("val-confirm-password");
										if (x.type === "password" && y.type === "password") {
											x.type = "text";
											y.type = "text";
										} else {
											x.type = "password";
											y.type = "password";
										}
									}
								</script>
							</div>
						</div>
						<div class="form-group row gutters-tiny">
							<div class="col-12 mb-10">
								<button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" name="login">
									<i class="si si-login mr-10"></i> Masuk
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END Sign In Form -->
		</div>
	</div>
	<!-- END Page Content -->

</main>
<!-- END Main Container -->
