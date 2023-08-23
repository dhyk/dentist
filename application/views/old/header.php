<!DOCTYPE html>
<html lang="en">

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
<?php endif; ?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Informasi Pengumuman Sekolah (SiPLah)">
  <meta name="keywords" content="Sistem, Informasi, Pengumuman, Sekolah">
  <meta name="author" content="JTI Polinema">
  <link rel="icon" href="<?= base_url() ?>/assets/images/logo/favicon-icon.png" type="image/x-icon">
  <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo/favicon-icon.png" type="image/x-icon">
  <title>Sistem Informasi Dokter Gigi</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/date-picker.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/owlcarousel.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/prism.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/whether-icon.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/datatables.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/select2.css">
<!--   
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/sweetalert2.css"> -->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/custom.css">
  <link id="color" rel="stylesheet" href="<?= base_url() ?>/assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/responsive.css">

  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</head>

<body>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper">
            <h1>Waja</h1>
            <!-- <a href="index.html"><img class="img-fluid" src="<?= base_url() ?>/assets/images/logo/logo.png" alt=""></a> -->
          </div>
          <div class="toggle-sidebar">
            <div class="status_toggle sidebar-toggle d-flex">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="left-side-header col ps-0 d-none d-md-block">

        </div>
        <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
          <ul class="nav-menus">

            <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
              <div class="media profile-media">
                <!-- <h6>Hi,<?= $nama?> ! </h6> -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <g>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </svg>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="<?= base_url().'ganti_password' ?>"><i data-feather="settings"></i><span>Ganti
                      Password</span></a></li>
                <li><a href="<?= base_url().'logout' ?>" class="tombol-logout"><i data-feather="log-out"> </i><span>Keluar</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper"><a href="index.html">
            <h1>Waja</h1>
            <!-- <img class="img-fluid for-light" src="<?= base_url() ?>/assets/images/logo/small-logo.png" alt=""> -->
            <!-- <img class="img-fluid for-dark" src="<?= base_url() ?>/assets/images/logo/small-white-logo.png" alt=""></a> -->
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
          </div>
          <div class="logo-icon-wrapper">
          <h1>Waja</h1>
            <!-- <a href="index.html"><img class="img-fluid" src="<?= base_url() ?>/assets/images/logo-icon.png" alt=""></a> -->
          </div>

          <!-- <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="<?= base_url() ?>/assets/images/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"> </i></div>
                </li>

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>dashboard">
                    <i data-feather="home"></i>
                    <span>Beranda</span></a>
                </li>


                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>pengumuman">
                    <i data-feather="rss"></i>
                    <span>Pengumuman</span></a>
                </li>

                <?php if($level=="ADMIN"){ ?>

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>kelompok">
                    <i data-feather="package"></i>
                    <span>Kelompok</span></a>
                </li>

                <?php } ?>

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>nomorwa">
                    <i data-feather="message-circle"></i>
                    <span>Nomor WA</span></a>
                </li>

                <?php if($level=="ADMIN"){ ?>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>akun">
                    <i data-feather="users"></i> <span>Akun</span></a>
                </li>
                <?php } ?>

              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav> -->
        
        </div>
      </div>
