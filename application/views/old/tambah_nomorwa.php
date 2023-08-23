<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>
            <?php
            if ($status == "tambah") echo "Tambah Nomor WA";
            else if ($status == "ubah") echo "Ubah Nomor WA";
            else echo "Nomor WA";
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

          <form class="form theme-form" method="post" action="<?php if ($status == "tambah") echo base_url() . 'nomorwa_simpan';
                                                      else echo base_url() . 'nomorwa_edit'; ?>">
            <?php if ($status == "ubah") { ?>
              <input name="id" type="hidden" value="<?= $nomor->id ?>">
              <input name="id_nomorwa" type="hidden" value="<?= $nomor->id_nomorwa ?>">
            <?php } ?>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Nama</label>
                    <input class="form-control" id="exampleFormControlInput1" type="text" name="nama" placeholder="Nama" required <?php if ($status != "tambah") echo 'value="' . $nomor->nama . '"';
                                                                                                                                  if ($status == "detail") echo 'readonly=""'; ?>>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlTextarea4">Nomor WA</label>
                    <input class="form-control" id="exampleFormControlInput1" type="text" name="nomor_wa" placeholder="+620000000" required <?php if ($status != "tambah") echo 'value="' . $nomor->nomor . '"';
                                                                                                                                            if ($status == "detail") echo 'readonly=""'; ?>>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword2">Kelompok</label>
                    <select class="js-example-basic-single col-sm-12" name="kelompok"  <?php if ($status == "detail") echo 'disabled="true"'; ?>>
                    <?php if ($status != "tambah") echo '<option value="' . $nomor->id_kelompok . '">' . $nomor->kelompok . '</option>'; ?>
                     
                    <?php foreach ($kelompok as $key) { ?>
                        
                       <option value="<?= $key->id_kelompok ?>"><?= $key->kelompok ?></option>
                      <?php } ?>

                    </select>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer text-end">

              <?php if ($status != "detail") { ?>
                <button class="btn btn-primary" type="submit">Simpan</button>
              <?php } ?>
              <a href="<?= base_url() . 'nomorwa' ?>">
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