<div class="columns">
	<div class="column is-10 is-offset-1" style="margin-top: 20px;">
		<h1 class="title is-4">Data Live Count</h1>
		<h1 class="subtitle is-6">Berikut adalah data pemungutan suara secara live</h1>
		<div class="columns is-multiline">
			<?php foreach( $perolehan_suara as $suara ) : ?>
			<div class="column is-4">
				<div class="card" style="min-height: 200px; max-height: 200px; overflow-y: auto; box-shadow: 0 0 13px 0px rgba(0,0,0,0.2);">
					<div class="card-content">
						<h1 class="title is-6 has-text-centered" style="margin-bottom: 10px;"><?= $suara['nama_kandidat'] ?></h1>
						<h1 class="title is-4 has-text-centered"><?php $hasil = number_format(($suara['jumlah_suara'] / $jumlah_peserta) * 100, 2); echo $hasil . '%'; ?></h1>
						<h1 class="title is-7 has-text-centered" style="margin-bottom: 10px;">Jumlah suara masuk</h1>
						<h1 class="title is-6 has-text-centered"> <?= $suara['jumlah_suara'] ?> Suara</h1>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="columns is-multiline">
			<div class="column is-6">
				<div class="card" style="background-color: #4285f4; box-shadow: 0 0 13px 0px #295bafab;">
					<div class="card-content">
						<h1 class="title is-6 has-text-centered has-text-white">TOTAL SUARA MASUK</h1>
						<h1 class="title is-2 has-text-centered has-text-white"><?php $hasil = number_format(($total_suara / $jumlah_peserta) * 100, 2); echo $hasil . '%'; ?></h1>
						<h1 class="title is-7 has-text-centered has-text-white" style="margin-bottom: 10px;">Jumlah suara masuk</h1>
							<h1 class="title is-6 has-text-centered has-text-white"> <?= $total_suara ?> Suara</h1>
					</div>
				</div>
			</div>
<!-- 
			<div class="column is-6">
				<div class="card suara-tertunda" style="box-shadow: 0 0 13px 0px rgba(0,0,0,0.2); overflow-y: auto;">
					<div class="card-content">
						<h1 class="title is-6 ">SUARA BELUM MASUK</h1>
						<div>

							<div class="card">
								<div class="card-content" style="padding: 15px; margin-bottom: 12px;">
									<h1 class="title is-6" style="margin-bottom: 5px;">ARDI HARI PRASETIYO</h1>
									<h1 class="title is-7">10 Multimedia 3</h1>
								</div>
							</div>


							<div class="card">
								<div class="card-content" style="padding: 15px; margin-bottom: 12px;">
									<h1 class="title is-6" style="margin-bottom: 5px;">ARDI HARI PRASETIYO</h1>
									<h1 class="title is-7">10 Multimedia 3</h1>
								</div>
							</div>


							<div class="card">
								<div class="card-content" style="padding: 15px; margin-bottom: 12px;">
									<h1 class="title is-6" style="margin-bottom: 5px;">ARDI HARI PRASETIYO</h1>
									<h1 class="title is-7">10 Multimedia 3</h1>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div> -->

<!-- 
<script>
	$(document).ready(function(){
		let actualSuaraHeight = $('.suara-tertunda').height();
		$('.suara-tertunda').height(200);
		$('.suara-tertunda').on('scroll', function(){
			if( $('.suara-tertunda').scrollTop() == actualSuaraHeight - 200 ){
				console.log('sama');
				$('.suara-tertunda').append(`Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.`);
			}
			$('.suara-tertunda').height(200);
			console.log($('.suara-tertunda').scrollTop());
			console.log(actualSuaraHeight - 200);
		});
	});
</script> -->