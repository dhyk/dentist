<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Nomor WA</h3>
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
            <a href="<?= base_url() . 'nomorwa_baru' ?>">
            <button class="btn btn-primary">Tambah Nomor WA Baru</button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Nomor WA</th>
                    <th>Kelompok</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($nomor as $key) { ?>
                    <tr>
                      <td><?= $key->nama ?></td>
                      <td><?= $key->nomor ?></td>
                      <td><?= $key->kelompok ?></td>
                      <td>
                        <a href="<?= base_url() . 'nomorwa_detail?id=' . $key->id ?>">
                          <button class="btn btn-xs btn-primary"><i class="icofont icofont-eye"></i> detail</button>
                        </a>
                        <a href="<?= base_url() . 'nomorwa_ubah?id=' . $key->id ?>">
                          <button class="btn btn-xs btn-warning"><i class="icofont icofont-pencil"></i> ubah</button>
                        </a>
                        <a href="<?= base_url() . 'nomorwa_hapus?id=' . $key->id.'&idn='.$key->id_nomorwa ?>" class="tombol-hapus">
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