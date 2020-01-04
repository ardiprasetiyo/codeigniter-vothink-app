<!DOCTYPE html>
<html>
<head>
	<title>Login - Peserta</title>
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
						<div class="columns" style="margin-left: 0px;">
							<div class="column is-6" style="position: absolute; height: 105%; padding: 40px;">
								<img src="<?= base_url() ?>data/illustration/decide_illustration.svg" style="margin-top: 60px;">
								<h1 class="title is-5 has-text-centered" style="font-weight: 100;"><br>Suara anda menentukan masa depan sekolah kita.</h1>
							</div>
							<div class="column is-6" style="position: absolute; overflow-y: auto; height: 105%; right: 0px;background-color: #4285f4; box-shadow: -1px 0px 12px 0px #4a80d885; padding: 40px;">
								<h1 class="title is-1 has-text-centered has-text-white" style="margin-top: 55px; margin-bottom: 5px;">Vothink <span class="title is-7" style="background-color: white; padding: 2px 5px 2px 5px; border-radius: 5px;">BETA</span></h1>
								<h1 class="title is-6 has-text-white has-text-centered" style="font-weight: 100; margin-bottom: 40px;">Paperless, Efficient, Accurate Voting App</h1>
								<h1 class="title is-5 has-text-centered has-text-white" style="margin-bottom: 15px; font-weight: 500;">Masukan kode peserta</h1>

								<?php if( $this->session->flashdata('err_login') ) : ?>

									<div class="card" style="border-radius: 20px; background-color: #da5252; color: white; border: none; box-shadow: 0 0 13px 0px #da5252; margin-bottom: 20px;">
										<div class="card-content">
											<?= $this->session->flashdata('err_login')['message']; ?>
										</div>
									</div>

								<?php endif;?>

								<form method="POST" action="<?= site_url() ?>/tps/login/verifikasi/peserta">
									<div class="columns">
										<div class="column is-8 is-offset-2">
											<input type="text" name="id-peserta" required class="input title is-4 has-text-centered" style="height: 50px; border-radius: 30px;" placeholder="x x x x">
										</div>
									</div>
									<div class="columns">
										<div class="column is-6 is-offset-3">
											<button type="submit" name="submit" class="input button button-blue" style="border-radius: 20px; background-color: #41ce9f; color: white; border: none; box-shadow: 0 0 13px 0px #3ccc9c;"><b>SUBMIT</b></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>