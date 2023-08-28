<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="img/logo.svg" type="image/png">
   <title>Waja - Biodata Pasien</title>
   <!-- Bootstrap css -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/bootstrap/css/bootstrap.min.css">
   <!-- Bootstrap icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <!-- Sidebar css -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/sidebar/demo.css">
   <!-- Matrial Icons -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/materialdesign/css/materialdesignicons.min.css">
   <!-- Custom css -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>css/style.css">
</head>

<body class="bg-light">
   <div class="doctor-profile d-flex flex-column vh-100">
      <div class="d-flex align-items-center justify-content-between mb-auto p-3 bg-white shadow-sm osahan-header">
         <a href="<?= base_url() . 'Dokter' ?>" class="text-dark bg-white shadow rounded-circle icon">
            <span class="mdi mdi-arrow-left mdi-18px"></span></a>
         <h6 class="mb-0 ms-3 me-auto fw-bold">Biodata Pasien</h6>
         <div class="d-flex align-items-center gap-2">
            <a class="toggle d-flex align-items-center justify-content-center fs-5 bg-white shadow rounded-circle icon" href="#">
               <i class="bi bi-list"></i></a>
         </div>
      </div>
      <!-- body -->
      <div class="vh-100 my-auto overflow-auto">
         <!-- banner -->

         <div class="p-3 bg-white">
            <div class="mb-3">
               <p>
               <h6 class="mb-1"><?= $pasien->nama ?></h6><span class="small text-muted"><?= $pasien->id_pasien ?></span></p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
               <div class="d-flex align-items-center  col">
                  <span><img style="width:40%" src="<?= base_url() . "assets/img/barcode/" . $pasien->barcode ?>"></span>

               </div>

            </div>
         </div>
         <!-- tabs -->
         <div class="bg-white shadow-sm border-top">
            <ul class="nav doctor-profile-tabs gap-1 p-0" id="pills-tab" role="tablist">
               <li class="nav-item col" role="presentation">
                  <button class="nav-link w-100 active" id="pills-info-tab" data-bs-toggle="pill" data-bs-target="#pills-info" type="button" role="tab" aria-controls="pills-info" aria-selected="true">Data</button>
               </li>
               <li class="nav-item col" role="presentation">
                  <button class="nav-link w-100" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Treatment</button>
               </li>
               <!-- <li class="nav-item col" role="presentation">
                     <button class="nav-link w-100 active" id="pills-review-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review"
                        aria-selected="false">Review</button>
                  </li> -->
            </ul>
         </div>
         <div class="mb-3">
            <div class="tab-content" id="pills-tabContent">
               <!-- about -->
               <div class="tab-pane fade show active p-3" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab" tabindex="0">
                  <h6 class="pb-2 mb-0">Data Pasien</h6>
                  <table>
                     <tr>
                        <td>
                           <p class="small">Tanggal Lahir</p>
                        </td>
                        <td>
                           <p class="text-muted"><?= $pasien->lahir ?></p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="small">Jenis Kelamin </p>
                        </td>
                        <td>
                           <p class="text-muted"><?= $pasien->kelamin ?></p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="small"> Alamat </p>
                        </td>
                        <td>
                           <p class="text-muted"><?= $pasien->alamat ?></p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="small"> Pekerjaan </p>
                        </td>
                        <td>
                           <p class="text-muted"><?= $pasien->pekerjaan ?></p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="small">No. WA </p>
                        </td>
                        <td>
                           <p class="text-muted"><?= $pasien->wa ?></p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="small">Alergi </p>
                        </td>
                        <td>
                           <p class="text-muted"><?= $pasien->alergi ?></p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="small">Riwayat Kesehatan </p>
                        </td>
                        <td>
                           <p class="text-muted"><?= $pasien->riwayat ?></p>
                        </td>
                     </tr>
                  </table>
               </div>
               <!-- experience -->
               <div class="tab-pane fade p-3" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab" tabindex="0">

                  <?php
                  $i = 0;
                  foreach ($treatment as $key) {
                     $i++; ?>

                     <div class="bg-white rounded-4 p-3 mb-3 shadow-sm">
                        <!-- <h6 class="mb-3">Amercan Medical College & Hospital</h6> -->
                        <a data-bs-toggle="collapse" href="<?= "#collapseExample" . $i ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                           <p class="text-muted mb-2"><?= $key->tanggal ?></p>
                        </a>

                        <div class="collapse" id="<?= "collapseExample" . $i ?>">
                           <div class="card card-body">
                              <p class="text-muted mb-2">Keluhan<br>
                                 <span class="text-dark"><?= $key->keluhan ?></span>
                              </p>
                              <p class="text-muted mb-2">Prosedur<br>
                                 <span class="text-dark"><?= $key->prosedur ?></span> <br>
                                 <span class="text-dark"><?= $key->subprosedur ?></span>
                              </p>
                              <p class="text-muted mb-0">BHP<br>
                                 <span class="text-dark"><?= $key->bhp ?></span> <br>
                                 <span class="text-dark"><?= $key->subbhp ?></span>
                              </p>
                              <p class="text-muted mb-0">Rp <?= number_format($key->biaya, 0, ',', '.') ?></p>
                              <div class="footer d-grid mt-auto p-3">
                                 <div class="d-flex gap-2">
                                    <a href="<?= base_url() . 'dokter/ubahtreatment?a=' . $key->id_treatment ?>" class="btn btn-xs btn-outline-info bg-light btn-lg col"><i class="bi bi-pencil me-2"></i> Ubah Treatment</a>
                                    <!-- <a href="request-appointment.html" class="btn btn-xs btn-info btn-lg col">Ubah Treatment</a> -->
                                 </div>
                              </div>
                           </div>
                        </div>



                     </div>
                  <?php } ?>
               </div>

            </div>
         </div>
      </div>
      <!-- footer -->
      <div class="footer d-grid mt-auto p-3">
         <div class="d-flex gap-2">
            <!-- <a href="call-doctor.html" class="btn btn-outline-info bg-light btn-lg col"><i class="bi bi-camera-video-fill me-2"></i> Call</a> -->
            <a href="<?= base_url() . 'dokter/tambahtreatment?a=' . $pasien->id_pasien ?>" class="btn btn-info btn-lg col">Treatment Baru</a>
         </div>
      </div>
   </div>
   <!-- share offcanvas -->
   <!-- sidebar nav -->

   <nav id="main-nav">
      <ul class="second-nav">
         <li class="osahan-user-profile bg-primary">
            <div class="d-flex align-items-center gap-2">
               <img src="img/favorite/favorite-4.jpg" alt="" class="rounded-pill img-fluid">
               <div class="ps-1">
                  <h6 class="fw-bold text-white mb-0">Hey, <?= $nama ?></h6>

               </div>
            </div>
         </li>
         <li><a href="<?= base_url() . 'Home/logout' ?>"><span class="mdi mdi-logout me-3"></span>Keluar</a></li>
      </ul>

   </nav>
   <!-- Bootstrap bundle js -->
   <script src="<?= base_url() . "assets/" ?>vender/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Jquery js -->
   <script src="<?= base_url() . "assets/" ?>vender/jquery/jquery.min.js"></script>
   <!-- Sidebar js -->
   <script src="<?= base_url() . "assets/" ?>vender/sidebar/hc-offcanvas-nav.js"></script>
   <!-- Custom js -->
   <script src="<?= base_url() . "assets/" ?>js/script.js"></script>
</body>

</html>


<?php
if ($this->session->flashdata('status')) {
   if ($this->session->flashdata('status') == "gagal") {
?>
      <script>
         alert('data gagal disimpan.');
      </script>
   <?php
   } else {
   ?>
      <script>
         alert('data berhasil disimpan.');
      </script>
<?php

   }
}
?>