<style type="text/css">
  .rating {
    display: inline-block;
    position: relative;
    height: 50px;
    line-height: 50px;
    font-size: 50px;
  }

  .rating label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    cursor: pointer;
  }

  .rating label:last-child {
    position: static;
  }

  .rating label:nth-child(1) {
    z-index: 5;
  }

  .rating label:nth-child(2) {
    z-index: 4;
  }

  .rating label:nth-child(3) {
    z-index: 3;
  }

  .rating label:nth-child(4) {
    z-index: 2;
  }

  .rating label:nth-child(5) {
    z-index: 1;
  }

  .rating label input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
  }

  .rating label .icon {
    float: left;
    color: transparent;
    font-size: 5rem;
  }

  .rating label:last-child .icon {
    color: #000;
  }

  .rating:not(:hover) label input:checked ~ .icon,
  .rating:hover label:hover input ~ .icon {
    color: #09f;
  }

  .rating label input:focus:not(:checked) ~ .icon:last-child {
    color: #000;
    text-shadow: 0 0 5px #09f;
  }
</style>

<div class="page">
 <div class="page-content container-fluid">
  <div class="row" data-plugin="matchHeight" data-by-row="true">

    <div class="panel" style="width: 100%">
      <header class="panel-heading">
        <h3 class="panel-title">Daftar Pengaduan</h3>
        <a href="<?= base_url()?>pengadu/tambah_aduan"><button class="btn btn-primary" style="margin-left: 30px; margin-bottom: 1rem;"><i class="fa fa-plus"></i> Ajukan Aduan</button></a>
      </header>

      <?php if($error=$this->session->flashdata('alert')):?>
        <div class="alert dark alert-success alert-dismissible" role="alert" style="margin-left: 2rem;margin-right: 2rem; border-radius: 5pt;">
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
              <th>Jenis Aduan</th>
              <th>Lokasi</th>
              <th class="sorting_desc">Tanggal</th>
              <th>Lampiran</th>
              <th style="text-align: center;">Status</th>
              <th>Rincian</th>
              <th style="text-align: center;">Aksi</th>
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
             $rating = $i['rating'];
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
              <td style="text-align: center">
                <?php if ($status == 'Selesai') :?>
                  <button class="btn btn-success btn-xs"><i class="icon fa-check-circle"></i><?php echo $status;?></button>
                  <?php elseif ($status == 'Sedang Dikerjakan') :?>
                    <a class="badge badge-dark badge-xs" style="color: white"> <?php echo $status ?> </a>
                    <?php elseif ($status == 'Belum Dikerjakan') :?>
                      <a class="badge badge-danger badge-xs" style="color: white"> <?php echo $status ?> </a>
                      <?php else : ?>
                        <a class="badge badge-default badge-xs" style="color: white"> <?php echo $status ?> </a>
                      <?php endif ?>
                    </td>
                    <td><a href="<?= base_url()?>pengadu/lihat_aduan/<?=$id_aduan?>" class="btn btn-info btn-xs" style="color: white" > <i class="icon fa-eye" aria-hidden="true"></i>Rincian </a>
                    </td>
                    <td style="text-align: center;">
                     <?php if ($status == 'Selesai') :?>
                      <a class="btn btn-dark btn-xs" data-toggle="modal" data-target="#modal_rating<?php echo $id_aduan;?>" style="color: white">Rate !</a>
                    <?php endif ?>

                    <?php if ($status == 'Belum Dikerjakan') :?>
                      <a class="btn btn-success btn-xs" href="<?= base_url()?>pengadu/edit_aduan/<?php echo $id_aduan;?>" style="color: white"> ubah </a>
                    <?php endif ?>

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

<!-- rate -->
<?php
foreach($data->result_array() as $i):
  $id_aduan=$i['id_aduan'];
  $rating=$i['rating'];
  ?>
  <div class="modal fade" id="modal_rating<?php echo $id_aduan;?>" aria-hidden="true" aria-labelledby="modal_edit"
    role="dialog" tabindex="-1">
    <div class="modal-dialog modal-simple modal-center">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title">Berikan Penilaian anda atas pelayanan kami</h4>
        </div>
        <div class="modal-body">

         <form class="form-horizontal" method="post" action="<?php echo base_url().'pengadu/rating'?>">
          <input type="hidden" name="id_aduan" value="<?php echo $id_aduan;?>">
          <div class="form-group">
            <br>
            <label class="control-label col-xs-3" >Rate it!</label>
            <div class="col-xs-8">
            <div class="rating" style="margin-left: 5rem">
              <label>
                <input type="radio" name="rating" value="1" />
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="rating" value="2" />
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="rating" value="3" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>   
              </label>
              <label>
                <input type="radio" name="rating" value="4" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
              <label>
                <input type="radio" name="rating" value="5" />
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
                <span class="icon">★</span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
        <button class="btn btn-info">Rate it</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<?php endforeach;?>