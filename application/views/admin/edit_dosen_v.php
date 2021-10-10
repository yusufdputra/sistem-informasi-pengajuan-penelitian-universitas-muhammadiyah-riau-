<div class="page">
  <div class="page-header">
    <div class="page-header-actions">
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round" data-toggle="tooltip" data-original-title="Edit">
        <i class="icon wb-pencil" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round" data-toggle="tooltip" data-original-title="Refresh">
        <i class="icon wb-refresh" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round" data-toggle="tooltip" data-original-title="Setting">
        <i class="icon wb-settings" aria-hidden="true"></i>
      </button>
    </div>
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
            <h3 class="panel-title">Edit Dosen</h3>
          </div>
            <div class="panel-body container-fluid">
              <form method="post" action="<?php echo base_url() . 'dosen/update' ?>" enctype="multipart/form-data">
                <input type="hidden" name="id_dosen" value="<?= $dosen->id ?>">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen->nama ?>" required>
                </div>
                
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <select id="jurusan" class="form-control" name="jurusan" required>
                    <option value=""> -- Pilih Jurusan -- </option>
                    <option value="Pendidikan Informatika" <?= $dosen->jurusan == 'Pendidikan Informatika' ? 'selected' : '' ?>>Pendidikan Informatika</option>
                    <option value="Pendidikan Bahasa Inggris" <?= $dosen->jurusan == 'Pendidikan Bahasa Inggris' ? 'selected' : '' ?>>Pendidikan Bahasa Inggris</option>
                    <option value="Pendidikan IPA" <?= $dosen->jurusan == 'Pendidikan IPA' ? 'selected' : '' ?>>Pendidikan IPA</option>
                    <option value="Pendidikan elektronika" <?= $dosen->jurusan == 'Pendidikan elektronika' ? 'selected' : '' ?>>Pendidikan elektronika</option>
                  </select>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
              </form>
            </div>

        </div>

      </div>
      <!-- End Panel Static Labels -->
    </div>
  </div>
</div>
</div>