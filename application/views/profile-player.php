	<?php 
	$positions = ["","Goal Keeper", "Defender", "Midfielder", "Attacker"];
	?>

	<div class="container mt-60">
		<div class="row">
			<div class="col-sm-2">
				<img src="<?php if (!$user->photo) { echo base_url('assets/images/dummy.jpg'); } else { echo base_url('assets/images/'. $user->photo); } ?>" class="img-round" style="height: 80px; width: 80px; object-fit: cover;">
			</div>
			<div class="col-sm-9">
				<div class="heading" style="text-align: left;"> Welcome <?= $user->firstName . " " . $user->lastName ?> </div>
			</div>
			<div class="col-sm-1">
				<?php if ($this->session->user->id == $user->id) { ?>
					<button class="c-btn" style="width: 100px;" onclick="window.location='<?= base_url('register/player') ?>'"> Edit </button>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="container mt-30">
		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Name: </div>
			<div class="col-sm-10"> <?= $user->firstName . " " . $user->lastName ?> </div>
		</div>
		<hr class="hxs">
		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Date of Birth: </div>
			<div class="col-sm-10"> <?= $user->dob ?> </div>
		</div>
		<hr class="hxs">
		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Position: </div>
			<div class="col-sm-10"> <?= (isset($positions[$user->position])) ? $positions[$user->position] : "N/A"  ?> </div>
		</div>
		<hr class="hxs">
		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Current Club: </div>
			<div class="col-sm-10"> <?= $user->club ?>  </div>
		</div>
		<hr class="hxs">
		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> League Name: </div>
			<div class="col-sm-10"> <?= $user->league ?>  </div>
		</div>

		<hr class="hxs">

		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Goals: </div>
			<div class="col-sm-10"> <?= $user->goals ?>  </div>
		</div>

		<hr class="hxs">

		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Games: </div>
			<div class="col-sm-10"> <?= $user->games ?>  </div>
		</div>

		<hr class="hxs">

		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Personal Statement: </div>
			<div class="col-sm-10"> <?= $user->summary ?>  </div>
		</div>
		<hr class="hxs">

		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Video Highlight: </div>
			<div class="col-sm-10"> 
				<?php 
				if (!$user->video) {
					echo "N/A";
				} else { ?>
					<video width="350" controls>
						<source src="<?= base_url('assets/images/'. $user->video) ?>" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>
					<?php } ?>
				</div>
			</div>
		</div>



