<?php 
$controller = $this->uri->segment(1);
$method = $this->uri->segment(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= base_url('assets/images/ico.png') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/ham.css'?>">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style.css?v=' . rand() ; ?>">
	
</head>
<body>

	<div class="loader">
	</div>

	<div class="app">

		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="<?= base_url() ?>"> <img src="<?= base_url('assets/images/logo.svg') ?>" height="45px" draggable="false"> <span class="logo-text"> WenaPlay </span> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<?php if (isset($_SESSION['user'])) { ?>

						<?php if ($this->session->user->type == 1) { ?>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'profile') ? "active" : "" ?>" href="<?= base_url('profile/player') ?>">Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'profiles') ? "active" : "" ?>" href="<?= base_url('profiles') ?>">Profiles</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'pages' && $method == 'about') ? "active" : "" ?>" href="<?= base_url('pages/about') ?>">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'pages' && $method == 'terms') ? "active" : "" ?>" href="<?= base_url('pages/terms') ?>">Terms and Conditions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('home/logout') ?>">Logout</a>
							</li>
						<?php } else if ($this->session->user->type == 2) { ?>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'profile') ? "active" : "" ?>" href="<?= base_url('profile/agent') ?>">Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'profiles') ? "active" : "" ?>" href="<?= base_url('profiles') ?>">Profiles</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'pages' && $method == 'about') ? "active" : "" ?>" href="<?= base_url('pages/about') ?>">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($controller == 'pages' && $method == 'terms') ? "active" : "" ?>" href="<?= base_url('pages/terms') ?>">Terms and Conditions</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('home/logout') ?>">Logout</a>
							</li>
						<?php } ?>

					<?php } else { ?>
						<li class="nav-item">
							<a class="nav-link <?= ($controller == 'home' or !$controller) ? "active" : "" ?>" href="<?= base_url() ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?= ($controller == 'register') ? "active" : "" ?>" href="<?= base_url('register') ?>">Register</a>					
						</li>
						<li class="nav-item">
							<a class="nav-link <?= ($controller == 'pages' && $method == 'about') ? "active" : "" ?>" href="<?= base_url('pages/about') ?>">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?= ($controller == 'pages' && $method == 'terms') ? "active" : "" ?>" href="<?= base_url('pages/terms') ?>">Terms and Conditions</a>
						</li>
					<?php } ?>

				</ul>



			</div>
            

		</nav>

		<div class="app-full-width">

