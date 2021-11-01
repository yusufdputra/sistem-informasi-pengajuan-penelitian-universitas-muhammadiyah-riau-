<div class="page">
  <div class="page-content container-fluid">
    <div class="panel">
      <div class="panel-body">
        <div class="example-wrap">
          <form method="get" action="<?php echo base_url() . 'pengajuan/search' ?>">
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
    <div class="panel">
      <div class="panel-body">
        <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>NIM</th>
              <th>Jurusan</th>
              <th>Tgl Pengajuan</th>
              <th>Status</th>
              <th>ID Pengajuan</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $key) : ?>
              <tr>
                <td><?= $key->nama ?></td>
                <td><?= $key->nim ?></td>
                <td><?= $key->jurusan ?></td>
                <td><?= $key->tanggal_pengajuan ?></td>
                <td><span class="badge badge-primary"><?= $key->status_pengajuan ?></span></td>
                <td><?= $key->kode_pengajuan ?></td>
                <td> <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalrincian<?= $key->id_pengajuan ?>" style="color: white"><i class="icon fa-eye" aria-hidden="true"></i>Lihat</a></td>
              <?php endforeach ?>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php foreach ($data as $row) : ?>
  <!-- ============ MODAL HAPUS BARANG =============== -->
  <div class="modal fade" id="modalrincian<?= $row->id_pengajuan ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h3 class="modal-title" id="myModalLabel">Detai pengajuan</h3>
        </div>
        <div class="modal-body">
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama ?>" disabled>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" value="<?= $row->nim ?>" disabled>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="nim">Jurusan</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $row->jurusan ?>" disabled>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="nim">Status</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $row->status_pengajuan ?>" disabled>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="nim">Pembimbing 1 "wajib dosen penasehat akademik</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $row->pembimbing1 ?>" disabled>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="nim">Pembimbing 2</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $row->pembimbing2 ?>" disabled>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="textarea1">judul satu</label>
            <textarea class="form-control" id="textarea1" name="judul1" rows="3" disabled><?= $row->judul1 ?></textarea>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="textarea2">judul dua</label>
            <textarea class="form-control" id="textarea2" name="judul2" rows="3" disabled><?= $row->judul2 ?></textarea>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="textarea3">judul tiga</label>
            <textarea class="form-control" id="textarea3" name="judul3" rows="3" disabled><?= $row->judul3 ?></textarea>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="textarea3">judul yang diterima</label>
            <textarea class="form-control" id="textarea3" name="judul3" rows="3" disabled><?= $row->status1 ?></textarea>
          </div>
        </div>
        <div class="modal-footer">

          <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>