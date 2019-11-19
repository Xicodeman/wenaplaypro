<div class="login-container">
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center pb-5 pt-5">
			<div class="login-container-abs">
				<div class="heading"> Welcome to WenaPlay </div>
				<div class="sub-heading"> Quibusdam nihil sequi reprehenderit <br> aliquip  placeat cupidatat ducimus. </div>

				<div class="error"></div>
				<center>
					<form class="mt-30 submit" method="post">
						<div class="form-group">
							<input type="email" name="email" class="form-control c-input" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control c-input" placeholder="Password" required="">
						</div>

						<button class="c-btn">Sign in</button>

					</form>

					<div class="link mt-15"> <a href="#!"> Forgot your password? </a> </div>
					<div class="link"> <a href="<?= base_url('register') ?>"> Do not have an account? </a> </div>

					<button class="c-btn sc-bg mt-30" onclick="window.location='<?= base_url('register') ?>'">Create an account</button>

				</center>
			</div>   
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".submit").submit(function(e){
		e.preventDefault();

		$.ajax({
			type: "POST",
			url: "<?= base_url('home/signin') ?>",
			data: $(this).serialize(),
			success: function(data) {
				console.log(data);
				data = JSON.parse(data);
				if (data.code == 200) {

					if (data.data.type == 1) {
						window.location = "<?= base_url('profile/player') ?>";
					} else if  (data.data.type == 2) {
						window.location = "<?= base_url('profile/agent') ?>";
					}

				} else {
					$(".error").text(data.message);
					$(".error").fadeIn();
				}
			}
		})

	})
</script>