<!DOCTYPE html>
<html>
<head>
	<title>TPS - Coblos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plugins/css/bulma.css">
	<script type="text/javascript" src="<?= base_url() ?>plugins/js/jquery.js"></script>
	<style>
	.popup-wrapper{
		background-color: rgba(0,0,0,0.2);
		position: fixed;
		width: 100%;
		height: 100%;
		z-index: 1;
		display: none;

	}
</style>
</head>
<body>
	<div class="popup-wrapper">
		<div class="columns">
			<div class="column is-4 is-offset-4">
				<div class="card" style="margin-top: 200px;">
					<div class="card-content popup-content">
						
					</div>
				</div>
			</div>
		</div>		
	</div>


	<div class="section">
		<div class="columns">
			<div class="column is-10 is-offset-1">
				<div class="card" style="border-radius: 20px; overflow: hidden; box-shadow: 0 0 20px 3px #233c9645;">
					<div class="card-content" style="padding: 0; min-height: 600px;">
						<div class="columns">
							<div class="column is-12" style="background-color: #4285f4;  padding: 25px 35px 15px 35px;">
								<div class="columns">
									<div class="column is-6">
										<h1 class="title is-5 has-text-white" style="margin-top: 1px; margin-bottom: 5px; margin-left: 20px;">Vothink <span class="title is-7" style="background-color: white; padding: 1px 3px 1px 3px; border-radius: 5px;">BETA</span></h1>
									</div>
									<div class="column is-5">
										<h1 class="title is-6 has-text-white has-text-right" style="margin-top: 5px;"><?= strtoupper($this->session->userdata('p_data')['nama_lengkap']) ?></h1>
									</div>
									<div class="column is-1">
										<img src="<?= base_url() ?>/data/icons/round_person_outline_white.png" align="center" width="45%">
									</div>
								</div>
							</div>
						</div>

						<div class="columns">
							<div class="column is-12" style="padding: 40px;">
								<div class="columns">
									<div class="column is-6 is-offset-3">
										<h1 class="title is-4 has-text-centered" style="margin-bottom: 5px;">Kandidat</h1>
										<h1 class="title is-5 has-text-centered" style="font-weight: 100; margin-bottom: 20px;">Pilih kandidat calon pemimpin</h1>
									</div>
								</div>
								<div class="columns is-multiline">

									<?php if( $data_kandidat ) :  ?>

										<?php foreach( $data_kandidat as $kandidat ) : ?>
											
											<div class="column is-6">
												<div class="card">
													<div class="card-content">
														<div class="columns">
															<div class="column is-6" style="padding: 0;">
																<a href="#!" name="coblos" id-kandidat="<?= $kandidat['id_kandidat'] ?>" nama-kandidat="<?= $kandidat['nama_kandidat'] ?>">
																	<img src="<?= base_url() ?>/data/foto_kandidat/<?= $kandidat['foto_kandidat'] ?>">
																</div>
															</a>
															<div class="column is-6" style="min-height: 250px; max-height: 250px;">
																<h1 class="title is-5" style="margin-bottom: 20px;"><?= $kandidat['nama_kandidat'] ?></h1>
																<div class="columns">
																	<div class="column is-12" style="overflow-y: auto; height: 170px;">
																		<h1 class="subtitle is-6"><i><?= $kandidat['visi_misi_kandidat'] ?></i></h1>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										<?php endforeach;?>

										<?php else : ?>

											<div class="column is-12">
												<h1 class="title is-5 has-text-centered">Pemilu belum diselenggarakan</h1>
											</div>

										<?php endif; ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>



		<script>
			$(document).ready(function(){
				$('body').on('click', 'a[name=coblos]', function(){
					let id_kandidat = $(this).attr('id-kandidat');
					let nama_kandidat = $(this).attr('nama-kandidat');
					$('.popup-content').html(`
						<div class="columns">
						<div class="column is-12">
						<h1 class="title is-5">Apakah kamu yakin akan memilih <br> <b>${ nama_kandidat }?</b> </h1>
						<a href="<?= site_url() ?>/tps/coblos/kandidat/${id_kandidat}" class="button has-background-success has-text-white label">Yakin</a>
						<a href="#!" name="close-popup" class="button has-background-info has-text-white label">Kembali</a>
						</div>
						</div>
						`);
					$('.popup-wrapper').fadeIn(300);
				});

				$('body').on('click', 'a[name=close-popup]', function(){
					$('.popup-wrapper').fadeOut(300);
				});
			});
		</script>


	</body>
	</html>