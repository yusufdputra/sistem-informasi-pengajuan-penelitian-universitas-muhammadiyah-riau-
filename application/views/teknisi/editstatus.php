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
          <h3 class="panel-title">Ubah Status Aduan</h3>
        </div>
            
        <div class="panel-body container-fluid">
          <form method="post" action="<?php echo base_url().'teknisi/ubah_status'?>" enctype="multipart/form-data">
            <?php
            foreach($data->result_array() as $i):
              $id_aduan=$i['id_aduan'];
              ?>
            <input type="hidden" name="id_aduan" value="<?=$id_aduan?>">
                <?php endforeach;?>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="select" >Ubah Status</label>
                <select class="form-control" id="select" name="status" required>
                  <option value="">- Status -</option>
                  <option value="Belum Dikerjakan">Belum Dikerjakan</option>
                  <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                  <option value="Selesai">Selesai</option>
                </select>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="textarea">Balasan</label>
                <textarea class="form-control" id="textarea" name="balasan" rows="3" required></textarea>
              </div>
              <div class="form-group form-material" data-plugin="formMaterial">
                <label class="form-control-label" for="inputFile">Lampiran pendukung</label>
                <input type="text" class="form-control" placeholder="Browse.." readonly="" />
                <input type="file" id="inputFile" name="filefoto" multiple="" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Ubah Status</button>
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