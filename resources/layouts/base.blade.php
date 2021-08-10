<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href="https://appseed.us/admin-dashboards/django-dashboard-argon">
  
  <title>
  {{ config('app.name', 'Medic-a') }}
  </title>

  <!-- Favicon - loaded as static -->
  <link rel="icon" href="{{URL::to('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{URL::to('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::to('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{URL::to('assets/css/argon.min.css?v=1.2.0')}}" type="text/css">

  <!-- Specific CSS goes HERE -->
</head>


@include('layouts.nav-header')
@include('layouts.nav-kir')
<body>
    <!-- Header -->
    <div class="header bg-primary pb-5">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
  <script src="{{URL::to('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{URL::to('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Specific JS goes HERE --> 
  <script src="{{URL::to('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{URL::to('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <script src="{{URL::to('assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
