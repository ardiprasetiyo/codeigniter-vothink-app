<!DOCTYPE 	html>
<html>
<head>
	<title>Absen Panitia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plugins/css/bulma.css">
	<script type="text/javascript" src="<?= base_url() ?>plugins/js/jquery.js"></script>
</head>
<body>
	<div class="section">
		<div class="columns">
			<div class="column is-12">
				<h1 class="title is-5 has-text-centered" style="font-weight: 300;">Absen Peserta</h1>
			</div>

			<?php if( $this->session->flashdata('err_search') ) :  ?>
			<div class="column is-12">
				<div class="card has-text-white has-background-danger">
					<div class="card-content"><?= $this->session->flashdata('err_search')['message']; ?></div>
				</div>
			</div>
			<?php endif;?>

			<div class="column is-12">
				<div class="card">
					<div class="card-content">
						<h1 class="title is-6 has-text-centered" style="font-weight: 100;">Cari Nama Peserta</h1>
						<form method="POST" action="<?= site_url() ?>/panitia/absen/search">
							<input type="text" name="cari-peserta" class="input" required>
							<button type="submit" name="submit" class="button is-fullwidth has-background-success has-text-white" style="margin-top: 20px;">Cari Absen</button>
						</form>
					</div>
				</div>
			</div>

			<?php if( $this->session->userdata('search_result') ) : ?>

			<div class="column is-12">
				<div class="card">
					<div class="card-content">
						<h1 class="title is-6 has-text-centered" style="font-weight: 100; margin-bottom: 20px;">Hasil Pencarian</h1>
						
						<?php foreach( $this->session->userdata('search_result') as $result ) : ?>
							<h1 class="title is-6" style="font-weight: 500"><?= $result['nama_lengkap'] ?> <br>( <?= $result['kode_peserta'] ?> )</h1>
						<?php endforeach; ?>

					</div>
				</div>
			</div>

			<?php endif;?>


		</div>
	</div>
</body>
</html>