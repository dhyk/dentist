<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>
          <?php 
          if($status=="tambah") echo "Tambah Kelompok Baru";
          else if($status=="edit") echo "Ubah Kelompok";
          else echo "Kelompok";
           ?>
          </h3>
        </div>
        <div class="col-12 col-sm-6">

        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid general-widget">
    <div class="row">

      <div class="col-sm-12">
        <div class="card">

          <form class="form theme-form"
          <?php if($status=="tambah"){ ?> action="<?= base_url() . 'simpan_kelompok' ?>" <?php } ?>
          <?php if($status=="ubah"){ ?> action="<?= base_url() . 'ubah_kelompok' ?>" <?php } ?>
          method="post">
          <?php if($status=="ubah"){ ?>
            <input type="hidden" name="id_kelompok" value="<?= $kelompok->id_kelompok ?>">
          <?php }?>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Nama Kelompok</label>
                    <input class="form-control" id="exampleFormControlInput1" type="text" 
                    name="nama_kelompok" required placeholder="Nama Kelompok"
                    <?php if($status!="tambah"){?> value="<?= $kelompok->kelompok ?>"<?php } ?>
                    <?php if($status=="detail"){?> readonly="" <?php } ?>
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlTextarea4">Deskripsi Kelompok</label>
                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="5" 
                    name="deskripsi"  <?php if($status=="detail"){?> readonly="" <?php } ?> ><?php if($status!="tambah"){ echo $kelompok->deskripsi; } ?></textarea>
                  </div>
                </div>
              </div>



            </div>
            <div class="card-footer text-end">
              <?php if ($status != 'detail') { ?>
                <button class="btn btn-primary" type="submit">Simpan</button>
              <?php } ?>
              <a href="<?= base_url() . 'kelompok' ?>">
                <button class="btn btn-light" type="button">Kembali</button>
              </a>
            </div>
          </form>
        </div>




      </div>


    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>