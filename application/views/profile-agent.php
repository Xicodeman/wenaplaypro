	<div class="container mt-60">
		<div class="row">
			<div class="col-sm-2">
				<img src="<?= ($this->session->user->photo) ? base_url('assets/images/'. $this->session->user->photo) :  base_url('assets/images/dummy.jpg') ?>" class="img-round" style="height: 80px; width: 80px; object-fit: cover">
			</div>
			<div class="col-sm-9">
				<div class="heading" style="text-align: left;"> Welcome <?= $this->session->user->firstName . " " . $this->session->user->lastName ?> </div>
			</div>
			<div class="col-sm-1">
				<button class="c-btn" style="width: 100px;" onclick="window.location='<?= base_url('register/agent') ?>'"> Edit </button>
			</div>
		</div>
	</div>

	<div class="container mt-30">
		<div class="row" style="margin-top: 5px">
			<div class="col-sm-2"> Biography: </div>
			<div class="col-sm-10"> 
				<?= $this->session->user->summary ?> 
			</div>
		</div>

	</div>



