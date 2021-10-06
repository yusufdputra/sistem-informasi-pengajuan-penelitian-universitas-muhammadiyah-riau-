    <div class="page">
    	<div class="page-content container-fluid">
    		<div class="row" data-plugin="matchHeight" data-by-row="true">

          <div class="panel" style="width: 100%">
            <header class="panel-heading">
              <h3 class="panel-title">Riwayat Pengaduan</h3>
            </header>
            <div class="panel-body">
              <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
                <thead>

                  <tr>
                    <th>Nama</th>
                    <th>Jenis Aduan</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Lampiran</th>
                    <th>Status</th>
                    <th>Rincian</th>
                  </tr>
                </thead>
                <tbody>

                 <?php foreach($data->result_array() as $i):
                   $id_aduan=$i['id_aduan'];
                   $nama=$i['nama'];
                   $jenis_aduan=$i['jenis_aduan'];
                   $lokasi=$i['lokasi'];
                   $tanggal_aduan=$i['tanggal_aduan'];
                   $lampiran=$i['lampiran'];
                   $status=$i['status'];
                   $rating=$i['rating'];
                   ?>

                   <tr>

                    <td><?php echo $nama;?></td>
                    <td><?php echo $jenis_aduan;?>

                    <?php if ($status == 'Selesai') :?>
                      <br>
                      <?php if ($rating == NULL):?>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                        <?php elseif ($rating == '1'):?>
                          <span class="fa fa-star" style="color: orange;"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>

                          <?php elseif ($rating == '2'):?>
                            <span class="fa fa-star" style="color: orange;"></span>
                            <span class="fa fa-star" style="color: orange;"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                            <?php elseif ($rating == '3'):?>
                              <span class="fa fa-star" style="color: orange;"></span>
                              <span class="fa fa-star" style="color: orange;"></span>
                              <span class="fa fa-star" style="color: orange;"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>

                              <?php elseif ($rating == '4'):?>
                                <span class="fa fa-star" style="color: orange;"></span>
                                <span class="fa fa-star" style="color: orange;"></span>
                                <span class="fa fa-star" style="color: orange;"></span>
                                <span class="fa fa-star" style="color: orange;"></span>
                                <span class="fa fa-star"></span>

                                <?php elseif ($rating == '5'):?>
                                  <span class="fa fa-star" style="color: orange;"></span>
                                  <span class="fa fa-star" style="color: orange;"></span>
                                  <span class="fa fa-star" style="color: orange;"></span>
                                  <span class="fa fa-star" style="color: orange;"></span>
                                  <span class="fa fa-star" style="color: orange;"></span>
                                <?php endif ?>
                              <?php endif ?>
                            </td>
                            <td><?php echo $lokasi;?></td>
                            <td><?php echo $tanggal_aduan;?></td>
                            <td><a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal<?php echo $id_aduan;?>" style="color: white" > <i class="icon fa-eye" aria-hidden="true"></i>lihat </a>
                            </td>
                            <td><?php echo $status;?></td>
                            <td><a href="<?= base_url()?>pengadu/lihat_aduan/<?=$id_aduan?>" class="btn btn-info btn-xs" style="color: white" > <i class="icon fa-eye" aria-hidden="true"></i>Rincian </a>
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

          <!-- image tampil -->
          <?php
          foreach($data->result_array() as $i):
            $id_aduan=$i['id_aduan'];
            $lampiran=$i['lampiran'];
            ?>
            <div class="modal fade" id="myModal<?php echo $id_aduan;?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-body">
                    <img width="500px" src="<?=base_url('assets/gambar/')?><?php echo $lampiran;?>">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach;?>
          <!-- end image tampil -->

          <!-- hapus -->
          <?php
          foreach($data->result_array() as $i):
            $id_aduan=$i['id_aduan'];
            ?>
            <!-- ============ MODAL HAPUS BARANG =============== -->
            <div class="modal fade" id="modal_hapus<?php echo $id_aduan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Hapus Aduan</h3>
                  </div>
                  <form class="form-horizontal" method="post" action="<?php echo base_url().'pengadu/hapus_aduan'?>">
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