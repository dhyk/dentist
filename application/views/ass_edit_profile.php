<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="img/logo.svg" type="image/png">
   <title>Waja - Ubah Biodata</title>
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
         <a href="my-profile.html" class="text-dark bg-white shadow rounded-circle icon">
            <span class="mdi mdi-arrow-left mdi-18px"></span></a>
         <h6 class="mb-0 ms-3 me-auto fw-bold">Ubah Biodata</h6>
         <div class="d-flex align-items-center gap-3">
            <!-- <a class="toggle d-flex align-items-center justify-content-center fs-5 bg-white shadow rounded-circle icon" href="#"><i
                  class="bi bi-list"></i></a> -->
         </div>
      </div>
      <!-- body -->
      <div class="vh-100 my-auto overflow-auto p-3">
         <form>
            <div class="mb-3">
               <label for="exampleFormControlName" class="form-label mb-1">Nama</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-account-outline mdi-18px"></span>
                  </span>
                  <input type="text" class="form-control bg-transparent rounded-0 border-0 px-0"
                     placeholder="Type your first name" aria-label="Type your first name" aria-describedby="firstname"
                     value="Mr">
               </div>
            </div>
            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Tanggal Lahir</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName1">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-calendar mdi-18px"></span>
                  </span>
                  <input type="date" class="form-control bg-transparent rounded-0 border-0 px-0"
                     placeholder="Type your last name" aria-label="Type your last name" aria-describedby="firstname"
                     value="dd-mm-yyy">
               </div>
            </div>
            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Jenis Kelamin</label>
               <div class="input-group border bg-white rounded-3 py-1">
                  <label class="input-group-text bg-transparent rounded-0 border-0" for="inputGroupSelect01">
                     <span class="mdi mdi-gender-male-female mdi-18px"></span>
                  </label>
                  <select class="form-select bg-transparent rounded-0 border-0 px-0" id="inputGroupSelect01">
                     <option selected>Male</option>
                     <option value="1">Female</option>
                  </select>
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Alamat</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName1">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-home mdi-18px"></span>
                  </span>
                  <input type="text" class="form-control bg-transparent rounded-0 border-0 px-0"
                     placeholder="Type your last name" aria-label="Type your last name" aria-describedby="firstname"
                     value="Malang">
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Pekerjaan</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName1">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-briefcase mdi-18px"></span>
                  </span>
                  <input type="text" class="form-control bg-transparent rounded-0 border-0 px-0"
                     placeholder="Type your last name" aria-label="Type your last name" aria-describedby="firstname"
                     value="Wiraswata">
               </div>
            </div>
           

            <div>
               <label for="exampleFormControlNumber" class="form-label mb-1">Nomor WA</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlNumber">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="number">
                    <span class="mdi mdi-whatsapp mdi-18px"></span>
               </span>
                  <input type="text" class="form-control bg-transparent rounded-0 border-0 px-0"
                     placeholder="Type your number" aria-label="Type your number" aria-describedby="number"
                     value="01886***037">
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Alergi</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName1">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-allergy mdi-18px"></span>
                  </span>
                  <textarea type="text" class="form-control bg-transparent rounded-0 border-0 px-0"
                     placeholder="Type your last name" aria-label="Type your last name" aria-describedby="firstname"
                     value="Malang">
                  </textarea>
               </div>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlName1" class="form-label mb-1">Riwayat Kesehatan</label>
               <div class="input-group border bg-white rounded-3 py-1" id="exampleFormControlName1">
                  <span class="input-group-text bg-transparent rounded-0 border-0" id="firstname">
                     <span class="mdi mdi-history mdi-18px"></span>
                  </span>
                  <textarea type="text" class="form-control bg-transparent rounded-0 border-0 px-0"
                     placeholder="Type your last name" aria-label="Type your last name" aria-describedby="firstname"
                     value="Malang">
                  </textarea>
               </div>
            </div>


         </form>
      </div>
      <!-- footer -->
      <div class="footer mt-auto p-3">
         <a href="my-profile.html" class="btn btn-info btn-lg w-100 rounded-4">Simpan</a>
      </div>
   </div>
   <!-- sidebar nav -->
   
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