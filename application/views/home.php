<div class="row mt-5">
    <div class="col-12 text-center mt-5">
        <h3>WenaPlan Home</h3>
    </div>
</div>
	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">BUILT WITH THE BEST</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/html5.png">
						<h3>HTML5</h3>
						<p>HTML5 is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/bootstrap4.png">
						<h3>BOOTSTRAP 4</h3>
						<p>Bootstrap is an open-source front-end library with HTML and CSS based designs.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/css3.png">
						<h3>CSS3</h3>
						<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Learn to build Bootstrap websites</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="https://w3newbie.com/courses/">W3NEWBIE COURSES</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->
<div class="login-container">
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center pb-5 pt-5">
			<div class="login-container-abs">
				<div class="heading"> Welcome to WenaPlay </div>
				<div class="sub-heading"> WenaPlay is the leading football matching platform that helps players achieve their dream team. <br> Get started with your profile! </div>

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

<?php include 'includes/footer.php'; ?>

<!-- Script Source files -->
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