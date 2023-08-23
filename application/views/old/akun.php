<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Pasien</h3>
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
            <a href="<?= base_url() . 'akun_baru' ?>"><button class="btn btn-primary">Pasien Baru</button> </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                //  foreach ($akun as $key) {

                  ?>


                    <tr>
                      <td><?= 'nama pasien 1' ?></td>
                     

                      <td>
                        <!-- <a href="<?= base_url().'akun_detail?id='.$key->id_akun ?>"> -->
                          <button class="btn btn-xs btn-primary"><i class="icofont icofont-eye"></i> detail</button>
                        <!-- </a> -->
                        
                      </td>
                    </tr>

                    <tr>
                      <td><?= 'nama pasien 2' ?></td>
                     

                      <td>
                        <!-- <a href="<?= base_url().'akun_detail?id='.$key->id_akun ?>"> -->
                          <button class="btn btn-xs btn-primary"><i class="icofont icofont-eye"></i> detail</button>
                        <!-- </a> -->
                        
                      </td>
                    </tr>

                    <tr>
                      <td><?= 'nama pasien 3' ?></td>
                     

                      <td>
                        <!-- <a href="<?= base_url().'akun_detail?id='.$key->id_akun ?>"> -->
                          <button class="btn btn-xs btn-primary"><i class="icofont icofont-eye"></i> detail</button>
                        <!-- </a> -->
                        
                      </td>
                    </tr>

                  <?php // } ?>
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