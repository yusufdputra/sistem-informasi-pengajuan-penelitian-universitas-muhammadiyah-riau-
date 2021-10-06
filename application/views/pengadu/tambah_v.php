<div class="page">
  <div class="page-header">
    <!-- <h1 class="page-title">Tambah Aduan</h1> -->
  <!--   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
      <li class="breadcrumb-item active">General</li>
    </ol> -->
    <div class="page-header-actions">
      <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
      data-toggle="tooltip" data-original-title="Edit">
      <i class="icon wb-pencil" aria-hidden="true"></i>
    </button>
    <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
    data-toggle="tooltip" data-original-title="Refresh">
    <i class="icon wb-refresh" aria-hidden="true"></i>
  </button>
  <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
  data-toggle="tooltip" data-original-title="Setting">
  <i class="icon wb-settings" aria-hidden="true"></i>
</button>
</div>
</div>

   <div class="page-content container-fluid">
        <div class="row">
          <div class="col-md-6" style="margin-left: 22rem">
            <!-- Panel Static Labels -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Ajukan Aduan</h3>
              </div>
              <div class="panel-body container-fluid">
                <form method="post" action="<?php echo base_url().'pengadu/add_aduan'?>" enctype="multipart/form-data">
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="select" >Jenis Aduan</label>
                    <select class="form-control" id="select" name="jenis_aduan" required>
                      <option value="">- Jenis Aduan -</option>
                      <!-- <option value="Kebersihan">Kebersihan</option> -->
                      <option value="Kerusakan">Kerusakan</option>
                      <option value="Keamanan">Keamanan</option>
                      <option value="Error System">Error System</option>
                      <option value="Lupa Password Akademik">Lupa Password Akademik</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="lokasi">
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea">Keterangan</label>
                    <textarea class="form-control" id="textarea" name="keterangan" rows="3" required></textarea>
                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputFile">Lampiran pendukung</label>
                    <input type="text" class="form-control" placeholder="Browse.." readonly="" />
                    <input type="file" id="inputFile" name="filefoto" multiple="" />
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">Ajukan</button>
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