<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<title><?= $title?></title>
</head>
<body>

	<header id="site-header">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= base_url() ?>">Say My Name Right!</a>
				</div>
					
						
					
					<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					       
					        <li><a href="<?= base_url('myEvents') ?>">Events</a></li>
					        <li><a href="<?= base_url('myConferences') ?>">Conferences</a></li>
					        <li><a href="<?= base_url('myOrganizations') ?>">Organizations</a></li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">University <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="<?= base_url('myUniversity') ?>">My Universities</a></li>
					            <li><a href="<?= base_url('myColleges') ?>">My Colleges</a></li>
					           <li><a href="<?= base_url('myCourses') ?>">My Courses</a></li>
					            
					          </ul>
					        </li>
					      </ul>
					      <ul class="nav navbar-nav navbar-right">
							<li><a href="<?= base_url('logout') ?>">Logout</a></li>
						
					</ul>
				</div>
				<?php else : ?>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
							<li><a href="<?= base_url('register') ?>">Register</a></li>
							<li><a href="<?= base_url('login') ?>">Login</a></li>
						</ul>
					</div>
						<?php endif; ?>
				
			</div><!-- .container-fluid -->
		</nav><!-- .navbar -->
	</header><!-- #site-header -->

	<main id="site-content" role="main">
		
