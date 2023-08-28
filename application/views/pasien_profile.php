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
         <!-- <a href="<?= base_url() . 'Assistant' ?>" class="text-dark bg-white shadow rounded-circle icon">
                <span class="mdi mdi-arrow-left mdi-18px"></span></a> -->
         <h6 class="mb-0 ms-3 me-auto fw-bold">Biodata Pasien</h6>
         <div class="d-flex align-items-center gap-2">
            <!-- <a class="toggle d-flex align-items-center justify-content-center fs-5 bg-white shadow rounded-circle icon" href="#">
               <i class="bi bi-list"></i></a> -->
         </div>
      </div>
      <!-- body -->
      <div class="vh-100 my-auto overflow-auto">
         <!-- banner -->

         <div class="p-3 bg-white">
            <div class="mb-3">
               <p>
               <h2 class="mb-1 text-center"><?= $pasien->nama ?></h2>
               <h6 class="text-center"><?= 'NO RM.'. $pasien->id_pasien ?></h6>
               <h3 class="text-center"><img style="width:40%" src="<?= base_url() . "assets/img/barcode/" . $pasien->barcode ?>"></h3>
            </p>
            </div>
            <!-- <div class="d-flex align-items-center justify-content-between">
               <div class="d-flex align-items-center col">
                  <img style="width:40%" src="<?= base_url() . "assets/img/barcode/" . $pasien->barcode ?>">
               </div>

            </div> -->
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
                           </div>
                        </div>
                     </div>
                  <?php } ?>
               </div>

            </div>
         </div>
      </div>
      <!-- footer -->
      <!-- <div class="footer d-grid mt-auto p-3">
         <div class="d-flex gap-2"> -->
      <!-- <a href="call-doctor.html" class="btn btn-outline-info bg-light btn-lg col"><i class="bi bi-camera-video-fill me-2"></i> Call</a> -->
      <!-- <a href="<?= base_url() . 'Assistant/ubahbiodata?a=' . $pasien->id_pasien ?>" class="btn btn-info btn-lg col">Ubah Biodata</a>
         </div>
      </div> -->
   </div>
   <!-- share offcanvas -->
   <!-- <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasshare" aria-labelledby="offcanvasshareLabel" style="height:40vh;">
         <div class="offcanvas-header d-flex justify-content-center">
            <h5 class="offcanvas-title" id="offcanvasshareLabel">Share to</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <div class="row row-cols-3 g-4">
               <div class="col">
                  <a href="#" class="link-dark">
                     <div class="text-center">
                        <img src="img/social-icon/facebook.jpeg" alt="" class="img-fluid rounded-circle icon-lg d-block mx-auto">
                        <p class="pt-2 m-0">Facebook</p>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="link-dark">
                     <div class="text-center">
                        <img src="img/social-icon/instagram.jpeg" alt="" class="img-fluid rounded-circle icon-lg d-block mx-auto">
                        <p class="pt-2 m-0">Instagram</p>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="link-dark">
                     <div class="text-center">
                        <img src="img/social-icon/twitter.png" alt="" class="img-fluid rounded-circle icon-lg d-block mx-auto">
                        <p class="pt-2 m-0">Twitter</p>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="link-dark">
                     <div class="text-center">
                        <img src="img/social-icon/whatsapp.jpg" alt="" class="img-fluid rounded-circle icon-lg d-block mx-auto">
                        <p class="pt-2 m-0">Whatsapp</p>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="link-dark">
                     <div class="text-center">
                        <img src="img/social-icon/linkin.png" alt="" class="img-fluid rounded-circle icon-lg d-block mx-auto">
                        <p class="pt-2 m-0">Linkedin</p>
                     </div>
                  </a>
               </div>
               <div class="col">
                  <a href="#" class="link-dark">
                     <div class="text-center">
                        <img src="img/social-icon/pinterest.png" alt="" class="img-fluid rounded-circle icon-lg d-block mx-auto">
                        <p class="pt-2 m-0">Pinterest</p>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div> -->
   <!-- sidebar nav -->
   <!-- <nav id="main-nav">
         <ul class="second-nav">
            <li class="osahan-user-profile bg-primary">
               <div class="d-flex align-items-center gap-2">
                  <img src="img/favorite/favorite-4.jpg" alt="" class="rounded-pill img-fluid">
                  <div class="ps-1">
                     <h6 class="fw-bold text-white mb-0">Hey, Samantha!</h6>
                     <p class="text-white-50 m-0 small">+91 12345-67890</p>
                  </div>
               </div>
            </li>
            <li><a href="index.html"><span class="mdi mdi-cellphone me-3"></span>Splash</a></li>
            <li>
               <a href="#"><span class="mdi mdi-login me-3"></span>Authentication</a>
               <ul>
                  <li><a href="landing.html">Landing</a></li>
                  <li><a href="welcome.html">Welcome</a></li>
                  <li><a href="sign-up.html">Sign up</a></li>
                  <li><a href="sign-in.html">Sign in</a></li>
                  <li><a href="sign-in-email.html">Sign in with email</a></li>
                  <li><a href="forget-password.html">Forget Password</a></li>
                  <li><a href="reset-password.html">Reset Password</a></li>
                  <li><a href="verify.html">Verify</a></li>
                  <li> <a href="congrats.html">Congrats</a></li>
               </ul>
            </li>
            <li><a href="notification.html"><span class="mdi mdi-bell-outline me-3"></span>Notification</a></li>
            <li><a href="home.html"><span class="mdi mdi-home-variant-outline me-3"></span>Homepage</a></li>
            <li>
               <a href="#"><span class="mdi mdi-magnify me-3"></span>Doctors</a>
               <ul>
                  <li><a href="search.html"><span class="mdi mdi-magnify me-3"></span>Doctor List</a></li>
                  <li><a href="doctor-profile.html"><span class="mdi mdi-account-supervisor-outline me-3"></span>Doctor Profile</a></li>
                  <li><a href="request-appointment.html"><span class="mdi mdi-calendar-check me-3"></span>Request Appointment</a>
                  </li>
                  <li><a href="book-appointment.html"><span class="mdi mdi-calendar-plus me-3"></span>Book Appointment</a></li>
                  <li><a href="visit-info.html"><span class="mdi mdi-information-outline me-3"></span>Visit Info</a></li>
                  <li><a href="overview.html"><span class="mdi mdi-file-table-box-outline me-3"></span>Checkout</a></li>
               </ul>
            </li>
            <li>
               <a href="#"><span class="mdi mdi-account-outline me-3"></span>My Profile</a>
               <ul>
                  <li><a href="my-profile.html"><span class="mdi mdi-account-outline me-3"></span>My Account</a></li>
                  <li><a href="my-appointment-upcoming.html"><span class="mdi mdi-calendar-clock me-3"></span>My Upcoming Appointment</a></li>
                  <li><a href="my-appointment.html"><span class="mdi mdi-calendar-range me-3"></span>My Appointments</a></li>
                  <li><a href="history.html"><span class="mdi mdi-history me-3"></span>History</a></li>
                  <li><a href="favorite-doctor.html"><span class="mdi mdi-cards-heart-outline me-3"></span>Favorites Doctor</a></li>
                  <li><a href="change-profile.html"><span class="mdi mdi-square-edit-outline me-3"></span>Edit Profile</a></li>
               </ul>
            </li>
            <li><a href="video.html"><span class="mdi mdi-video-outline me-3"></span>Video Consultation</a></li>
            <li>
               <a href="#"><span class="mdi mdi-phone-outline me-3"></span>Doctor Call</a>
               <ul>
                  <li><a href="call.html">Call</a></li>
                  <li><a href="call-doctor.html">Call Doctor</a></li>
                  <li><a href="call-end.html">Call End</a></li>
               </ul>
            </li>
            <li>
               <a href="#"><span class="mdi mdi-record-circle-outline me-3"></span>Doctor Recordings</a>
               <ul>
                  <li><a href="recording.html">Recording 1</a></li>
                  <li><a href="recording-2.html">Recording 2</a></li>
                  <li><a href="play-recording.html">Play Recording 1</a></li>
                  <li><a href="play-recording-2.html">Play Recording 2</a></li>
               </ul>
            </li>
            <li><a href="message.html"><span class="mdi mdi-message-processing-outline me-3"></span>Message</a></li>
            <li><a href="chat.html"><span class="mdi mdi-chat-processing-outline me-3"></span>Chat</a></li>
            <li><a href="review.html"><span class="mdi mdi-star-half-full me-3"></span>Doctor Review</a></li>
         </ul>
         <ul class="bottom-nav">
            <li class="home">
               <a href="home.html">
                  <p class="h5 m-0"><span class="mdi mdi-home-variant-outline"></span></p>
                  Home
               </a>
            </li>
            <li class="find">
               <a href="search.html">
                  <p class="h5 m-0"><span class="mdi mdi-magnify"></span></p>
                  Search
               </a>
            </li>
            <li class="more">
               <a href="my-profile.html">
                  <p class="h5 m-0"><span class="mdi mdi-account-circle-outline"></span></p>
                  Profile
               </a>
            </li>
         </ul>
      </nav> -->


   <!-- <nav id="main-nav">
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

   </nav> -->
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