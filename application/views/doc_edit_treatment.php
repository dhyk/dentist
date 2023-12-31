<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="img/logo.svg" type="image/png">
   <title>Waja - Ubah Treatment</title>
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
         <a href="<?= base_url() . "dokter/pasien?a=" . $treatment->id_pasien ?>" class="text-dark bg-white shadow rounded-circle icon">
            <span class="mdi mdi-arrow-left mdi-18px"></span></a>
         <h6 class="mb-0 ms-3 me-auto fw-bold">Ubah Treatment</h6>
         <div class="d-flex align-items-center gap-3">
            <a class="toggle d-flex align-items-center justify-content-center fs-5 bg-white shadow rounded-circle icon" href="#"><i
                  class="bi bi-list"></i></a>
         </div>
      </div>
      <!-- body -->
      <div class="vh-100 my-auto overflow-auto p-3">
      <form method="post" action="<?= base_url() . 'Dokter/editTreatment' ?>">
            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Tanggal</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName1">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-calendar mdi-18px"></span>
                  </span>
                  <input value="<?= $treatment->tanggal ?>" required name="tanggal" type="date" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="dd/mm/yyyy" aria-label="Type your last name" aria-describedby="firstname">
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Keluhan</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName1">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-bottle-tonic-plus mdi-18px"></span>
                  </span>
                  <textarea type="text" required name="keluhan" class="form-control bg-transparent rounded-0 border-0 px-0" placeholder="Tuliskan alergi dari pasien" aria-label="Type your last name" aria-describedby="firstname">
               <?= $treatment->keluhan ?>   
               </textarea>
               </div>
            </div>


            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Prosedur</label>
               <div class="input-group border bg-white rounded-3 py-1">
                  <label class="input-group-text bg-transparent rounded-0 border-0" for="inputGroupSelect01">
                     <span class="mdi mdi-chart-timeline-variant mdi-18px"></span>
                  </label>
                  <select required id="prosed" name="prosedur" class="form-select bg-transparent rounded-0 border-0 px-0" id="inputGroupSelect01">
               <option value="<?= $treatment->prosedur ?>" selected><?= $treatment->prosedur ?></option>
                  <?php foreach ($prosedur as $key) { ?>
                        <option value="<?= $key->prosedur ?>"><?= $key->prosedur ?></option>
                     <?php } ?>
                  </select>
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Sub-Prosedur</label>
               <div class="input-group border bg-white rounded-3 py-1">
                  <label class="input-group-text bg-transparent rounded-0 border-0" for="inputGroupSelect01">
                     <span class="mdi mdi-chart-timeline-variant-shimmer mdi-18px"></span>
                  </label>
                  <select required id="subprosed" name="subprosedur" class="form-select bg-transparent rounded-0 border-0 px-0" id="inputGroupSelect01">
                  <option value="<?= $treatment->subprosedur ?>" selected><?= $treatment->subprosedur ?></option>
                  </select>
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">BHP</label>
               <div class="input-group border bg-white rounded-3 py-1">
                  <label class="input-group-text bg-transparent rounded-0 border-0" for="inputGroupSelect01">
                     <span class="mdi mdi-package-variant-closed mdi-18px"></span>
                  </label>
                  <select required id="bahan" name="bhp" class="form-select bg-transparent rounded-0 border-0 px-0" id="inputGroupSelect01">
                  <option value="<?= $treatment->bhp ?>" selected><?= $treatment->bhp ?></option>   
                  <?php foreach ($bhp as $key) { ?>
                        <option value="<?= $key->bhp ?>"><?= $key->bhp ?></option>
                     <?php } ?>
                  </select>
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Sub-BHP</label>
               <div class="input-group border bg-white rounded-3 py-1">
                  <label class="input-group-text bg-transparent rounded-0 border-0" for="inputGroupSelect01">
                     <span class="mdi mdi-package-variant mdi-18px"></span>
                  </label>
                  <select required id="subbahan" name="subbhp" class="form-select bg-transparent rounded-0 border-0 px-0" id="inputGroupSelect01">
                  <option value="<?= $treatment->subbhp ?>" selected><?= $treatment->subbhp ?></option>

                  </select>
               </div>
            </div>





      </div>
      <!-- footer -->
      <div class="footer mt-auto p-3">
         <button type="submit" class="btn btn-info btn-lg w-100 rounded-4">Simpan</button>
      </div>
      <input type="hidden" name="id_treatment" value="<?= $treatment->id_treatment ?>" />
      <input type="hidden" name="id_pasien" value="<?= $treatment->id_pasien ?>" />
      </from>
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


<script type="text/javascript">
   $(document).ready(function() {

      $('#prosed').change(function() {
         var id = $(this).val();
         $.ajax({
            url: "<?php echo site_url('dokter/getsubprosedur'); ?>",
            method: "POST",
            data: {
               prosedur: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {

               var html = '';
               var i;
               for (i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].subprosedur + '">' + data[i].subprosedur + '</option>';
               }
               $('#subprosed').html(html);

            }
         });
         return false;
      });

   });
</script>


<script type="text/javascript">
   $(document).ready(function() {

      $('#bahan').change(function() {
         var id = $(this).val();
         $.ajax({
            url: "<?php echo site_url('dokter/getsubbhp'); ?>",
            method: "POST",
            data: {
               bhp: id
            },
            async: true,
            dataType: 'json',
            success: function(data) {

               var html = '';
               var i;
               for (i = 0; i < data.length; i++) {
                  html += '<option value="' + data[i].subbhp + '">' + data[i].subbhp + '</option>';
               }
               $('#subbahan').html(html);

            }
         });
         return false;
      });

   });
</script>