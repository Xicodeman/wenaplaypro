<div class="login-container">
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center pt-5">
			<div class="login-container-abs width-900">
				<div class="heading"> Welcome on WenaPlay. Create your profile </div>
				<div class="sub-heading"> Quibusdam nihil sequi reprehenderit aliquip  placeat cupidatat ducimus. </div>
				<div class="rform">
					<div class="error"></div>

					<form class="mt-30 submit" method="post" enctype="multipart/form-data">
						<center> <img src="<?php if (!$this->session->user->photo) { echo base_url('assets/images/dummy.jpg'); } else { echo base_url('assets/images/'. $this->session->user->photo); } ?>" class="img-round" style="height: 80px; width: 80px; object-fit: cover; margin-bottom: 30px"> </center>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label> Profile Photo* </label>
									<input type="file" name="image" class="form-control " placeholder="Choose Your Profile">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label> Date of birth* </label>
									<input type="date" name="dob" class="form-control" value="<?= $this->session->user->dob ?>" placeholder="Choose Your Date of Birth" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label> Current Club* </label>
									<input type="text" name="club" class="form-control " value="<?= $this->session->user->club ?>"  placeholder="Enter Your Current Team" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label> League Name* </label>
									<input type="text" name="league" class="form-control " value="<?= $this->session->user->league ?>"  placeholder="Enter the name of league" required="">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label> Position* </label>
									<select name="type" class="form-control" required=""> 
										<option selected="" disabled="" value="">Make a selection </option>
										<option value="1" <?= ($this->session->user->position == 1) ? "selected" : "" ?> >Goal Keeper</option>
										<option value="2" <?= ($this->session->user->position == 2) ? "selected" : "" ?>>Defender</option>
										<option value="3" <?= ($this->session->user->position == 3) ? "selected" : "" ?>>Midfielder</option>
										<option value="4" <?= ($this->session->user->position == 4) ? "selected" : "" ?>>Attacker</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Goals* </label>
											<input type="text" name="goals" class="form-control " value="<?= $this->session->user->goals ?>"  placeholder="nbr of goals" required="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label> Games* </label>
											<input type="text" name="games" class="form-control " placeholder="nbr of games" value="<?= $this->session->user->games ?>"  required="">
										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label> Personal Summary <br> (Max 200 words)* </label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea rows="4" name="summary" class="form-control" placeholder="Type here your career summary"><?= $this->session->user->summary ?> </textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label> Upload your video skills <br> Fromats: .mov .mp4 .avi .mpg .vmw </label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<center> <label for="uplaodVideo" style="cursor: pointer;"> <img src="<?= base_url('assets/images/upload-to-cloud.svg') ?>" height="50px"> </label> </center>
									<input type="file" name="video" id="uplaodVideo" style="opacity: 0; position: absolute; z-index: -1 ;width: 0.1px; height: 0.1px">

								</div>
							</div>
						</div>

						<?php if ($this->session->user->video) { ?>
							<center>
								<video width="350" controls style="margin-top: 20px;">
									<source src="<?= base_url('assets/images/'. $this->session->user->video) ?>" type="video/mp4">
										Your browser does not support HTML5 video.
									</video>
								</center>
							<?php } ?>

							<center>
								<button class="c-btn mt-30">Update</button>

								<div class="text mt-15"> By registering you agree to our <a href="#!" class="link"> Terms and Conditions </a> </div>

							</center>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		$(".submit").submit(function(e){
			e.preventDefault();
			var form = $(this)[0];
			var data = new FormData(form);
			$.ajax({
				url: '<?= base_url("register/updatePlayer") ?>',
				data: data,
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST', 
				beforeSend: function() {
					;
				},
				success: function(data){
					console.log(data);
					data = JSON.parse(data);
					if (data.code == 200) {
						window.location = "<?= base_url('profile') ?>"
					} else {

					}
				}
			})
		})
	</script>
