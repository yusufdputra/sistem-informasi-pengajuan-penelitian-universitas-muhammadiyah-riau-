<div class="page">
  <div class="page-header">
    <h1 class="page-title">Profil</h1>
  </div>
  <?php foreach($data->result_array() as $i):
  $id_user=$i['id_user'];
  $nomor_identitas=$i['nomor_identitas'];
  $nama=$i['nama'];
  $username=$i['username'];
  $jabatan=$i['jabatan'];
  $password=$i['password'];
  $foto=$i['foto'];
  ?>
  <div class="page-content container-fluid">
    <div class="row">
      <div class="col-lg-3">
        <!-- Page Widget -->
        <div class="card card-shadow text-center">
          <div class="card-block">
            <a data-toggle="modal" data-target="#myModal<?php echo $id_user;?>">
              <img src="<?=base_url('assets/gambar/')?><?php echo $foto;?>" alt="..." style="width: 200px; height: 200px; border-radius: 100%">
            </a>
            <h4 class="profile-user"><?php echo $nama;?></h4>
            <p class="profile-job"><?php echo $username;?></p>
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
            <h3 class="panel-title">Update Profil</h3>
          </div>
          <div class="panel-body container-fluid">
            <form method="post" action="<?php echo base_url().'pengadu/update_profil'?>" enctype="multipart/form-data">
              <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="nomor_identitas">Nomor Identitas</label>
                <input type="text" readonly class="form-control" id="nomor_identitas" name="nomor_identitas" placeholder="nomor_identitas" value="<?php echo $nomor_identitas;?>">
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?php echo $nama;?>">
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="username">E-mail</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?php echo $username;?>">
              </div><div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="jabatan">Status/Pekerjaan</label>
                <input type="text" readonly class="form-control" id="jabatan" name="jabatan" placeholder="jabatan" value="<?php echo $jabatan;?>">
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password wajib diisi saat mengubah profil" required>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="inputFile">Foto</label>
                <input type="text" class="form-control" placeholder="Browse.." readonly="" value="<?php echo $foto;?>"/>
                <input type="file" id="inputFile" name="filefoto" multiple="" value="<?php echo $foto;?>"/>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Simpan</button>
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

<!-- modal image tampil -->
<?php
foreach($data->result_array() as $i):
  $id_user=$i['id_user'];
  $foto=$i['foto'];
  ?>
<div class="modal fade" id="myModal<?php echo $id_user;?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <img width="500px" src="<?=base_url('assets/gambar/')?><?php echo $foto;?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<!-- end image tampil -->