@extends ('layouts.main')

@section('content')
        <div class="slider">
          <ul class="slides">
            <li>
              <img src="img/reg.jpg"> <!-- random image -->
              <div class="caption center-align">
                <h3>Selamat Datang di Website</h3>
                <h5 class="light black-text text-lighten-3">Penerimaan Siswa Baru SMANTIG</h5>
              </div>
            </li>
            <li>
              <img src="img/reg.jpg"> <!-- random image -->
              <div class="caption left-align">
                <h3>Silahkan Download Brosur</h3>
                <h5 class="light black-text text-lighten-3">Untuk Info Lengkapnya</h5>
              </div>
            </li>
            <li>
              <img src="img/reg.jpg"> <!-- random image -->
              <div class="caption right-align">
                <h3>Silahkan Melakukan Pendaftaran</h3>
                <h5 class="light black-text text-lighten-3">Pendaftaran secara online.</h5>
              </div>
            </li>
          </ul>
        </div>
        <!-- </div> -->

    <!-- End Slider -->

    <!-- Begin Grid -->
        <div class="row">
          <div class="section">
          <div class="divide"></div>
            <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/brosur.png" height="300px">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Download Brosur Disini <i class="mdi-navigation-more-vert right"></i></span>
                    <p><a href="#">Click Me</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Brosur Penerimaan Siswa Baru<i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/reg.jpg" height="300px">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Pendaftaran Online<i class="mdi-navigation-more-vert right"></i></span>
                    <p><a href="#">Click Me</a></p>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Pendaftaran Online <i class="mdi-navigation-close right"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      <!-- End Grid -->
@stop