<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset ('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset ('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <img src=""> <!-- {{ asset ('assets/jata.png')}} -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h5 class="h3 text-gray-900 mb-4">Permohonan Menjadi Ahli Akrab Online</h5>
                <h3 class="h5 text-gray-900 mb-4">Sila Isi Butiran Di Bawah Dengan Lengkap</h3>
              </div>
              <form class="user" action="/permohonan" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="Nama" class="form-control form-control-user" id="" placeholder="Nama">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="jantina" class="form-control form-control-user" id="" placeholder="jantina">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="no_ic" class="form-control form-control-user" id="" placeholder="No Kad Pengenalan">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="date_lahir" class="form-control form-control-user" id="" placeholder="Tarikh Lahir">
                  </div>
                </div>

                <div class="form-group">
                    <input type="" name="nama_kem_jab" class="form-control form-control-user" id="" placeholder="Nama Kementerian/Jabatan">
                </div>

                <div class="form-group">
                </div>

                <div class="form-group">
                    <input type="" name="add_kem_jab" class="form-control form-control-user" id="" placeholder="Alamat Kementerian/Jabatan">
                </div>               

                <div class="form-group">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" name="email" class="form-control form-control-user" id="" placeholder="Alamat Email">                    
                  </div>
                  <div class="col-sm-6">

                  </div>
                </div>

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="" name="no_tel" class="form-control form-control-user" id="" placeholder="Nombor Telefon">
                  </div>
                  <div class="col-sm-6">
                    <input type="" name="no_fax" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Nombor Fax">
                  </div>
                </div>

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="" name="no_ph" class="form-control form-control-user" id="" placeholder="Nombor Handphone">
                  </div>
                  <div class="col-sm-6">
                    <input type="" name="jawatan" class="form-control form-control-user" id="" placeholder="jawatan">
                  </div>
                </div>   

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="" name="gred" class="form-control form-control-user" id="" placeholder="Gred">
                  </div>
                  <div class="col-sm-6">
                    <input type="" name="bil_tahun" class="form-control form-control-user" id="" placeholder="Bilangan Tahun Berkhidmat">
                  </div>
                </div>   

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="" name="date_sara" class="form-control form-control-user" id="" placeholder="Tarikh Wajib Bersara">
                  </div>
                  <div class="col-sm-6">
                    <input type="" name="bil_sess" class="form-control form-control-user" id="" placeholder="Bilangan Sesi Terdahulu">
                  </div>
                </div>                            

                <!--<a href="login.html" class="btn btn-primary btn-user btn-block">
                  Hantar Permohonan
                </a>-->
                <!--<div class="text-right">-->
                    <button type="submit" class="btn btn-success mt-4">{{ __('Hantar Permohonan') }}</button>
                <!--</div>-->             
                <hr>
              </form>
            </div>
          </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset ('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset ('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset ('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
