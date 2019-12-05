<div class="login-container">
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center pb-5 pt-5">
			<div class="login-container-abs width-900">
				<div class="heading"> Create your account on WenaPlay </div>
				<div class="rform">
					<div class="error"></div>
					<center>
						<form class="mt-30 submit" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="fname" class="form-control " placeholder="First Name" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="lname" class="form-control " placeholder="Last Name" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" name="email" class="form-control " placeholder="Email Address" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="type" class="form-control"> 
											<option selected="" disabled="" value=""> Join as a: </option>
											<option value="1">Player</option>
											<option value="2">Agent</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="password" name="password" class="form-control " placeholder="Password" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="password" name="cpassword" class="form-control " placeholder="Confirm Password" required="">
									</div>
								</div>
							</div>

							<div class="text mt-15"> By signing up you agree to our <a href="<?= base_url('pages/terms') ?>" class="link"> Terms and Conditions </a> </div>
							
							<button class="c-btn mt-30 d">Sign up</button>

						</form>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".submit").submit(function(e){
		e.preventDefault();

		$.ajax({
			type: "POST",
			url: "<?= base_url('register/submitRegister') ?>",
			data: $(this).serialize(),
			beforeSend: function() {
				$(".d").attr('disabled','disabled');
				$(".d").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
			},
			success: function(data) {

				$(".d").removeAttr('disabled');
				$(".d").html("Sign up");

				console.log(data);
				data = JSON.parse(data);
				if (data.code == 200) {

					if (data.data.type == 1) {
						window.location = "<?= base_url('register/player') ?>";
					} else if  (data.data.type == 2) {
						window.location = "<?= base_url('register/agent') ?>";
					}

				} else {
					$(".error").text(data.message);
					$(".error").fadeIn();
				}
			}
		})

	})
</script>