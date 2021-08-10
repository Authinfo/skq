<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
  <!-- Favicon -->
  <link rel="icon" href="{{URL::to('assets/dashboard/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{URL::to('assets/dashboard/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('assets/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{URL::to('assets/dashboard/css/argon.css')}}" type="text/css">
</head>

<body>
  <!-- Sidenav -->
<!-- sedinav content -->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-gradient-green border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
          <!-- Search form -->
            <div>
                <button class="btn btn-icon btn-primary" type="button" onclick="goBack()">
                <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                </button>
            </div><div class="col-xl-50 col-lg-10 col-md-4 px-5">
                <h1 class="text-white">Booking Baru</h1>
              </div>
        </div>
      </div>
      
    </nav>
  </div>
  <div class="container-fluid mt-5">
    <div class="row col d-flex justify-content-center">
      <div class="col-lg-11">
        <div class="card-wrapper">
          <!-- Form controls -->
          <div class="card">
            <!-- Card body -->
            <div class="card-body">
              <form>
                <div class="form-group row">
                  <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Layanan</label>
                    <div class="row col-md-10">
                        <tr>
                            <td>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio1" type="radio" onclick="text(0)" >
                                        <label class="custom-control-label" for="customRadio1">Perawatan Cegah Dini Covid-19</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio2" type="radio" onclick="text(1)">
                                        <label class="custom-control-label" for="customRadio2">Perawatan Isoman Covid-19</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio3" type="radio" onclick="text(2)">
                                        <label class="custom-control-label" for="customRadio3">Rawat Jalan</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </div>
                </div>
                <div class="form-group row" >
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Perawatan Cegah Dini Covid-19</label>
                        <div class="row col-md-10" >
                            <tr>
                                <td>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-1" class="custom-control-input" id="customRadio1" type="radio">
                                            <label class="custom-control-label" for="customRadio1">Tes Rapid Antigen</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-1" class="custom-control-input" id="customRadio2" type="radio">
                                            <label class="custom-control-label" for="customRadio2">Tes RT-PCR</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-1" class="custom-control-input" id="customRadio3" type="radio">
                                            <label class="custom-control-label" for="customRadio3">Imune Booster</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-1" class="custom-control-input" id="customRadio4" type="radio">
                                            <label class="custom-control-label" for="customRadio4">Vaksin</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input name="custom-radio-1" class="custom-control-input" id="customRadio5" type="radio">
                                            <label class="custom-control-label" for="customRadio5">Lab Darah</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Perawatan Isoman Covid-19</label>
                    <div class="row col-md-10">
                        <tr>
                            <td>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio1" type="radio">
                                        <label class="custom-control-label" for="customRadio1">Gold</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio2" type="radio">
                                        <label class="custom-control-label" for="customRadio2">Basic</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="example-date-input" class="col-md-2 col-form-label form-control-label">Tanggal Permintaan</label>
                  <div class="col-md-10">
                    <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Jenis Booking</label>
                    <div class="row col-md-10">
                        <tr>
                            <td>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio1" type="radio">
                                        <label class="custom-control-label" for="customRadio1">Saya Sendiri</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio2" type="radio">
                                        <label class="custom-control-label" for="customRadio2">Orang Lain</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-1" class="custom-control-input" id="customRadio3" type="radio">
                                        <label class="custom-control-label" for="customRadio3">Beberapa Orang</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script>
    function goBack() {
        window.history.back();
    }
  </script>
  <script src="{{URL::to('assets/dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{URL::to('assets/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}')}}"></script>
  <script src="{{URL::to('assets/dashboard/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{URL::to('assets/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{URL::to('assets/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{URL::to('assets/dashboard/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{URL::to('assets/dashboard/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{URL::to('assets/dashboard/js/argon.js?v=1.1.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{URL::to('assets/dashboard/js/demo.min.js')}}"></script>
</body>

</html>