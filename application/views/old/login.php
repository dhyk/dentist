<!DOCTYPE html>
<html lang="en">


<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
<?php endif; 
$this->session->sess_destroy();
?>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Pengumuman Sekolah">
    <meta name="keywords" content="Sistem, Informasi, Pengumuman, Sekolah">
    <meta name="author" content="jti polinema">
    <link rel="icon" href="<?= base_url() ?>/assets/images/logo/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo/favicon-icon.png" type="image/x-icon">
    <title>Sistem Informasi Dokter Gigi</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/feather-icon.css">
      
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/sweetalert2.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url() ?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/responsive.css">
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-ball"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5">
                    <!-- <img class="bg-img-cover bg-center" src="<?= base_url() ?>/assets/images/login/4.png" alt="looginpage"> -->
                </div>
                <div class="col-xl-7 p-0">
                    <div class="login-card">
                        <form class="theme-form login-form" method="post" action="<?= base_url().'login'?>">
                            <h4>Selamat Datang!</h4>
                            <h6>Sistem Informasi Dokter Gigi</h6>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <i class="icon-user"></i>
                                  </span>
                                    <input class="form-control" type="email"  id="email"
                                        placeholder="example@gmail.com" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                      <i class="icon-lock"></i>
                                    </span>
                                    <input class="form-control" type="password" id="password" name="password"
                                         placeholder="*********" required>
                                    <span class="input-group-text" id="iconclick" onclick="iconclick()">
                                        <i id="iconeye" class="icofont icofont-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Ingat akun</label>
                                </div><a class="link" href="forget-password.html">Lupa password?</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit" >Masuk</button>
                            </div>
                            <!-- <div class="login-social-title">                
                  <h5>Sign in with</h5>
                </div>
                <div class="form-group">
                  <ul class="login-social">
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                    <li><a href="https://twitter.com" target="_blank"><i data-feather="twitter"></i></a></li>
                    <li><a href="https://www.facebook.com" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram">                  </i></a></li>
                  </ul>
                </div>
                <p>Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="<?= base_url() ?>/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url() ?>/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="<?= base_url() ?>/assets/js/config.js"></script>
<!--     
    <script src="<?= base_url() ?>/assets/js/sweet-alert/sweetalert.min.js"></script> -->
    <!-- <script src="<?= base_url() ?>/assets/js/sweet-alert/app.js"></script> -->
      <!-- Sweet alert -->
<script src="<?= base_url(); ?>assets/js/notif/sweetalert2.all.min.js"></script>

<!-- My Java Script -->
<script src="<?= base_url(); ?>assets/js/notif/script.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url() ?>/assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>

<script>

var icon = 0;
function iconclick() {
    if (icon == 0) {
        icon = 1;
        document.getElementById("iconeye").classList.add('icofont-eye-blocked');
        document.getElementById("iconeye").classList.remove('icofont-eye');
        document.getElementById("password").setAttribute('type', 'text');
    } else {
        icon = 0;
        document.getElementById("iconeye").classList.add('icofont-eye');
        document.getElementById("iconeye").classList.remove('icofont-eye-blocked');
        document.getElementById("password").setAttribute('type', 'password');
    }

}


</script>
<script>
//  function masuk(){

//     var email = document.getElementById("email").value;
//     var password = document.getElementById("password").value;

//     alert(email+" "+password);

//     if(email==""){
//         $("email").css('border-color' , '#FF0000');
//         alert("email kosong");
//     }

//     if(password==""){
//         password.css("border-color","red");
//         alert("password kosong");
//     }

//     var email = document.getElementById("email").value=""
//     var password = document.getElementById("password").value="";



//  }

</script>