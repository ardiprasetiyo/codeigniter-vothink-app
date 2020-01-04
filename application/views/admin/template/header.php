<!DOCTYPE html>
<html>
<head>
	<title>Home - Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plugins/css/bulma.css">
	<script type="text/javascript" src="<?= base_url() ?>plugins/js/jquery.js"></script>
</head>
<body>
	<div class="section">
		<div class="columns">
			<div class="column is-10 is-offset-1">
				<div class="card" style="border-radius: 20px; overflow: hidden; box-shadow: 0 0 20px 3px #233c9645;">
					<div class="card-content" style="padding: 0; min-height: 600px;">
						<div class="columns">
							<div class="column is-2" style="position: absolute; height: 105%; background-color: #4285f4;">
								<div class="columns is-multiline">
									<!-- Menu Admin -->
									<div class="column is-12">
										<h1 class="title is-5 has-text-centered has-text-white" style="margin-top: 30px; margin-bottom: 5px;">Vothink <span class="title is-7" style="background-color: white; padding: 2px 5px 2px 5px; border-radius: 5px;">ADMIN</span></h1>
									</div>

									
									<div class="column is-12 has-text-centered" style="padding: 20px;">
										<a href="<?= site_url() ?>/admin">
										<img src="<?= base_url() ?>/data/icons/outline_home_white.png">
										<h1 class="title is-6 has-text-centered has-text-white">Beranda</h1>
										</a>
									</div>


								<!-- 	<div class="column is-12 has-text-centered" style="padding: 20px;">
										<a href="<?= site_url() ?>/admin/peserta">
										<img src="<?= base_url() ?>/data/icons/outline_people_white.png">
										<h1 class="title is-6 has-text-centered has-text-white">Peserta</h1>
										</a>
									</div> -->


									<div class="column is-12 has-text-centered" style="padding: 20px;">
										<a href="<?= site_url() ?>/admin/live/count">
										<img src="<?= base_url() ?>/data/icons/outline_poll_white.png">
										<h1 class="title is-6 has-text-centered has-text-white">Live Count</h1>
										</a>
									</div>

									<div class="column is-12 has-text-centered" style="padding: 20px;">
										<a href="<?= site_url() ?>/admin/logout">
										<img src="<?= base_url() ?>/data/icons/outline_power_settings_new_white.png">
										<h1 class="title is-6 has-text-centered has-text-white">Logout</h1>
										</a>
									</div>
								</div>
							</div>

							<div class="column is-10 is-offset-2" style="padding-top: 40px; padding-right: 40px;">