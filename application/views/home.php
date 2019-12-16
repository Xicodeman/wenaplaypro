
<div class="img-container">
    <img src="<?= base_url('assets/images/football.jpg') ?>">
</div>
<div class="container">
    <!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-4 pb-4">HERE TO CONQUER THE GAME</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<ion-icon name="boat" class="icon-big"></ion-icon>
						<h3>Connect to Agents</h3>
						<p>Agents are looking for players with high intelligent quotient, and to deliver in and on pitch. Join the platfom to find out more informaiton about WenaPlay and boost the chance to connect to the football world like never before.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<ion-icon name="contacts" class="icon-big" ></ion-icon>
						<h3>Link to the World</h3>
						<p>WenaPlay allows players to create a free profile, where they will eventually be able to add their stats, videos, photos and more, players are then able to connect with club managers, agents, scouts across the world by sharing their profiles.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<ion-icon name="globe" class="icon-big"></ion-icon>
						<h3>Sell your Profile</h3>
						<p>Your profile is the latest thing in this century that will save your life. we do all the hard job by bringing all the opportunities to you on a singular platform, all you have to do is to create your profile and connect. Start now, Happy!</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->
    
    
	<div class="login-container h-100">
		<div class="row h-100 justify-content-center align-items-center pb-5 pt-5">
			<div class="login-container-abs">
				<div class="heading"> Welcome to WenaPlay </div>
				<div class="sub-heading"> WenaPlay is the leading football matching platform that helps players achieve their dream team. Time is now for the real talents.<br> Get started with your profile! </div>

				<div class="error"></div>
				<center>
					<form class="mt-30 submit" method="post">
						<div class="form-group">
							<input type="email" name="email" class="form-control c-input" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control c-input" placeholder="Password" required="">
						</div>                                                                                                                  

						<button class="c-btn d">Sign in</button>

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
			beforeSend: function() {
				$(".d").attr('disabled','disabled');
				$(".d").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
			},
			success: function(data) {

				$(".d").removeAttr('disabled');
				$(".d").html("Sign in");

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