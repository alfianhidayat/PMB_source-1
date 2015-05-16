<!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
              $('.dropdown-button').dropdown();
          });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slider();
        });
      </script>
    </head>

    <body>
    <!-- Begin Navbar -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="ujian">Jadwal Ujian Masuk</a></li>
          <li><a href="#!">Informasi Penting</a></li>
          <li><a href="hasil">Hasil Ujian Masuk</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="pendaftaran">Pendaftaran Online</a></li>
          <li><a href="formulir">Cetak Formulir</a></li>
          <li><a href="konfirmasi">Konfirmasi Pembayaran</a></li>
        </ul>
        <nav>
          <div class="nav-wrapper">
            <a href="home" class="brand-logo active">Logo</a>
            <ul class="right hide-on-med-and-down">
              <li class="active"><a href="home">Home</a></li>
              <li><a href="informasi">Informasi</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Berita<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
              <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Pendaftaran<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
              <li><a href="#!">Program Studi</a></li>
              <li><a href="#!">Hubungi Kami</a></li>
            </ul>
          </div>
        </nav>
        
    <!-- End Navbar -->

    <!-- Begin Slider -->
        <!-- <div class="container"> -->
        <div class="container">
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
        </div>
        <!-- </div> -->

    <!-- End Slider -->

    <!-- Begin Grid -->
      <div class="container">
        <div class="row">
          <div class="section">
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
      </div>
      <!-- End Grid -->

      <!-- Begin Footer -->

      <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


      <!-- End Footer -->

      <!--Import jQuery before materialize.js-->
      
    </body>
  </html>