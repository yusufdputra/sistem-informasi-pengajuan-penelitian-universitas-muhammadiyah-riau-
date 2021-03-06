 <div class="page">
   <div class="page-content container-fluid">
     <div class="row" data-plugin="matchHeight" data-by-row="true">

       <div class="panel" style="width: 100%">
         <header class="panel-heading">
           <h3 class="panel-title">Arsip Pengajuan Per <?php
           if (isset($filter) && $filter == 'tahun') {
             # code...
             echo 'Tahun '. $tanggal ;
            }else{

              echo format_indo(date('Y m', strtotime($tanggal))) ;
            }
           ?></h3>

           <div class="panel-title">
             <a class="btn btn-info" data-toggle="modal" data-target="#filterModal" style="color: white"><i class="icon fa-filter" aria-hidden="true"></i>Saring Data</a>
           </div>

         </header>


         <div class="panel-body">
           <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
             <thead>
               <tr>
                 <th>Nama</th>
                 <th>NIM</th>
                 <th>Jurusan</th>
                 <th>Tgl Pengajuan</th>
                 <th>Status</th>
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
                   <td><?= $key->status_pengajuan ?></td>
                   <td> <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalrincian<?= $key->id_pengajuan ?>" style="color: white"><i class="icon fa-eye" aria-hidden="true"></i>Lihat</a></td>
                 <?php endforeach ?>
                 </tr>
             </tbody>
           </table>
         </div>
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
           <a target="_BLANK" class="btn" href="<?= base_url('pengajuan/cetak/' . $row->id_pengajuan) ?>">Cetak</a>

         </div>

       </div>
     </div>
   </div>
 <?php endforeach; ?>

 <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
         <h3 class="modal-title" id="myModalLabel">Saring Data Berdasarkan</h3>
       </div>
       <div class="modal-body">
         <form action="<?= base_url() . 'admin/arsip' ?>" enctype="multipart/form-data" method="post">
           <div class="form-group form-material" data-plugin="formMaterial">
             <label class="form-control-label">Bulan</label>
             <input type="hidden" name="type" value="bulan" id="">
             <input type="input" autocomplete="off" required id="monthpicker" placeholder="Saring Berdasarkan Bulan" class="form-control " name="date">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success" >Terapkan</button>
            </div>
          </form>
          <form action="<?= base_url() . 'admin/arsip' ?>" enctype="multipart/form-data" method="post">
            <div class="form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label">Tahun</label>
              <input type="hidden" name="type" value="tahun" id="">
             <select required class="form-control" placeholder="Saring Berdasarkan Bulan" id="dropdownYear" name="date">
             </select>
           </div>
           <div class="modal-footer">
             <button type="submit" class="btn btn-success" >Terapkan</button>
           </div>
         </form>




       </div>
     </div>
   </div>
 </div>