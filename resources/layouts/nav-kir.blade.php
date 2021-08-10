<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
<div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand">
          <img src="{{URL::to('assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  active">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Internal Fiture</span>
              </a>
              <div class="collapse" id="navbar-examples" style="">
                <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="#navbar-multilevel" class="nav-link collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-multilevel">Profil Nakes</a>
                    <div class="collapse show" id="navbar-multilevel" style="">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Dokter Spesialis</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Dokter Umum</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Perawat</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Profile Pasien</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Profile Klinik</a>
                  </li>
                  <li class="nav-item">
                    <a href="#navbar-multilevel" class="nav-link collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-multilevel">Rekam Medis</a>
                    <div class="collapse" id="navbar-multilevel" style="">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Data Perawatan</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Data Pemeriksaan</a>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Apotek</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Laporan</a>
                  </li>
                </ul>
              </div>
            </li>
          </li>
          <li class="nav-item">
              <a class="nav-link collapsed" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-bulb-61 text-yellow"></i>
                <span class="nav-link-text">Information</span>
              </a>
              <div class="collapse" id="navbar-components" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Info Dokter</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Info Medis</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-building text-pink"></i>
                <span class="nav-link-text">Home Care</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Pendaftaran</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Pemeriksaan</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Pembayaran</a>
                  </li>
                </ul>
              </div>
            </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="ni ni-send text-blue"></i>
              <span class="nav-link-text">Contact us</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout/">
              <i class="ni ni-user-run text-red"></i>
              <span class="nav-link-text">Logout</span>
            </a>
          </li>            
        </ul>
      </div>
    </div>
  </div>
</nav>