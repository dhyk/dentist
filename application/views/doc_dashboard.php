<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="<?= base_url() . "assets/" ?>img/logo.svg" type="image/png">
   <title>Waja - Dokter</title>
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
               <!-- <a href="home.html" class="text-dark bg-white shadow rounded-circle icon">
                  <span class="mdi mdi-arrow-left mdi-18px"></span>

               </a> -->
               <h6 class="mb-0 ms-3 me-auto fw-bold">Data Pasien</h6>
            </div>
            <div class="d-flex align-items-center gap-3">
               <a class="toggle d-flex align-items-center justify-content-center fs-5 bg-white shadow rounded-circle icon" href="#">
                  <i class="bi bi-list"></i></a>
            </div>
         </div>
         <!-- <div class="px-3 pb-3">
            <form>
               <div class="input-group rounded-4 shadow overflow-hidden border-0 py-1 ps-3 bg-light">
                  <span class="input-group-text bg-transparent text-muted border-0 p-0" id="search"><span class="mdi mdi-magnify mdi-24px text-primary"></span></span>
                  <input type="text" class="form-control bg-transparent text-muted border-0 px-3 fs-14" placeholder="Search" aria-label="Search" aria-describedby="search">
               </div>
            </form>
         </div> -->
      </div>
      <!-- body -->
      <div class="vh-100 my-auto overflow-auto body-fix-osahan-footer">
         <div class="py-3">
            <!-- Specialist -->
            <div>
               <h6 class="mb-2 pb-1 px-3 fw-bold text-black">Pasien</h6>
              
              <?php 
              foreach($pasien as $key){
              ?>
               <!-- 1st -->
               <a href="<?= base_url() . "dokter/pasien?a=".$key->id_pasien ?>" class="link-dark">
                  <div class="d-flex align-items-center gap-3 bg-white border-bottom shadow-sm p-3">
                     <img src="<?= base_url() . "assets/img/barcode/".$key->barcode ?>" alt="" class="img-fluid rounded-4 favorite-img">
                     <div class="small">
                        <h6 class="mb-1 fs-14"><?= $key->nama?></h6>
                        <small class="text-muted"><?= $key->id_pasien?></small>
                     </div>
                  </div>
               </a>
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