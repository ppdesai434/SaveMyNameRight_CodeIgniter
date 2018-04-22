<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
 			</div>
			<ul>
				<?php echo $_SESSION['user_id']; ?>
				<li><a href="<?= base_url('myevents') ?>">My Events</a></li>
				<li><a href="<?= base_url('conference') ?>">My Conferences</a></li>
				<li><a href="<?= base_url('organization') ?>">My Organizations</a></li>
				<li><a href="<?= base_url('university') ?>">My University</a></li>
			</ul>
		</div>
	</div><!-- .row -->
</div><!-- .container -->