<div class="page">
  <?php if ($error = $this->session->flashdata('alert')) : ?>
    <div class="alert dark alert-success alert-dismissible" role="alert" style="margin-left: 2rem;margin-right: 2rem; border-radius: 5pt;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <strong> <?php echo $error; ?></strong>
    </div>
  <?php endif ?>
  <div class="page-content container-fluid">

    <div class="panel">

      <div class="panel-body table-responsive">
        <!-- <div class="col-md-12">
                    <center><img style="height: 500px" src="https://seminar-fst.uin-suska.ac.id/akademik/gambar/FlowchartPendaftaranSeminar.jpeg"></center>
                    <center><img style="height: 400px" src="https://seminar-fst.uin-suska.ac.id/akademik/gambar/sidang.jpg"></center>
                </div> -->
        <div class="col-md-12">
          <div class="text-justify">
            <h2>Deskripsi prosedur Pengajuan:</h2>
            <table border="0">
              <tbody>
                <tr>

                  <td width="30">
                    <h4 style="font-size: 30px">1</h4>
                  </td>
                  <td>
                    <h5>Mahasiswa mengajukan permohonan judul skripsi dengan mengisi form pengajuan terlebih dahulu di website ini dengan mengklik tombol <b>ajukan judul skripsi</b> dibawah ini</h5>
                  </td>
                </tr>
                <tr>

                  <td width="30">
                    <h4 style="font-size: 30px">2</h4>
                  </td>
                  <td>
                    <h5>Setelah mengajukan pendaftaran online, catat ID Pengajuan anda. Silahkah tunggu, admin akan verifikasi Pengajuan anda.</h5>
                  </td>
                </tr>


                <tr>
                  <td>
                    <h4 style="font-size: 30px">3</h4>
                  </td>
                  <td>
                    <h5>Silahkan gunakan menu Tracking untuk mengetahui status/posisi Pengajuan anda.</h5>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="col-md-6 pull-left">
            <button type="submit" class="btn btn-info pengajuan_pendaftaran" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-send"></span> Ajukan judul skripsi.</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <form method="post" action="<?php echo base_url() . 'pengajuan/add_pengajuan' ?>" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-body">

          <!-- <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nama">Nama <b style="color: red">*</b></label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="nim">NIM <b style="color: red">*</b></label>
                    <input type="number" class="form-control" id="nim" name="nim" placeholder="nim" required>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select" >Jurusan <b style="color: red">*</b></label>
                    <select class="form-control" id="select" name="jurusan" required>
                      <option value="">- Jurusan -</option>
                      <option value="Agroteknologi">Agroteknologi</option>
                      <option value="Agribisnis">Agribisnis</option>
                    </select>
                  </div>
                   <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="email">email <b style="color: red">*</b></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                  </div> -->
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="textarea1">judul satu <b style="color: red">*</b></label>
            <textarea class="form-control" id="textarea1" name="judul1" rows="3" required></textarea>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="textarea2">judul dua</label>
            <textarea class="form-control" id="textarea2" name="judul2" rows="3"></textarea>
          </div>
          <div class="form-group form-material" data-plugin="formMaterial">
            <label class="form-control-label" for="textarea3">judul tiga</label>
            <textarea class="form-control" id="textarea3" name="judul3" rows="3"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ajukan</button>
        </div>
    </form>
  </div>
</div>
</div>