<div class="login-container">
	<div class="login-container-abs width-900">
		<div class="heading"> Welcome on WenaPlay. Create your profile </div>
		<div class="sub-heading"> Quibusdam nihil sequi reprehenderit aliquip  placeat cupidatat ducimus. </div>
		<div class="rform">
			<form class="mt-30" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label> Profile Photo* </label>
							<input type="text" name="fname" class="form-control " placeholder="Choose Your Profile" required="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label> Date of birth* </label>
							<input type="text" name="fname" class="form-control " placeholder="Choose Your Profile" required="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label> Current Club* </label>
							<input type="text" name="club" class="form-control " placeholder="Enter Your Current Team" required="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label> League Name* </label>
							<input type="text" name="league" class="form-control " placeholder="Enter the name of league" required="">
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label> Position* </label>
							<input type="text" name="position" class="form-control " placeholder="Defender/midfielder/striker" required="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label> Goals* </label>
									<input type="text" name="goals" class="form-control " placeholder="nbr of goals" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label> Games* </label>
									<input type="text" name="games" class="form-control " placeholder="nbr of games" required="">
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
							<textarea rows="4" class="form-control" placeholder="Type here your career summary"></textarea>
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

				<center>
				<button class="c-btn mt-30">Register</button>

				<div class="text mt-15"> By registering you agree to our <a href="#!" class="link"> Terms and Conditions </a> </div>

				</center>


			</form>
		</div>
	</div>
</div>

