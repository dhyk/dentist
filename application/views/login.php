<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="<?= base_url()."assets/" ?>img/logo_waja.png" type="image/png">
   <title>Waja - Masuk</title>
   <!-- Bootstrap css -->
   <link rel="stylesheet" href="<?= base_url()."assets/" ?>vender/bootstrap/css/bootstrap.min.css">
   <!-- Bootstrap icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <!-- Sidebar css -->
   <link rel="stylesheet" href="<?= base_url()."assets/" ?>vender/sidebar/demo.css">
   <!-- Material Icons -->
   <link rel="stylesheet" href="<?= base_url()."assets/" ?>vender/materialdesign/css/materialdesignicons.min.css">
   <!-- Custom css -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
   <div class="sign-in p-4">
      <div class="d-flex align-items-start justify-content-between mb-4">
         <div>
            
            <!-- <span class="mdi mdi-account-circle-outline display-1 text-primary"></span> -->
            <img style="width:100px"src="<?= base_url()."assets/" ?>img/logo_waja.png" alt="" class="img-fluid blue-logo mb-3">
              
            <h2 class="my-3 fw-bold">Silahkan Masuk!</h2>
            <p class="text-muted mb-0">Selamat datang di klinik Waja !</p>
            
         </div>
         <!-- <a class="toggle bg-white shadow rounded-circle icon d-flex align-items-center justify-content-center fs-5" href="#"><i class="bi bi-list fs-3 d-flex"></i></a> -->
      </div>
      <form method="post" action="<?= base_url().'Home/ceklogin'?>">
         <div class="mb-3">
            <label for="exampleFormControlEmail" class="form-label mb-1">Email</label>
            <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlEmail">
               <span class="input-group-text bg-transparent rounded-0 border-0" id="mail">
                  <span class="mdi mdi-email-outline mdi-18px text-muted"></span>
               </span>
               <input type="email" class="form-control bg-transparent rounded-0 border-0 px-0"
                  placeholder="Tuliskan email anda" aria-label="Type your email or phone" aria-describedby="mail"
                  name="email">
            </div>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlPassword" class="form-label mb-1">Password</label>
            <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlPassword">
               <span class="input-group-text bg-transparent rounded-0 border-0" id="password">
                  <span class="mdi mdi-lock-outline mdi-18px text-muted"></span></span>
               <input type="password" class="form-control bg-transparent rounded-0 border-0 px-0"
                  placeholder="Tuliskan password anda" aria-label="Type your password" aria-describedby="password"
                  name="password">
            </div>
         </div>
         <!-- <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Remember Me</label>
          </div> -->
         <div>
            <button type="submit" class="btn btn-info btn-lg w-100 rounded-4 mb-2">Masuk</button>
            <!-- <div class="d-flex justify-content-between mt-2">
               <a href="forget-password.html" class="d-flex justify-content-end small text-primary">Forget Password?</a>
               <p class="text-muted text-end small">Don't have an account? <a class="text-primary"
                     href="sign-up.html">Sign up</a></p>
            </div> -->
         </div>
      </form>
   </div>
   <!-- fixed-bottom -->
   <!-- <div class="footer fixed-bottom m-4">
      <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
         <hr class="col">
         <span>Or Continue With</span>
         <hr class="col">
      </div>
      <div class="d-flex gap-3">
         <a href="sign-in-email.html"
            class="btn btn-white btn-lg bg-white col d-flex align-items-center justify-content-center shadow-sm border">
            <i class="bi bi-google h4 mb-0 me-3"></i>Google</a>
         <a href="sign-in-email.html"
            class="btn btn-white btn-lg bg-white col d-flex align-items-center justify-content-center shadow-sm border">
            <i class="bi bi-apple h4 mb-0 me-3"></i>Apple</a>
      </div>
   </div> -->
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

<?php
if( $this->session->flashdata('status')){
   if( $this->session->flashdata('status')=="gagal"){
      ?>
      <script>alert('akun atau password salah.');</script>
      <?php
   }

}
?>