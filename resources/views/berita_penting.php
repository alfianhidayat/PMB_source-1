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
    </head>

    <body>
    <!-- Begin Navbar -->
        <ul id="dropdown1" class="dropdown-content">
          <li class="active"><a href="ujian">Jadwal Ujian Masuk</a></li>
          <li class="active"><a href="informasipenting">Informasi Penting</a></li>
          <li><a href="hasil">Hasil Ujian Masuk</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="pendaftaran">Pendaftaran Online</a></li>
          <li><a href="formulir">Cetak Formulir</a></li>
          <li><a href="konfirmasi">Konfirmasi Pembayaran</a></li>
        </ul>
        <nav>
          <div class="nav-wrapper">
            <a href="home" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
              <li ><a href="home">Home</a></li>
              <li><a href="informasi">Informasi</a></li>
              <!-- Dropdown Trigger -->
              <li class="active"><a class="dropdown-button" href="#!" data-activates="dropdown1">Berita<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
              <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Pendaftaran<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
              <li><a href="prodi">Program Studi</a></li>
              <li><a href="hubungikami">Hubungi Kami</a></li>
            </ul>
          </div>
        </nav>
        
    <!-- End Navbar -->

    <!-- Container -->
        <div class="container">
        <div class="section">
          <div class="row">
            <ul class="collection with-header">
              <li class="collection-header"><h4>Pengumuman Untuk Calon Siswa</h4></li>
                <li class="collection-item">       
                        <p>Berikut ini kami informasikan kepada semua calon Siswa SMANTIG, berkenaan dengan Hasil 
                        Ujian masuk yang di selenggarakan di gedung SMANTIG. Berikut hasil yang bisa anda lihat di halaman dibawah ini : </p>
                        <p>Adapun Peserta yang dinyatakan lulus, maka diwajibkan melakukan daftar ulang dengan melakukan pembayaran minimal sebesar 30% dari total biaya masuk (SPP + biaya kuliah satu semester) sesuai dengan biaya pada tingkat, 
                        jurusan dan kelas yang dipilih dengan rincian minimal yang harus di lunasi sebagai berikut : </p>
                          <ul class="collection">
                            <li class="collection-item">1. Program IPA Rp.500.000 (SPP) + Rp. 1.920.000 (Biaya Kuliah) = Rp 2.420.000,-(Total), jadi 30% minimal yang harus di bayar sebesar Rp. 760.000,- </li>
                            <li class="collection-item">2. Program IPS Rp.500.000 (SPP) + Rp. 1.920.000 (Biaya Kuliah) = Rp 2.420.000,-(Total), jadi 30% minimal yang harus di bayar sebesar Rp. 760.000,- </li>
                            <li class="collection-item">3. Program BAHASA Rp.500.000 (SPP) + Rp. 1.920.000 (Biaya Kuliah) = Rp 2.420.000,-(Total), jadi 30% minimal yang harus di bayar sebesar Rp. 760.000,- </li>
                          </ul>
                        <p>Pembayaran dapat dilakukan dengan cara mentransfer biaya tersebut pada rekening Bank BRI Cab. Bandung Nomor Rekening 000 000 000 000 an. 
                          SMANTING dan/atau dibayar tunai kepada bagian administrasi di lantai satu gedung SMANTIG. </p>
                </li>
            </ul>
          </div>
        </div>
        </div>



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
            © 2015 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


      <!-- End Footer -->

      <!--Import jQuery before materialize.js-->
      
    </body>
  </html>