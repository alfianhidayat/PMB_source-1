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
          <li><a href="ujian">Jadwal Ujian Masuk</a></li>
          <li><a href="informasipenting">Informasi Penting</a></li>
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
              <li class="active"><a href="informasi">Informasi</a></li>
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Berita<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
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
              <li class="collection-header"><h4>Penerimaan Siswa Baru</h4></li>
                <li class="collection-item">
              <div class="card-panel teal darken-1"><h6 class="center" style="color:white">Waktu Pendaftaran</h6></div>
            <table class="striped">
              <thead>
                <tr>
                    <th class="center" data-field="gel">Gelombang</th>
                    <th class="center" data-field="waktu-pendaftaran">Waktu Pendaftaran</th>
                    <th class="center" data-field="jadwal-tes">Jadwal Tes</th>
                    <th class="center" data-field="jadwal-tes">Pengumuman</th>
                    <th class="center" data-field="jadwal-tes">Pendaftaran Gelombang</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td class="center">{{$post->gel}}</td>
                        <td class="center">{{$post->time}}</td>
                        <td class="center">{{$post->jadwal}}</td>
                        <td class="center">{{$post->pengumuman}}</td>
                        <td class="center">{{$post->pendaftaran}}</td>
                      </tr>
                    @endforeach
              </tbody>
            </table>
              <div class="card-panel teal darken-1"><h6 class="center" style="color:white ">Persyaratan Pendaftaran</h6></div>
              <ul class="collection">
                <li class="collection-item">1. Mengisi, mendandatangani dan membayara Formulir Pendaftaran Rp 150.000,-</li>
                <li class="collection-item">2. Lulusan SMP/MTS</li>
                <li class="collection-item">3. Fotocopy Identitas diri seperti KTP/PASSPORT/SIM/Surat keterangan siswa</li>
                <li class="collection-item">4. Menyerahkan Pas Photo berwarna ukuran 4x6 dan 4x3 masing-masing 2 lembar</li>
                <li class="collection-item">5. Menyerahkan Fotocopy Ijazah/Surat Keterangan Lulus/Ijazah/STTB/Surat Keterangan ikut UAN</li>
                <li class="collection-item">6. Menyerahkan Fotocopy daftar nilai ijazah/STTB/UAN/Raport terakhir</li>
              </ul>
              </li>
              </ul>
            </div>
        </div>
        </div>
        <!--
          <?php
            var_dump($posts);
          ?>
        -->


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