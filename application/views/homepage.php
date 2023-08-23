<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="<?= base_url()."assets/" ?>img/logo.svg" type="image/png">
      <title>Waja - Selamat Datang</title>
      <!-- Bootstrap css -->
      <link rel="stylesheet" href="<?= base_url()."assets/" ?>vender/bootstrap/css/bootstrap.min.css">
      <!-- Bootstrap icon -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      <!-- Sidebar css -->
      <link rel="stylesheet" href="<?= base_url()."assets/" ?>vender/sidebar/demo.css">
      <!-- Matrial Icons -->
   <link rel="stylesheet" href="<?= base_url()."assets/" ?>vender/materialdesign/css/materialdesignicons.min.css">
   <!-- Custom css -->
   <link rel="stylesheet" href="<?= base_url()."assets/" ?>css/style.css">
   </head>
   <body>
      <div class="welcome d-flex align-items-center justify-content-center vh-100">
         <div class="text-center pb-5 mb-5">
            <div class="mb-5">
               <img src="<?= base_url()."assets/" ?>img/logo.svg" alt="" class="img-fluid blue-logo mb-3">
               <h1 class="text-primary mb-1">Waja</h1>
               <p class="text-muted">Selamat datang di Klinik Waja!</p>
            </div>
         </div>
      </div>
      <!-- fixed-footer -->
      <div class="footer fixed-bottom d-grid gap-3 m-4">
         <a href="<?= base_url()."home/login" ?>" class="btn btn-info btn-lg">Masuk</a>
         <!-- <a href="sign-in.html" class="btn btn-outline-info btn-lg">Sign In</a> -->
      </div>
      <!-- sidebar nav -->
    
      <!-- Bootstrap bundle js -->
      <script src="<?= base_url()."assets/" ?>vender/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Jquery js -->
      <script src="<?= base_url()."assets/" ?>vender/jquery/jquery.min.js"></script>
      <!-- Sidebar js -->
      <script src="<?= base_url()."assets/" ?>vender/sidebar/hc-offcanvas-nav.js"></script>
      <!-- Custom js -->
      <script src="<?= base_url()."assets/" ?>js/script.js"></script>
   </body>
</html>