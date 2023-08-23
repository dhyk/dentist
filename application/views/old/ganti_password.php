<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>Ganti Password</h3>
        </div>
        <div class="col-12 col-sm-6">

        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid general-widget">
    <div class="row">

      <div class="col-sm-12">
        <div class="card">

          <form class="form theme-form" action="<?= base_url() . 'ubah_password' ?>" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Password Lama</label>
                    <div class="input-group">
                      <input class="form-control" id="lama" type="password" name="lama" required>
                      <span class="input-group-text" id="iconclickonee" onclick="iconclickone()">
                        <i id="iconeyeone" class="icofont icofont-eye"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlTextarea4">Password Baru</label>
                    <div class="input-group">
                      <input class="form-control" id="baru" type="password" name="baru" required>
                      <span class="input-group-text" id="iconclicktwoo" onclick="iconclicktwo()">
                        <i id="iconeyetwo" class="icofont icofont-eye"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <div class="card-footer text-end">

              <button class="btn btn-primary" class="tombol-ganti" type="submit">Simpan</button>
              <a href= "<?= base_url().'dashboard' ?>"><button type="button" class="btn btn-light">Kembali</button></a>
            </div>
          </form>
        </div>




      </div>

    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>


<script>

var icon = 0;
function iconclickone() {
    if (icon == 0) {
        icon = 1;
        document.getElementById("iconeyeone").classList.add('icofont-eye-blocked');
        document.getElementById("iconeyeone").classList.remove('icofont-eye');
        document.getElementById("lama").setAttribute('type', 'text');
    } else {
        icon = 0;
        document.getElementById("iconeyeone").classList.add('icofont-eye');
        document.getElementById("iconeyeone").classList.remove('icofont-eye-blocked');
        document.getElementById("lama").setAttribute('type', 'password');
    }

}


</script>


<script>

var icontu = 0;
function iconclicktwo() {
    if (icontu == 0) {
        icontu = 1;
        document.getElementById("iconeyetwo").classList.add('icofont-eye-blocked');
        document.getElementById("iconeyetwo").classList.remove('icofont-eye');
        document.getElementById("baru").setAttribute('type', 'text');
    } else {
        icontu = 0;
        document.getElementById("iconeyetwo").classList.add('icofont-eye');
        document.getElementById("iconeyetwo").classList.remove('icofont-eye-blocked');
        document.getElementById("baru").setAttribute('type', 'password');
    }

}


</script>