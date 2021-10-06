<div class="page">
  <div class="page-header">
    <!-- <h1 class="page-title">Tambah Aduan</h1> -->
    <!--   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
      <li class="breadcrumb-item active">General</li>
    </ol> -->
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
            <h3 class="panel-title">Edit User</h3>
          </div>
          <?php foreach ($data as $key) : ?>
            <div class="panel-body container-fluid">
              <form method="post" action="<?php echo base_url() . 'admin/update_user' ?>" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?= $key->id_user ?>">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $key->nama ?>" required>
                </div>
                <div class="form-group">
                  <label for="inputEmail">Username</label>
                  <input type="text" class="form-control" id="inputEmail" name="username" value="<?= $key->username ?>" required>
                </div>
                <div class="form-group">
                  <label for="inputEmailx">Email</label>
                  <input type="text" class="form-control" id="inputEmailx" name="email" value="<?= $key->email ?>" required>
                </div>
                <!-- <div class="form-group">
              <label  for="inputEmailxx">Jabatan</label>
              <input type="text" class="form-control" id="inputEmailxx" name="jabatan" placeholder="No. Pegawai" required>
            </div> -->
                <div class="form-group">
                  <label for="">Level</label>
                  <select id="level" class="form-control" name="level" required>
                    <option value=""> -- Pilih Level -- </option>
                    <option value="Admin" <?= $key->level == 'Admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="Mahasiswa" <?= $key->level == 'Mahasiswa' ? 'selected' : '' ?>>Mahasiswa</option>
                    <option value="Pendidikan Informatika" <?= $key->level == 'Pendidikan Informatika' ? 'selected' : '' ?>>Prodi Pendidikan Informatika</option>
                    <option value="Pendidikan Bahasa Inggris" <?= $key->level == 'Pendidikan Bahasa Inggris' ? 'selected' : '' ?>>Prodi Pendidikan Bahasa Inggris</option>
                    <option value="Pendidikan IPA" <?= $key->level == 'Pendidikan IPA' ? 'selected' : '' ?>>Prodi Pendidikan IPA</option>
                    <option value="Pendidikan elektronika" <?= $key->level == 'Pendidikan elektronika' ? 'selected' : '' ?>>Prodi Pendidikan elektronika</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputPassword1">Password</label>
                  <input type="hidden" name="password_old" value="<?= $key->password; ?>">
                  <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <select id="jurusan" class="form-control" name="jurusan" required>
                    <option value=""> -- Pilih Jurusan -- </option>
                    <option value="Pendidikan Informatika" <?= $key->jurusan == 'Pendidikan Informatika' ? 'selected' : '' ?>>Pendidikan Informatika</option>
                    <option value="Pendidikan Bahasa Inggris" <?= $key->jurusan == 'Pendidikan Bahasa Inggris' ? 'selected' : '' ?>>Pendidikan Bahasa Inggris</option>
                    <option value="Pendidikan IPA" <?= $key->jurusan == 'Pendidikan IPA' ? 'selected' : '' ?>>Pendidikan IPA</option>
                    <option value="Pendidikan elektronika" <?= $key->jurusan == 'Pendidikan elektronika' ? 'selected' : '' ?>>Pendidikan elektronika</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" class="form-control">
                  <?php
                  if ($key->foto != null) {
                    echo '<img src="' . base_url('assets/img/' . $key->foto) . '" class="w-25"></img>';
                  }
                  ?>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
              </form>
            </div>
          <?php endforeach; ?>

        </div>

      </div>
      <!-- End Panel Static Labels -->
    </div>
  </div>
</div>
</div>