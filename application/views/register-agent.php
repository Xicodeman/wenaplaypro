<div class="login-container">
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center pb-5 pt-5">
			<div class="login-container-abs width-900">
				<div class="heading"> Welcome Agent. Create your profile on WenaPlay!</div>
				<div class="rform">
					<form class="mt-30 submit" method="post" enctype="multipart/form-data">
							<center> <img src="<?php if (!$this->session->user->photo) { echo base_url('assets/images/dummy.jpg'); } else { echo base_url('assets/images/'. $this->session->user->photo); } ?>" class="img-round" style="height: 80px; width: 80px; object-fit: cover; margin-bottom: 30px"> </center>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label> Profile Photo* </label>
									<input type="file" name="image" class="form-control " placeholder="Choose Your Profile" >
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label> Your Player Choice* </label>
									<div class="row">
										<div class="col-md-6">
											<select name="position" class="form-control"> 
												<option selected="" disabled="" value="">Make a selection </option>
												<option value="1" <?php if ($agent) { if ($agent->position == 1) echo "selected"; } ?>>Goal Keeper</option>
												<option value="2"  <?php if ($agent) { if ($agent->position == 2) echo "selected"; } ?>>Defender</option>
												<option value="3"  <?php if ($agent) { if ($agent->position == 3) echo "selected"; } ?>>Midfielder</option>
												<option value="4"  <?php if ($agent) { if ($agent->position == 4) echo "selected"; } ?>>Attacker</option>
											</select>
										</div>

										<div class="col-md-3">
											<input type="text" name="goals" class="form-control " placeholder="Goals" required="" value="<?= ($agent) ? $agent->goals : "" ?>">
										</div>

										<div class="col-md-3">
											<input type="text" name="games" class="form-control " placeholder="Games" required="" value="<?= ($agent) ? $agent->games : "" ?>">
										</div>

									</div>

								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label> Bio (Max 200 words)* </label>
									<textarea rows="6" class="form-control" name="summary" placeholder="write your personal biography here..."><?= $this->session->user->summary ?></textarea>
								</div>
							</div>
						</div>








						<center>
							<button class="c-btn mt-30">Save</button>

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
				url: '<?= base_url("register/updateAgent") ?>',
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