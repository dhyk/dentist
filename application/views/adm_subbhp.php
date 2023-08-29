<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="<?= base_url() . "assets/" ?>img/logo.svg" type="image/png">
   <title>Waja - Admin</title>
   <!-- Bootstrap css -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/bootstrap/css/bootstrap.min.css">
   <!-- Bootstrap icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <!-- Slick slider css -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/slick/slick/slick.css" />
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/slick/slick/slick-theme.css" />
   <!-- Sidebar css -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/sidebar/demo.css">
   <!-- Matrial Icons -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>vender/materialdesign/css/materialdesignicons.min.css">
   <!-- Custom css -->
   <link rel="stylesheet" href="<?= base_url() . "assets/" ?>css/style.css">
</head>

<body class="bg-light">
   <!-- navbar -->
   <div class="select-area d-flex flex-column vh-100">
      <div class="bg-white shadow-sm">
         <div class="d-flex align-items-center justify-content-between mb-auto p-3 osahan-header">
            <div class="d-flex align-items-center gap-2 me-auto">
               <a href="<?= base_url().'Admin/bhp'?>" class="text-dark bg-white shadow rounded-circle icon">
                  <span class="mdi mdi-arrow-left mdi-18px"></span>

               </a>
               <h6 class="mb-0 ms-3 me-auto fw-bold">Data Sub BHP</h6>
            </div>
            <div class="d-flex align-items-center gap-3">
               <a class="toggle d-flex align-items-center justify-content-center fs-5 bg-white shadow rounded-circle icon" href="#">
                  <i class="bi bi-list"></i></a>
            </div>
         </div>
         <div class="px-3 pb-3">
            <a href="<?= base_url() . 'Admin/tambahsubbhp?a='.$id_bhp ?>">
               <button class="btn btn-info form-control bg-transparent border-0 px-3 fs-14">Tambah Sub BHP</button>
            </a>

         </div>
      </div>
      <!-- body -->
      <div class="vh-100 my-auto overflow-auto body-fix-osahan-footer">
         <div class="py-3">
            <!-- Specialist -->
            <div>
               <h6 class="mb-2 pb-1 px-3 fw-bold text-black">Sub BHP</h6>

               <?php
               foreach ($subbhp as $key) {
               ?>
                  <!-- 1st -->
                  <!-- <a href="<?= base_url() . "admin/bhpdetail?a=" . $key->id_subbhp."&b=".$key->id_bhp ?>" class="link-dark"> -->
                     <div class="d-flex align-items-center gap-3 bg-white border-bottom shadow-sm p-3">
                        <div class="small">
                           <h3 class="mb-1 fs-14"><?= $key->subbhp ?></h3>
                           <h6 class="mb-1 fs-14"><?= $key->harga ?></h6>
                        </div>
                     </div>
                  <!-- </a> -->
                  <!-- 2nd -->

               <?php
               }
               ?>



            </div>
         </div>
         <!-- Available doctors -->

      </div>
      <!-- footer -->

   </div>
   <!-- sidebar nav -->
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
         <li><a href="<?= base_url() . 'Admin' ?>"><span class="mdi mdi-account-injury me-3"></span>Pasien</a></li>
         <li><a href="<?= base_url() . 'Admin/prosedur' ?>"><span class="mdi mdi-debug-step-over me-3"></span>Prosedur</a></li>
         <li><a href="<?= base_url() . 'Admin/bhp' ?>"><span class="mdi mdi-briefcase-outline me-3"></span>BHP</a></li>
         <li><a href="<?= base_url() . 'Admin/akun' ?>"><span class="mdi mdi-account-box-outline me-3"></span>Akun</a></li>

         <li><a href="<?= base_url() . 'Home/logout' ?>"><span class="mdi mdi-logout me-3"></span>Keluar</a></li>
      </ul>

   </nav>
   <!-- Bootstrap bundle js -->
   <script src="<?= base_url() . "assets/" ?>vender/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Jquery js -->
   <script src="<?= base_url() . "assets/" ?>vender/jquery/jquery.min.js"></script>
   <!-- Slick slider js -->
   <script src="<?= base_url() . "assets/" ?>vender/slick/slick/slick.min.js"></script>
   <!-- Sidebar js -->
   <script src="<?= base_url() . "assets/" ?>vender/sidebar/hc-offcanvas-nav.js"></script>
   <!-- Custom js -->
   <script src="<?= base_url() . "assets/" ?>js/script.js"></script>
</body>

</html>


<?php
if( $this->session->flashdata('status')){
   if( $this->session->flashdata('status')=="gagal"){
      ?>
      <script>alert('data gagal disimpan.');</script>
      <?php
   }else{
      ?>
      <script>alert('data berhasil disimpan.');</script>
      <?php

   }

}
?>