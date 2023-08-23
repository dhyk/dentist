<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Kelompok</h3>
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
          <div class="card-header pb-0 text-end">
            <a href="<?= base_url() . 'kelompok_baru' ?>">
              <button class="btn btn-primary">Buat Kelompok Baru</button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>Kelompok</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($kelompok as $key) {
                  ?>
                    <tr>
                      <td><?= $key->kelompok ?></td>
                      <td><?= $key->deskripsi ?></td>
                      <td>
                        <a href="<?= base_url() . 'kelompok_detail?id='.$key->id_kelompok ?>">
                          <button class="btn btn-xs btn-primary"><i class="icofont icofont-eye"></i> detail</button>
                        </a>
                        <a href="<?= base_url() . 'kelompok_ubah?id='.$key->id_kelompok ?>">
                        <button class="btn btn-xs btn-warning"><i class="icofont icofont-pencil"></i> ubah</button>
                        </a>
                        <a class="tombol-hapus" href="<?= base_url() . 'kelompok_hapus?id='.$key->id_kelompok ?>">
                        <button class="btn btn-xs btn-danger"><i class="icofont icofont-trash"></i> hapus</button>
                        </a>
                      </td>

                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>