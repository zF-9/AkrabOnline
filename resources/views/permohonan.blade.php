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
                <img src="{{ asset('img/jatasabah.png') }}"  />
                <img src="{{ asset('img/akrablogo.jpg') }}"  />
                <h6 class="h1 text-gray-900 mb-4">Borang Keahlian Akrab</h5>
                <h5 class="h3 text-gray-900 mb-4">Jabatan Perkhidmatan Awam Negeri</h3>
              </div>
              <form action="/permohonan" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nama" class="form-control form-control-user" id="nama" placeholder="Nama" required autocomplete="nama" autofocus>
                    
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  
                    <label for="jantina" class="col-md-0 col-form-label text-md-left">&nbsp&nbsp&nbspSila Pilih Jantina</label> 
                    <div class="col-sm-4">
                    <select id="jantina" name="jantina" class="form-control" value="{{ old('jantina') }}" required autocomplete="jantina" autofocus>
                    
                      <option jantina="Jantan">Lelaki</option>
                      <option jantina="Betina">Perempuan</option>
                  </select>

                  @error('jantina')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                    <!--<input type="text" name="jantina" class="form-control form-control-user" id="" placeholder="Jantina">-->
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-5 mb-3 mb-sm-0">
                    <input type="text" name="no_ic" class="form-control form-control-user" id="no_ic" placeholder="No Kad Pengenalan" required autocomplete="no_ic" autofocus>
                    @error('no_ic')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror  
                  </div>
                 
                    <label for="date_lahir" class="col-md-0 col-form-label text-md-left">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTarikh Lahir &nbsp&nbsp</label> 
                    <input type="date" name="date_lahir" class="form-control form-control-user col-md-4" id="date_lahir" placeholder="Tarikh Lahir" required autocomplete="date_lahir" autofocus>
                    @error('date_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="" name="nama_kem_jab" class="form-control form-control-user" id="nama_kem_jab" placeholder="Nama Kementerian/Jabatan" required autocomplete="nama_kem_jab" autofocus>
                    @error('nama_kem_jab')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                <div class="form-group">
                </div>

                <div class="form-group">
                    <input type="" name="add_kem_jab" class="form-control form-control-user" id="add_kem_jab" placeholder="Alamat Kementerian/Jabatan" required autocomplete="add_kem_jab" autofocus>
                    @error('add_kem_jab')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>               

                <div class="form-group">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Alamat Email" required autocomplete="email" autofocus>                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-sm-6">

                  </div>
                </div>

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="" name="no_tel" class="form-control form-control-user" id="no_tel" placeholder="Nombor Telefon" required autocomplete="no_tel" autofocus>
                    @error('no_tel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="col-sm-6">
                    <input type="" name="no_fax" class="form-control form-control-user" id="no_fax" placeholder="Nombor Fax" required autocomplete="no_fax" autofocus>
                    @error('no_fax')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="" name="no_ph" class="form-control form-control-user" id="no_ph" placeholder="Nombor Handphone" required autocomplete="no_ph" autofocus>
                    @error('no_ph')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="col-sm-6">
                    <input type="" name="jawatan" class="form-control form-control-user" id="jawatan" placeholder="Jawatan" required autocomplete="jawatan" autofocus>
                    @error('jawatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>   

               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="" name="gred" class="form-control form-control-user" id="gred" placeholder="Gred" required autocomplete="gred" autofocus>
                    @error('gred')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="col-sm-6">
                    <input type="" name="bil_tahun" class="form-control form-control-user" id="bil_tahun" placeholder="Bilangan Tahun Berkhidmat" required autocomplete="bil_tahun" autofocus>
                    @error('bil_tahun')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>   

               <div class="form-group row">
               
                    
                    <label for="date_sara" class="col-md-0 col-form-label text-md-left">&nbsp&nbsp&nbspTarikh Wajib Bersara &nbsp&nbsp</label> 
                    <input type="date" name="date_sara" class="form-control form-control-user col-md-4" id="date_sara" placeholder="Tarikh Wajib Bersara" required autocomplete="date_sara" autofocus>
                    
                   <!-- <input type="date" name="date_sara" class="form-control form-control-user" id="date_sara" placeholder="Tarikh Wajib Bersara" required autocomplete="date_sara" autofocus>-->
                    @error('date_sara')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                

                  <div class="col-sm-6">
                    <input type="" name="bil_sess" class="form-control form-control-user" id="bil_sess" placeholder="Bilangan Sesi Terdahulu" required autocomplete="bil_sess" autofocus>
                    @error('bill_sess')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>            
                
                <div class="form-group row">
                  <div class="col-md-6">
                      <input id="password" placeholder="Kata Laluan" type="password" class="form-control form-control-user col-md-0 col-form-label text-md-left" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                    
                <div class="form-group row">
                
                        <div class="col-md-6">
                          <input id="password-confirm" placeholder="Pastikan Kata Laluan" type="password" class="form-control form-control-user col-md-0 col-form-label text-md-left" name="password_confirmation" required autocomplete="new-password">
                        </div>
                </div>
              </div>          

                <!--<a href="login.html" class="btn btn-primary btn-user btn-block">
                  Hantar Permohonan
                </a>-->
                <div class="text-center">
                    <button type="submit" class="btn btn-info mt-4">{{ __('Hantar Permohonan') }}</button>
                </div>          
                <!--<hr>-->
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
