<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="img/logo.svg" type="image/png">
   <title>Waja - Tambah Data BHP</title>
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
   <div class="change-profile d-flex flex-column vh-100">
      <!-- navbar -->
      <div class="d-flex align-items-center justify-content-between mb-auto p-3 bg-white shadow-sm osahan-header">
         <a href="<?= base_url() . 'Admin/bhp' ?>" class="text-dark bg-white shadow rounded-circle icon">
            <span class="mdi mdi-arrow-left mdi-18px"></span></a>
         <h6 class="mb-0 ms-3 me-auto fw-bold">BHP Baru</h6>
         <div class="d-flex align-items-center gap-3">
            <a class="toggle d-flex align-items-center justify-content-center fs-5 bg-white shadow rounded-circle icon" href="#">
               <i class="bi bi-list"></i></a>
         </div>
      </div>
      <!-- body -->
      <div class="vh-100 my-auto overflow-auto p-3">
         <form method="post" action="<?= base_url() . 'Admin/simpanbhp' ?>">
            <div class="mb-3">
               <label for="exampleFormControlName" class="form-label mb-1">BHP</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-debug-step-over mdi-18px"></span>
                  </span>
                  <input required name="bhp" type="text" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="Tuliskan BHP" aria-label="Type your first name" aria-describedby="firstname">
               </div>
            </div>




      </div>
      <!-- footer -->
      <div class="footer mt-auto p-3">
         <button type="submit" class="btn btn-info btn-lg w-100 rounded-4">Simpan</button>
      </div>
      </form>
   </div>
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
   <!-- Sidebar js -->
   <script src="<?= base_url() . "assets/" ?>vender/sidebar/hc-offcanvas-nav.js"></script>
   <!-- Custom js -->
   <script src="<?= base_url() . "assets/" ?>js/script.js"></script>
</body>

</html>