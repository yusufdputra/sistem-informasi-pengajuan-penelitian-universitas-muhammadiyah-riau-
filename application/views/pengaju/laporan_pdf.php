<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Laporan</title>

	<style>
		html,
		body {
			margin: 0;
			padding: 0;
			height: 100%;
		}

		#container {
			min-height: 100%;
			position: relative;
		}

		#header {
			padding-left: 30px;
			padding-right: 30px;
			padding-top: 30px;
		}

		#body {
			padding: 30px;
			padding-bottom: 60px;
			/* Height of the footer */
		}

		#footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
		}
	</style>

</head>

<body>

	<div id="container">
		<div id="header">
			<div style="float: left;">
				<img height="100px" src="assets/logo_umri.png" alt="">
			</div>

			<div style="text-align: center; color: green;">
				<span style="font-size: 24px; font-weight: bold;">FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN</span> <br>
				<span style="font-size: 32px; font-weight: bold;">UNIVERSITAS MUHAMMADIYAH RIAU</span> <br>
				<span style="font-size: 13px; font-weight: bold;">Jalan Tuanku Tambusai, Pekanbaru 28294 Telp./Fax. (0761) 839577</span><br>
				<span style="font-size: 13px; font-weight: bold;">umri@umri.ac.id - http://www.umri.ac.id</span><br>
				<br>
				<hr>
			</div>
		</div>


		<div id="body">
			<p>Dekan Fakultas Keguruan dan Ilmu Pendidikan Universitas Muhammadiyah Riau, dengan ini menerangkan bahwa :</p>
			<div>

				<table>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?= strtoupper($data->nama) ?></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><?= strtoupper($data->nim) ?></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td><?= strtoupper($data->jurusan) ?></td>
					</tr>
					<tr>
						<td>Status</td>
						<td>:</td>
						<td><?= strtoupper($data->status_pengajuan) ?></td>
					</tr>
				</table>

				<p>Pembimbing 1 *wajib dosen penasehat akademik
					<br>
					: <?= strtoupper($data->pembimbing1) ?>
				</p>

				<p>Pembimbing 2
					<br>
					: <?= strtoupper($data->pembimbing2) ?>
				</p>

				<p>Judul yang diterima
					<br>
					:
					<?php
					if ($data->status_pengajuan == 'Selesai') {
						echo strtoupper($judul);
					}else{
						echo "-";
					}
					?>
				</p>

				<div style="width: 30%; text-align: left; float: right;">Pekabaru, <?= date("d F Y") ?></div><br>
				<div style="width: 30%; text-align: left; float: right;">Dekan,</div><br><br><br><br><br>
				<div style="width: 30%; text-align: left; float: right;"><u> Edi Ismanto, S.T,. M.Kom</u><br>
					NPK. 08 061186 2015 01 113</div>


			</div>
		</div>
	</div>


</body>

</html>