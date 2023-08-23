<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Buat Pengumuman Baru</h3>
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

          <!-- <form class="form theme-form"  enctype="multipart/form-data" method="post" action="<?= base_url() . "simpan_pengumuman" ?>"> -->
          <?php echo form_open_multipart(base_url() . 'simpan_pengumuman'); ?>

          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlInput1">Judul Pengumuman</label>
                  <input class="form-control" id="exampleFormControlInput1" type="text" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label" for="exampleFormControlTextarea4">Isi Pengumuman</label>
                  <textarea class="form-control" id="exampleFormControlTextarea4" rows="5" name="isi_pengumuman" required></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputPassword2">Dokumen / Media</label>
                  <input name="media" class="form-control" id="exampleInputPassword2" type="file">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label class="form-label" for="exampleInputPassword2">Nomor WA</label>
                  <p>pilih berdasarkan kelompok:</p>
                  <select class="js-example-basic-multiple col-sm-12" multiple="multiple" required name="kelompok[]"  <?php if ($status == "detail") echo 'disabled="true"'; ?>>

                    <?php foreach ($kelompok as $key) { ?>

                      <option value="<?= $key->id_kelompok ?>"><?= $key->kelompok ?></option>
                    <?php } ?>
                  </select>

                  <p><br />pilih berdasarkan nomor WA:</p>
                  <select class="js-example-basic-multiple col-sm-12" multiple="multiple" name="nomor[]"  <?php if ($status == "detail") echo 'disabled="true"'; ?>>
                    <?php foreach ($nomor as $key) { ?>

                      <option value="<?= $key->id_nomorwa ?>"><?= $key->nama ?></option>
                    <?php } ?>

                  </select>
                </div>
              </div>
            </div>

          </div>
          <div class="card-footer text-end">
            <button class="btn btn-success" type="submit" name="aksi" value="kirim">Kirim</button>
            <button class="btn btn-primary" type="submit" name="aksi" value="simpan">Simpan</button>
            <a href="<?= base_url() . 'pengumuman' ?>">
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