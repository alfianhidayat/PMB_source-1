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
          <li class="active"><a href="hasil">Hasil Ujian Masuk</a></li>
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
              <li class="collection-header"><h4>Hasil Seleksi Ujian Masuk</h4></li>
                <li class="collection-item">       
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s4">
                      <input id="input_text" type="text" length="10">
                      <label for="input_text">Search</label>
                    </div>     
                  </div>             
                </form>
                <!-- Table -->
                  <table class="striped">
                    <thead>
                      <tr>
                          <th data-field="gel">No</th>
                          <th data-field="waktu-pendaftaran">Nomor Tes</th>
                          <th data-field="jadwal-tes">Nama</th>
                          <th data-field="jadwal-tes">Nilai Tes</th>
                          <th data-field="jadwal-tes">Status</th>
                          <th data-field="jadwal-tes">Gelombang</th>
                          <th data-field="jadwal-tes">Tanggal Tes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>TES001</td>
                        <td>Alfian Hidayat</td>
                        <td>400</td>
                        <td>Lulus</td>
                        <td>Gel.1 </td>
                        <td>03 Mei 2015</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>TES001</td>
                        <td>Alfian Hidayat</td>
                        <td>400</td>
                        <td>Lulus</td>
                        <td>Gel.1 </td>
                        <td>03 Mei 2015</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>TES001</td>
                        <td>Alfian Hidayat</td>
                        <td>400</td>
                        <td>Lulus</td>
                        <td>Gel.1 </td>
                        <td>03 Mei 2015</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>TES001</td>
                        <td>Alfian Hidayat</td>
                        <td>400</td>
                        <td>Lulus</td>
                        <td>Gel.1 </td>
                        <td>03 Mei 2015</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>TES001</td>
                        <td>Alfian Hidayat</td>
                        <td>400</td>
                        <td>Lulus</td>
                        <td>Gel.1 </td>
                        <td>03 Mei 2015</td>
                      </tr>
                    </tbody>
                  </table>   
            <!-- Tables -->
            </li>
            <ul class="pagination">
              <li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left "></i></a></li>
              <li class="active"><a href="#!">1</a></li>
              <li class="waves-effect"><a href="#!">2</a></li>
              <li class="waves-effect"><a href="#!">3</a></li>
              <li class="waves-effect"><a href="#!">4</a></li>
              <li class="waves-effect"><a href="#!">5</a></li>
              <li class="waves-effect"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
            </ul>
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