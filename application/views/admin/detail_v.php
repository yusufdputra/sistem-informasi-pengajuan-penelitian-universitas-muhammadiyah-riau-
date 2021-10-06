<div class="page">
<div class="page-content container-fluid">
<div class="row" data-plugin="matchHeight" data-by-row="true">



<div class="page-content container-fluid">
<!-- Panel Api -->
<div class="panel">
<div class="panel-heading">
<h3 class="panel-title">Detil Aduan</h3>
</div>
<div class="panel-body">
<div class="row row-lg">
	<div class="col-xl-6">

		<?php foreach ($list as $key): ?>
		<table class="table table-bordered">
			<thead>
				
			</thead>
			<tbody>
				<tr>
					<td class="text-middle">Nama Pengadu</td>
					<td>
						<?=$key->nama?>
					</td>
				</tr>
				<tr>
					<td class="text-middle">Nomor Identitas</td>
					<td>
						<?=$key->nomor_identitas?>
					</td>
				</tr>
				<tr>
					<td class="text-middle">Pekerjaan</td>
					<td>
						<?=$key->jabatan?>
					</td>
				</tr>
				<tr>
					<td class="text-middle">Email</td>
					<td>
						<?=$key->username?>
					</td>
				</tr>
				<tbody>
				</table>
			</div>

			<div class="col-xl-6">
				<table class="table table-bordered">
					<thead>
						
					</thead>
					<tbody>
						<tr>
							<td class="text-middle">Jenis Aduan</td>
							<td>
								<?=$key->jenis_aduan?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Tanggal Aduan</td>
							<td>
								<?=$key->tanggal_aduan?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Lokasi</td>
							<td>
								<?=$key->lokasi?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Keterangan</td>
							<td>
								<?=$key->keterangan?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Lampiran</td>
							<td>
								<button id="exampleReplace" type="button" class="btn btn-sm btn-outline btn-primary" data-toggle="modal" data-target="#myModal<?=$key->id_aduan?>"><i class="icon fa-eye"></i>Lihat</button>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Status</td>
							<td>
							  <?php if ($key->status == 'Selesai') :?>
		                      <a class="btn btn-primary" style="color: white"><?=$key->status?> </a>
		                      <?php elseif ($key->status == 'Sedang Dikerjakan') :?>
		                      <a class="btn btn-warning" style="color: white"><?=$key->status?> </a>
		                      <?php elseif ($key->status == 'Belum Dikerjakan') :?>
		                      <a class="btn btn-danger" style="color: white"> <?=$key->status?> </a>
		                      <?php else : ?>
		                      <a class="badge badge-default badge-xs" style="color: white"> <?=$key->status?> </a>
		                        <?php endif ?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Balasan</td>
							<td>
								<?=$key->balasan?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Tanggal balasan</td>
							<td>
								<?=$key->tanggal_balasan?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Lampiran Balasan</td>
							<td>
								<?php if ($key->lampiran_balasan == !0) :?>
								<button id="exampleReplace" type="button" class="btn btn-sm btn-outline btn-primary" data-toggle="modal" data-target="#myModal2<?=$key->id_aduan?>"><i class="icon fa-eye"></i>Lihat</button>
								<?php endif ?>
							</td>
						</tr>
						<tr>
							<td class="text-middle">Unit yang Mengerjakan</td>
							<td>
								<?=$key->teknisi?>
							</td>
						</tr>
						<tbody>
						</table>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Panel Api -->
</div>
</div>
</div>

<!-- image tampil -->
<?php
foreach ($list as $key): ?>
<div class="modal fade" id="myModal<?=$key->id_aduan?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <img width="500px" src="<?=base_url('assets/gambar/')?><?=$key->lampiran?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- end image tampil -->

<!-- image tampil -->
<?php
foreach ($list as $key): ?>
<div class="modal fade" id="myModal2<?=$key->id_aduan?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <img width="500px" src="<?=base_url('assets/gambar/')?><?=$key->lampiran_balasan?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- end image tampil -->