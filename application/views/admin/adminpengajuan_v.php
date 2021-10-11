 <div class="page">
      <div class="page-content container-fluid">
         <?php if($error=$this->session->flashdata('alert')):?>
              <div class="alert dark alert-success alert-dismissible" role="alert" style="margin-left: 2rem;margin-right: 2rem; border-radius: 5pt;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <strong> <?php echo $error; ?></strong>
              </div>
            <?php endif ?>
        <div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="panel" style="width: 100%">
            <header class="panel-heading">
              <h3 class="panel-title">Pengajuan</h3>
            </header>

          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Jurusan</th>
                  <th>Tgl Pengajuan</th>
                  <th>Berkas Persyaratan</th>
                  <th>Status</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key) : ?>
                <tr>
                  <td><?=$key->nama?></td>
                  <td><?=$key->nim?></td>
                  <td><?=$key->jurusan?></td>
                  <td><?=$key->tanggal_pengajuan?></td>
                  <td><a class="btn btn-success btn-xs" target="_BLANK" href="<?= base_url('assets/pdf/' . $key->url_persyaratan) ?>" style="color: white"> Lihat </a></td>
                  <td><a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal_edit<?=$key->id_pengajuan?>" style="color: white"><i class="icon fa-eye" aria-hidden="true"></i>Proses</a>  <?=$key->status_pengajuan?> </td>
                  <td> <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalrincian<?=$key->id_pengajuan?>" style="color: white"><i class="icon fa-eye" aria-hidden="true"></i>Lihat</a>   
                    <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?=$key->id_pengajuan?>" style="color: white"><i class="icon fa-trash-o"></i>hapus</a></td>
                  <?php endforeach ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="panel" style="width: 100%">
            <header class="panel-heading">
              <h3 class="panel-title">Pengajuan Ditolak</h3>
            </header>

          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Jurusan</th>
                  <th>Tgl Pengajuan</th>
                  
                  <th>Berkas Persyaratan</th>
                  <th>Status</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data1 as $key) : ?>
                <tr>
                  <td><?=$key->nama?></td>
                  <td><?=$key->nim?></td>
                  <td><?=$key->jurusan?></td>
                  <td><?=$key->tanggal_pengajuan?></td>
                  <td><a class="btn btn-success btn-xs" target="_BLANK" href="<?= base_url('assets/pdf/' . $key->url_persyaratan) ?>" style="color: white"> Lihat </a></td>
                  <td> <button class="btn btn-danger btn-xs"><?=$key->status_pengajuan?></button> </td>
                  <td> <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalrincian<?=$key->id_pengajuan?>" style="color: white"><i class="icon fa-eye" aria-hidden="true"></i>Lihat</a>   
                    <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?=$key->id_pengajuan?>" style="color: white"><i class="icon fa-trash-o"></i>hapus</a></td>
                  <?php endforeach ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

 <?php foreach ($data as $row) : ?>
 
  <div class="modal fade" id="modalrincian<?=$row->id_pengajuan?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h3 class="modal-title" id="myModalLabel">Detail pengajuan</h3>
        </div>
          <div class="modal-body">
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
                    <label class="form-control-label" for="nim">Status</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?=$row->status_pengajuan?>" disabled>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nim">Pembimbing 1</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?=$row->pembimbing1?>" disabled>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nim">Pembimbing 2</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?=$row->pembimbing2?>" disabled>
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
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea3">judul yang diterima</label>
                    <textarea class="form-control" id="textarea3" name="judul3" rows="3" disabled><?=$row->status1?></textarea>
                  </div>
          </div>
          <div class="modal-footer">
           
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach;?>

       <?php foreach ($data as $row) : ?>

          <div class="modal fade" id="modal_edit<?=$row->id_pengajuan?>" aria-hidden="true" aria-labelledby="modal_edit"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple modal-center">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title">Proses Pengajuan </h4>
                </div>
                <div class="modal-body">

                 <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/edit_status'?>">
                  <input type="hidden" name="id_pengajuan" value="<?=$row->id_pengajuan?>">
                  <div class="form-group">
                    <br>
                    <label class="control-label col-xs-3" >Ubah Status</label>
                    <div class="col-xs-8">
                     <select name="status_pengajuan" class="form-control" required value="">
                      <option value="">-pilih status-</option>
                      <option value="Ditolak">Ditolak</option>
                      <option value="Sedang diproses">Di terima</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea3">keterangan</label>
                    <textarea class="form-control" id="textarea3" name="keterangan" rows="3"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-info">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>


   <?php foreach ($data as $row) : ?>

    <!-- ============ MODAL HAPUS =============== -->
    <div class="modal fade" id="modal_hapus<?=$row->id_pengajuan?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title" id="myModalLabel">Hapus Pengajuan</h3>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/hapus_pengajuan'?>">
            <div class="modal-body">
              <p>Anda yakin mau menghapus ? </b></p>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_pengajuan" value="<?=$row->id_pengajuan?>">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php endforeach;?>

    <?php foreach ($data1 as $row) : ?>
 
  <div class="modal fade" id="modalrincian<?=$row->id_pengajuan?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h3 class="modal-title" id="myModalLabel">Detail pengajuan</h3>
        </div>
          <div class="modal-body">
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
                    <label class="form-control-label" for="nim">Status</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?=$row->status_pengajuan?>" disabled>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nim">Pembimbing 1</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?=$row->pembimbing1?>" disabled>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nim">Pembimbing 2</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?=$row->pembimbing2?>" disabled>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea1">judul satu</label>
                    <textarea class="form-control" id="textarea1" name="judul1" rows="3" disabled ><?=$row->judul1?> <?=$row->status1?></textarea>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea2">judul dua</label>
                    <textarea class="form-control" id="textarea2" name="judul2" rows="3" disabled><?=$row->judul2?> <?=$row->status2?></textarea>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea3">judul tiga</label>
                    <textarea class="form-control" id="textarea3" name="judul3" rows="3" disabled><?=$row->judul3?> <?=$row->status3?></textarea>
                  </div>
          </div>
          <div class="modal-footer">
           
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach;?>

 <?php foreach ($data1 as $row) : ?>

    <!-- ============ MODAL HAPUS =============== -->
    <div class="modal fade" id="modal_hapus<?=$row->id_pengajuan?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title" id="myModalLabel">Hapus Pengajuan</h3>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/hapus_pengajuan'?>">
            <div class="modal-body">
              <p>Anda yakin mau menghapus ? </b></p>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_pengajuan" value="<?=$row->id_pengajuan?>">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php endforeach;?>