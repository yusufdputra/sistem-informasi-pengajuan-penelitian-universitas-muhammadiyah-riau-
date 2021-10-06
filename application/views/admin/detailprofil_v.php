<div class="page">
  <div class="page-header">
    <h1 class="page-title">Profil</h1>
  </div>

<?php foreach ($list as $key): ?>
  <div class="page-content container-fluid">
    <div class="row">
      <div class="col-lg-3">
        <!-- Page Widget -->
        <div class="card card-shadow text-center">
          <div class="card-block">
            <a data-toggle="modal" data-target="#myModal<?=$key->id_user?>">
              <img src="<?=base_url('assets/gambar/')?><?=$key->foto?>" alt="..." style="width: 200px; height: 200px; border-radius: 50%">
            </a>
            <h4 class="profile-user"><?=$key->nama?></h4>
            <p class="profile-job"><?=$key->username?></p>
            <!-- <p>Hi! I'm Adrian the Senior UI Designer at AmazingSurge. We hope
            you enjoy the design and quality of Social.</p> -->
            <div class="profile-social">
              <a class="icon bd-twitter" href="javascript:void(0)"></a>
              <a class="icon bd-facebook" href="javascript:void(0)"></a>
              <a class="icon bd-dribbble" href="javascript:void(0)"></a>
              <a class="icon bd-github" href="javascript:void(0)"></a>
            </div>
          </div>
        </div>
        <!-- End Page Widget -->
      </div>

      <div class="col-md-9">
        <!-- Panel Floating Labels -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Profil <?=$key->nama?></h3>
          </div>
          <div class="panel-body container-fluid">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="nomor_identitas">Nomor Identitas</label>
                <input type="text" readonly class="form-control" id="nomor_identitas" name="nomor_identitas" placeholder="nomor_identitas" value="<?=$key->nomor_identitas?>">
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="nama">Nama</label>
                <input type="text" readonly class="form-control" id="nama" name="nama" placeholder="nama" value="<?=$key->nama?>">
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="username">E-mail</label>
                <input type="text" readonly class="form-control" id="username" name="username" placeholder="username" value="<?=$key->username?>">
              </div><div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="jabatan">Status/Pekerjaan</label>
                <input type="text" readonly class="form-control" id="jabatan" name="jabatan" placeholder="jabatan" value="<?=$key->jabatan?>">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Panel Floating Labels -->
    </div>
  <?php endforeach ?>
</div>
</div>
</div>

<?php foreach ($list as $key): ?>
<div class="modal fade" id="myModal<?=$key->id_user?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <img width="500px" src="<?=base_url('assets/gambar/')?><?=$key->foto?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>