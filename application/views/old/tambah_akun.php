<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>
            <?php
            if ($status == "tambah") echo "Buat Akun Baru";
            else if ($status == "ubah") echo "Ubah Akun";
            else echo "Akun";
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

          <form class="form theme-form" action="<?php if ($status == "tambah") echo base_url() . 'akun_simpan';
                                                else echo base_url() . 'akun_edit'; ?>" method="post">
            <?php if ($status == "ubah") { ?>
              <input name="id_akun" type="hidden" value="<?= $akun->id_akun ?>"> 
               <?php } ?>
                <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Nama</label>
                    <input class="form-control" id="nama" type="text" name="nama" placeholder="Nama" required <?php if ($status != "tambah") echo 'value="' . $akun->nama_akun . '"';
                                                                                                              if ($status == "detail") echo 'readonly=""'; ?>>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlTextarea4">Email</label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="example@ex.com" required 
                    <?php if ($status != "tambah") echo 'value="' . $akun->email . '" readonly=""'; ?>>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword2">Level</label>
                    <select class="js-example-basic-single col-sm-12" name="level" <?php if ($status == "detail") echo 'disabled="true"'; ?>>
                      <?php if ($status != "tambah") echo '<option value="' . $akun->level . '">' . $akun->level . '</option>'; ?>
                      <option value="USER">USER</option>
                      <option value="ADMIN">ADMIN</option>



                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword2">Hak Akses Kelompok</label>
                    <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="kelompok[]" required <?php if ($status == "detail") echo 'disabled="true"'; ?>>
                      <?php foreach ($kelompok as $key) { ?>
                        <option <?php
                                if ($status != "tambah") {
                                  foreach ($akses as $item) {
                                    if ($key->kelompok == $item->kelompok) echo 'selected';
                                  }
                                } ?> value="<?= $key->id_kelompok ?>"><?= $key->kelompok ?></option>
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
          <a href="<?= base_url() . 'akun' ?>">
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