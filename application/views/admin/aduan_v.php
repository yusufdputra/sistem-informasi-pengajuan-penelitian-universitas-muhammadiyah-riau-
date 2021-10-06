    <div class="page">
    	<div class="page-content container-fluid">
    		<div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="panel" style="width: 100%">
            <header class="panel-heading">
              <h3 class="panel-title">Daftar Pengaduan</h3>
            </header>

            <?php if($error=$this->session->flashdata('alert')):?>
              <div class="alert dark alert-success alert-dismissible" role="alert" style="margin-left: 2rem;margin-right: 2rem; border-radius: 5pt;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <strong> <?php echo $error; ?></strong>
              </div>
            <?php endif ?>

            <?php if($error=$this->session->flashdata('hapus')):?>
              <div class="alert dark alert-danger alert-dismissible" role="alert" style="margin-left: 2rem;margin-right: 2rem; border-radius: 5pt;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <strong> <?php echo $error; ?></strong>
              </div>
            <?php endif ?>
            
            <div class="panel-body">
              <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
                <thead>

                  <tr>
                    <th>Nama Pengadu</th>
                    <th>Jabatan</th>
                    <th>Jenis Aduan</th>
                    <th class="sorting_desc">Tanggal</th>
                    <th style="text-align: center;">Status</th>
                    <th>Lihat</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                 <?php foreach($data->result_array() as $i):
                   $id_aduan=$i['id_aduan'];
                   $nama=$i['nama'];
                   $jabatan=$i['jabatan'];
                   $jenis_aduan=$i['jenis_aduan'];
                   $tanggal_aduan=$i['tanggal_aduan'];
                   $status=$i['status'];
                   ?>

                   <tr>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $jabatan;?></td>
                    <td><?php echo $jenis_aduan;?></td>
                    <td><?php echo $tanggal_aduan;?></td>
                    <td style="text-align: center">
                      <?php if ($status == 'Selesai') :?>
                        <a class="badge badge-pill badge-primary badge-xs" style="color: white"> <?php echo $status ?> </a>
                        <?php elseif ($status == 'Sedang Dikerjakan') :?>
                          <a class="badge badge-dark badge-xs" style="color: white"> <?php echo $status ?> </a>
                          <?php elseif ($status == 'Belum Dikerjakan') :?>
                            <a class="badge badge-danger badge-xs" style="color: white"> <?php echo $status ?> </a>
                            <?php else : ?>
                              <a class="badge badge-default badge-xs" style="color: white"> <?php echo $status ?> </a>
                            <?php endif ?>
                          </td>

                          <td><a href="<?= base_url()?>admin/lihat_aduan/<?=$id_aduan?>" class="btn btn-warning btn-xs" style="color: white" > <i class="icon fa-eye" aria-hidden="true"></i>lihat </a>
                          </td>
                          <td style="text-align: center;">
                            <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal_edit<?php echo $id_aduan;?>" style="color: white"><i class="icon fa-mail-forward"></i> proses </a>
                            <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_aduan;?>" style="color: white">hapus</a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- edit status -->
        <?php
        foreach($data->result_array() as $i):
          $id_aduan=$i['id_aduan'];
          $status=$i['status'];
          ?>
          <div class="modal fade" id="modal_edit<?php echo $id_aduan;?>" aria-hidden="true" aria-labelledby="modal_edit"
            role="dialog" tabindex="-1">
            <div class="modal-dialog modal-simple modal-center">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title">pilih Unit yang mengerjakan</h4>
                </div>
                <div class="modal-body">

                 <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/edit_status'?>">
                  <input type="hidden" name="id_aduan" value="<?php echo $id_aduan;?>">
                  <div class="form-group">
                    <br>
                    <label class="control-label col-xs-3" >pilih Unit</label>
                    <div class="col-xs-8">
                     <select name="teknisi" class="form-control" required value="">
                      <option value="">-pilih Unit-</option>
                      <option value="jaringan@gmail.com">Unit Bagian Jaringan</option>
                      <option value="server@gmail.com">Unit Bagian Servers</option>
                      <option value="website@gmail.com">Unit Bagian Website & E-mail</option>
                      <option value="sistemdatabase@gmail.com">Unit Bagian Sistem & Database</option>
                    </select>
                  </div>
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

  <!-- hapus -->
  <?php
  foreach($data->result_array() as $i):
    $id_aduan=$i['id_aduan'];
    ?>
    <!-- ============ MODAL HAPUS =============== -->
    <div class="modal fade" id="modal_hapus<?php echo $id_aduan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title" id="myModalLabel">Hapus Aduan</h3>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/hapus_aduan'?>">
            <div class="modal-body">
              <p>Anda yakin mau menghapus ? </b></p>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_aduan" value="<?php echo $id_aduan;?>">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php endforeach;?>