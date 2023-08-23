<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Pengumuman</h3>
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
            <a href="<?= base_url() . 'pengumuman_baru' ?>">
              <button class="btn btn-primary">Buat Pengumuman Baru</button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>Hari, Tanggal</th>
                    <th>Judul Pengumuman</th>
                    <th>Akun</th>
                    <th>Status</th>
                    <th>Aksi</th>

                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($pengumuman as $key) { ?>
                    <tr>
                      <td><?= $key->hari . ', ' . $key->tanggal ?></td>
                      <td><?= $key->judul ?></td>
                      <td><?= $key->nama_akun ?></td>
                      <td><?= $key->status ?></td>
                      <td>
                        <button class="btn btn-xs btn-primary"><i class="icofont icofont-eye"></i> detail</button>
                        <?php if ($key->status == "AKTIF") { ?>
                          <button class="btn btn-xs btn-warning"><i class="icofont icofont-pencil"></i> ubah</button>
                          <button class="btn btn-xs btn-success"><i class="icofont icofont-pencil"></i> kirim</button>
                        <?php } ?>
                        <?php if ($key->status != "TERKIRIM") { ?>
                          <button class="btn btn-xs btn-danger"><i class="icofont icofont-trash"></i> hapus</button>
                        <?php } ?>
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