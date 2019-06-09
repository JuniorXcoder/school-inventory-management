            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Tambah Anggota</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Anggota <span class="fa-angle-right fa"></span> Tambah Anggota
                      </p>
                  </div>
                </div>
            </div>
            <div class="panel">
              <div class="panel-heading bg-primary"><h3 class="text-white">Form Tambah Anggota</h3></div>
                <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                              <form class="cmxform" id="signupForm" method="POST" action="index.php?page=anggota&action=add&submit=add">
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_firstname" name="nama_d" required>
                              <span class="bar"></span>
                              <label>Firstname</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_lastname" name="nama_b" required>
                              <span class="bar"></span>
                              <label>Lastname</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_username" name="username" required>
                              <span class="bar"></span>
                              <label>Username</label>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" id="validate_email" name="email" required>
                              <span class="bar"></span>
                              <label>Email</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="password" required>
                              <span class="bar"></span>
                              <label>Password</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_confirm_password" name="password2" required>
                              <span class="bar"></span>
                              <label>Confirm Password</label>
                            </div>
                          </div>                   
                          <div class="col-md-12">
                              <input class="submit btn btn-primary" type="submit" value="Simpan" name="simpan">
                        </div>
                      </form>
                      </div>
                      </div>
                  </div>
                  </div>
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        nama_d: "required",
        nama_b: "required",
        username: {
          required: true,
          minlength: 4
        },
        password: {
          required: true,
          minlength: 6
        },
        password2: {
          required: true,
          minlength: 6,
          equalTo: "#validate_password"
        },
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        nama_d: "Silahkan Masukan Nama Depan",
        nama_b: "Silahkan Masukan Nama Belakang",
        username: {
          required: "Silahkan Masukan Username",
          minlength: "Username harus lebih dari 4 karakter"
        },
        password: {
          required: "Silahkan Masukan Password",
          minlength: "Password harus lebih dari 6 karakter"
        },
        password2: {
          required: "Silahkan Masukan Password",
          minlength: "Password harus lebih dari 6 karakter",
          equalTo: "Password yang di masukan harus sama"
        },
        email: "Silahkan Masukan Email yang valid",
        validate_agree: "Pastikan anda telah menyetujui"
      }
    })});</script>