<div class="page">
  <div class="page-header">
  </div>

  <div class="page-content container-fluid">
    <div class="row">
      <div class="col-md-6" style="margin-left: 22rem">
        <!-- Panel Static Labels -->
        <div class="panel">
          <?php if (validation_errors() != null) : ?>
            <div class="text-center">
              <?= validation_errors() ?>
            </div>
          <?php endif; ?>
          <div class="panel-heading">
            <h3 class="panel-title">Tambah Dosen</h3>
          </div>
          <div class="panel-body container-fluid">
            <form method="post" action="<?php echo base_url() . 'dosen/store' ?>" enctype="multipart/form-data">
              <input type="hidden" name="page" value="add">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('dosen') ?>" required>
              </div>
              
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" class="form-control" name="jurusan" required>
                  <option value=""> -- Pilih Jurusan -- </option>
                  <option value="Pendidikan Informatika" <?= set_value('jurusan') == 'Pendidikan Informatika' ? 'selected' : '' ?>>Pendidikan Informatika</option>
                  <option value="Pendidikan Bahasa Inggris" <?= set_value('jurusan') == 'Pendidikan Bahasa Inggris' ? 'selected' : '' ?>>Pendidikan Bahasa Inggris</option>
                  <option value="Pendidikan IPA" <?= set_value('jurusan') == 'Pendidikan IPA' ? 'selected' : '' ?>>Pendidikan IPA</option>
                  <option value="Pendidikan elektronika" <?= set_value('jurusan') == 'Pendidikan elektronika' ? 'selected' : '' ?>>Pendidikan elektronika</option>
                </select>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              </div>
          </div>

          </form>
        </div>
      </div>
      <!-- End Panel Static Labels -->
    </div>
  </div>
</div>
</div>