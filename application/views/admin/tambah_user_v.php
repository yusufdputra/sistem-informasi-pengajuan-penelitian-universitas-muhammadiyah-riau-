<div class="page">
  <div class="page-header">
    <!-- <h1 class="page-title">Tambah Aduan</h1> -->
    <!--   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
      <li class="breadcrumb-item active">General</li>
    </ol> -->
    <!-- <div class="page-header-actions">
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round" data-toggle="tooltip" data-original-title="Edit">
        <i class="icon wb-pencil" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round" data-toggle="tooltip" data-original-title="Refresh">
        <i class="icon wb-refresh" aria-hidden="true"></i>
      </button>
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round" data-toggle="tooltip" data-original-title="Setting">
        <i class="icon wb-settings" aria-hidden="true"></i>
      </button>
    </div> -->
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
            <h3 class="panel-title">Tambah User</h3>
          </div>
          <div class="panel-body container-fluid">
            <form method="post" action="<?php echo base_url() . 'admin/add_user' ?>" enctype="multipart/form-data">
              <input type="hidden" name="page" value="add">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>" required>
              </div>
              <div class="form-group">
                <label for="inputEmail">Username</label>
                <input type="text" class="form-control" id="inputEmail" name="username" placeholder="Username" required value="<?= set_value('username') ?>">
              </div>
              <div class="form-group">
                <label for="inputEmailx">Email</label>
                <input value="<?= set_value('email') ?>" type="email" class="form-control" id="inputEmailx" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="">Level</label>
                <select id="level" class="form-control" name="level" required>
                  <option value=""> -- Pilih Level -- </option>
                  <option value="Admin" <?= set_value('level') == 'Admin' ? 'selected' : '' ?>>Admin</option>
                  <option value="Mahasiswa" <?= set_value('level') == 'Mahasiswa' ? 'selected' : '' ?>>Mahasiswa</option>
                  <option value="Pendidikan Informatika" <?= set_value('level') == 'Pendidikan Informatika' ? 'selected' : '' ?>>Prodi Pendidikan Informatika</option>
                  <option value="Pendidikan Bahasa Inggris" <?= set_value('level') == 'Pendidikan Bahasa Inggris' ? 'selected' : '' ?>>Prodi Pendidikan Bahasa Inggris</option>
                  <option value="Pendidikan IPA" <?= set_value('level') == 'Pendidikan IPA' ? 'selected' : '' ?>>Prodi Pendidikan IPA</option>
                  <option value="Pendidikan elektronika" <?= set_value('level') == 'Pendidikan elektronika' ? 'selected' : '' ?>>Prodi Pendidikan elektronika</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputPassword1">Password</label>
                <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password" required>
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
              <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control">
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