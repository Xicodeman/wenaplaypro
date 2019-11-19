	<?php 
	$positions = ["","Goal Keeper", "Defender", "Midfielder", "Attaker"];
	?>
	<div class="">

		<?php if ($this->session->user->type == 2 and count($rec) > 0) { ?>
			<div class="heading mt-15"> Recommended Profiles </div>
			<div class="body-section">

			<div class="row">

				<?php foreach ($rec as $u) { ?>
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">

						<center>

							<div class="sec">

								<a href="<?= base_url('profile/player/'.$u->id) ?>"><img src="<?php if ($u->photo) { echo base_url('assets/images/'.$u->photo); } else { echo base_url('assets/images/dummy.jpg'); }  ?>" class="img-round" style="object-fit: cover;"> </a> <br> <br>
								<div class="sec-heading"> <?= $u->firstName . " " . $u->lastName ?> </div>
								<div class="sec-heading"> <?= $positions[$u->position] ?> </div>

								<div class="sec-body" style="max-height: 100px;min-height: 100px; overflow: hidden;"> <?= $u->summary ?>  </div>


								<button class="c-btn sc-bg mt-15 width-150" onclick="sendMail('<?= $u->email ?>')">Message</button>

							</div>

						</center>

					</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>

		<div class="heading mt-15"> Players Profile </div>

		<div class="body-section">

			<div class="row">

				<?php foreach ($users as $u) { ?>
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">

						<center>

							<div class="sec">

								<a href="<?= base_url('profile/player/'.$u->id) ?>"><img src="<?php if ($u->photo) { echo base_url('assets/images/'.$u->photo); } else { echo base_url('assets/images/dummy.jpg'); }  ?>" class="img-round" style="object-fit: cover;"> </a> <br> <br>
								<div class="sec-heading"> <?= $u->firstName . " " . $u->lastName ?> </div>
								<div class="sec-heading"> <?= $positions[$u->position] ?> </div>

								<div class="sec-body" style="max-height: 100px;min-height: 100px; overflow: hidden;"> <?= $u->summary ?>  </div>


								<button class="c-btn sc-bg mt-15 width-150" onclick="sendMail('<?= $u->email ?>')">Message</button>

							</div>

						</center>

					</div>
				<?php } ?>






			</div>

			<?php if ($count > 12) {  ?>
				<center>

					<?php $nb = $count % 12 ?>

					<ul class="pagination justify-content-center">
						<?php for ($i=1; $i<=$nb; $i++) { ?>
							<li class="page-item <?= ($i == $page) ? "active" : "" ?>"><a class="page-link" href="<?= base_url('profiles/index/'.$i) ?>"><?= $i ?></a></li>
						<?php } ?>
					</ul>


				</center>
			<?php } ?>

		</div>

	</div>


	<script type="text/javascript">
		function sendMail(email) {
			var link = "mailto:"+email;

			window.location.href = link;
		}
	</script>