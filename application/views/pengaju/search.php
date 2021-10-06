<div class="page">
	<div class="page-content container-fluid">
    <div class="panel">
	<div class="panel-body">
    <div class="example-wrap">
       <form method="get" action="<?php echo base_url().'pengajuan/search'?>">
                  <h4 class="example-title">Masukkan ID pengajuan</h4>
        
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" name="keyword" placeholder="ID pengajuan...">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="icon wb-search" aria-hidden="true"></i></button>
                      </span>
                    </div>
                    <br>
                    <label>Silahkan masukkan ID pengajuan anda</label>
                  </div>
                  </form>
                </div>
</div>
</div>

<!-- <?php foreach($data as $row) { ?>
<?php if ($row->kode_pengajuan != $this->input->get('keyword')) {?>
<?php echo "string"; ?>

<?php } ?>
<?php } ?>  -->

<?php foreach($data as $qq) { ?>
<?php if ($qq->kode_pengajuan == $this->input->get('keyword') ) { ?>
<div class="row">
  <div class="col-lg-6">
            <!-- Panel Wizard Form Container -->
            <div class="panel" id="exampleWizardFormContainer">
              <div class="panel-heading">
                <h3 class="panel-title">Status</h3>
              </div>
              <div class="panel-body">
                <!-- Steps -->

<!--                 <div class="pearls row">
                  <div class="pearl current col-4 <?php if ($qq->status_pengajuan == 'Menunggu verifikasi') { 
                    echo "active"; } ?>" aria-expanded="true">
                    <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                    <span class="pearl-title">menunggu verifikasi</span>
                  </div>
                  <div class="pearl col-4  <?php if ($qq->status_pengajuan == 'Sedang diproses') { 
                    echo "active"; } ?>" aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                    <span class="pearl-title">Sedang Diproses</span>
                  </div>
                  <div class="pearl col-4  <?php if ($qq->status_pengajuan == 'Selesai') { 
                    echo "active"; } ?>" aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                    <span class="pearl-title">Selesai</span>
                  </div>
                </div> -->
                <?php if ($qq->status_pengajuan == 'Menunggu verifikasi') { ?>
                  <div class="pearls row">
                  <div class="pearl current col-4 active" aria-expanded="true">
                    <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                    <span class="pearl-title">menunggu verifikasi</span>
                  </div>
                  <div class="pearl col-4 " aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                    <span class="pearl-title">Sedang Diproses</span>
                  </div>
                  <div class="pearl col-4 " aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                    <span class="pearl-title">Selesai</span>
                  </div>
                </div>
              <?php } ?>

                <?php if ($qq->status_pengajuan == 'Sedang diproses') { ?>
                  <div class="pearls row">
                  <div class="pearl current col-4 active" aria-expanded="true">
                    <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                    <span class="pearl-title">menunggu verifikasi</span>
                  </div>
                  <div class="pearl col-4 active" aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                    <span class="pearl-title">Sedang Diproses</span>
                  </div>
                  <div class="pearl col-4 " aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                    <span class="pearl-title">Selesai</span>
                  </div>
                </div>
              <?php } ?>

                  <?php if ($qq->status_pengajuan == 'Selesai') { ?>
                  <div class="pearls row">
                  <div class="pearl current col-4 active" aria-expanded="true">
                    <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                    <span class="pearl-title">menunggu verifikasi</span>
                  </div>
                  <div class="pearl col-4 active" aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-payment" aria-hidden="true"></i></div>
                    <span class="pearl-title">Sedang Diproses</span>
                  </div>
                  <div class="pearl col-4 active" aria-expanded="false">
                    <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                    <span class="pearl-title">Selesai</span>
                  </div>
                </div>
              <?php } ?>

                  <?php if ($qq->status_pengajuan == 'Ditolak') { ?>
                  <div class="pearls row">
                    <div class="pearl current col-4 active" aria-expanded="true">
                    <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                    <span class="pearl-title">menunggu verifikasi</span>
                  </div>
                    <div class="pearl col-6 active" aria-expanded="false">
                    <div class="pearl-icon"><i class="fa fa-ban" style="color: red; font-size: 2.3rem;"></i></div>
                    <span class="pearl-title" style="margin-left: 0.5rem" ><b>DITOLAK</b> </span>
                    <p>keterangan : <?=$qq->keterangan?> </p>
                 </div>

                </div>
              <?php } ?>


              </div>
            </div>
          </div>
      <div class="col-md-6">
          <div class="panel">
          <div class="panel-body">
           <div>
            <?php foreach($data as $row) { ?>
           <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?=$row->nama?>" disabled>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nim">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim" value="<?=$row->nim?>" disabled>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nim">Jurusan</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?=$row->jurusan?>" disabled>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="email">email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=$row->email?>" disabled >
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea1">judul satu</label>
                    <textarea class="form-control" id="textarea1" name="judul1" rows="3" disabled ><?=$row->judul1?></textarea>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea2">judul dua</label>
                    <textarea class="form-control" id="textarea2" name="judul2" rows="3" disabled><?=$row->judul2?></textarea>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea3">judul tiga</label>
                    <textarea class="form-control" id="textarea3" name="judul3" rows="3" disabled><?=$row->judul3?></textarea>
                  </div>
                  <?php } ?>
      </div>
      </div>
      </div>
      <?php } else {
        echo "tidak ada data";
      } ?>
      <?php } ?>

</div>
</div>
</div>
</div>