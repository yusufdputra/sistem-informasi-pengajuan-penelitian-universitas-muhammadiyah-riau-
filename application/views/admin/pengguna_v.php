    <div class="page">
      <div class="page-content container-fluid">
        <?php if ($error = $this->session->flashdata('alert')) : ?>
          <div class="alert dark alert-success alert-dismissible" role="alert" style="margin-left: 2rem;margin-right: 2rem; border-radius: 5pt;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong> <?php echo $error; ?></strong>
          </div>
        <?php endif ?>
        <div class="row" data-plugin="matchHeight" data-by-row="true">


          <a href="<?= base_url() ?>admin/tambah_user"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-send"></span> <i class="fa fa-user-plus"></i> Tambah User </button></a>

          <div class="panel" style="width: 100%">
            <header class="panel-heading">
              <h3 class="panel-title">Data Pengguna</h3>
            </header>

            <?php if ($error = $this->session->flashdata('hapus')) : ?>
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Gambar</th>

                    <th style="text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($data->result_array() as $i) :
                    $id_user = $i['id_user'];
                    $nama = $i['nama'];
                    $email = $i['email'];
                    $username = $i['username'];
                    $level = $i['level'];
                    $foto = $i['foto'] != null ? $i['foto'] : 'default.png';

                  ?>

                    <tr>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><?php echo $username; ?></td>
                      <td><?php echo $level; ?></td>
                      <td>
                        <img src="<?= base_url('assets/img/' . $foto) ?>" class="w-100" alt="">
                      </td>


                      <td style="text-align: center;">
                        <a class="btn btn-success btn-xs" href="<?= base_url() ?>admin/edit_user/<?= $id_user ?>" style="color: white"> edit </a>

                        <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal_hapus<?php echo $id_user; ?>" style="color: white">hapus</a>
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

    <!-- hapus -->
    <?php
    foreach ($data->result_array() as $i) :
      $id_user = $i['id_user'];
    ?>
      <!-- ============ MODAL HAPUS BARANG =============== -->
      <div class="modal fade" id="modal_hapus<?php echo $id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
              <h3 class="modal-title" id="myModalLabel">Hapus Pengguna</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/hapus_pengguna' ?>">
              <div class="modal-body">
                <p>Anda yakin mau menghapus ? </p>
                <p><small>Semua Data Pengguna juga akan Dihapus</small></p>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-danger">Hapus</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>