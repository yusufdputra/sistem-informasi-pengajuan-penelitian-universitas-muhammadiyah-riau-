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
              <h3 class="panel-title"> Pengajuan</h3>
            </header>

          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Jurusan</th>
                  <th>Tgl Pengajuan</th>
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
                  <td><a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal_edit<?=$key->id_pengajuan?>" style="color: white"><i class="icon fa-eye" aria-hidden="true"></i>Proses</a>  <?=$key->status_pengajuan?> </td>
                  <td> <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalrincian<?=$key->id_pengajuan?>" style="color: white"><i class="icon fa-eye" aria-hidden="true"></i>Lihat</a>   
                    </td>
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
                    <label class="form-control-label" for="nim">Pembimbing 1 "wajib dosen penasehat akademik</label>
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

                 <form class="form-horizontal" method="post" action="<?php echo base_url().'prodi/edit_status'?>">
                  <input type="hidden" name="id_pengajuan" value="<?=$row->id_pengajuan?>">
<!--                   <div class="form-group">
                    <br>
                    <label class="control-label col-xs-3" >Ubah Status</label>
                    <div class="col-xs-8">
                     <select name="status_pengajuan" class="form-control" required value="">
                      <option value="">-pilih Judul-</option>
                      <option value="<?=$row->judul1?> (DITERIMA)"><?=$row->judul1?></option>
                      <option value="<?=$row->judul2?> (DITERIMA)"><?=$row->judul2?></option>
                      <option value="<?=$row->judul3?> (DITERIMA)"><?=$row->judul3?></option>
                    </select>
                  </div>
                </div> -->
                <input type="hidden" name="status_pengajuan" value="Selesai">
                
                  <div class="row">
                    <div class="col-md-6">
                <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea3">Judul 1</label>
                    <textarea class="form-control" id="textarea3" name="Judul 1" rows="3" disabled><?=$row->judul1?></textarea>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea3">Judul 2</label>
                    <textarea class="form-control" id="textarea3" name="Judul 2" rows="3" disabled><?=$row->judul2?></textarea>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea3">Judul 3</label>
                    <textarea class="form-control" id="textarea3" name="Judul 3" rows="3" disabled><?=$row->judul3?></textarea>
                  </div>
                  </div>
                    <div class="col-md-6">
                <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="selectMulti">Pilih Judul</label>
                    <select class="form-control" id="selectMulti" multiple="" name="status1">
                      <option value="<?=$row->judul1?> (DITERIMA)">Judul 1</option>
                      <option value="<?=$row->judul2?> (DITERIMA)">Judul 2</option>
                      <option value="<?=$row->judul3?> (DITERIMA)">Judul 3</option>
                    </select>
                    </div>
                  </div>
                  </div>
               <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="qwqw">Dosen Pembimbing 1</label>
                    <input type="text" class="form-control" id="qwqw" name="pembimbing1">
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="qwe">Dosen Pembimbing 2</label>
                    <input type="text" class="form-control" id="qwe" name="pembimbing2">
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