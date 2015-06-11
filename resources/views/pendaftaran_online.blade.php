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
          $(document).ready(function(){
            $('.materialboxed').materialbox();
          });
          $(document).ready(function() {
            $('select').material_select();
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
          <li class="active"><a href="pendaftaran">Pendaftaran Online</a></li>
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
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Berita<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
              <li class="active"><a class="dropdown-button" href="#!" data-activates="dropdown2">Pendaftaran<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
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
              <li class="collection-header"><h4>Formulir Pendaftaran Online</h4></li>
                <li class="collection-item">       
                  <div class="col s12">
                    <ul class="tabs">
                      <li class="tab col s3"><a class="active" href="#jalur_prodi">Jalur Tes dan Program Studi</a></li>
                      <li class="tab col s3"><a class="disable" href="#test2">Biodata Pribadi</a></li>
                      <li class="tab col s3"><a href="#test3">Data Keluarga</a></li>
                    </ul>
                  </div>
                  <div id="jalur_prodi" class="col s12">
                    <div class="section">
                    <div class="col s5">
                    <br>
                    <br>
                      <img class="materialboxed" data-caption="Pendaftaran Online" width="300" src="img/reg.jpg">
                    </div>
                    <div class="col s6">
                      <br>
                      {!! Form::open(array('url' => 'cobawelcome')) !!}
                      <div class="form-group">
                        {!! Form::label('Jalur Tes')!!}
                        {!! Form::Select('jalur', ['Option 1', 'Option 2', 'Option 3']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Program Studi')!!}
                        {!! Form::Select('prodi', ['Option 1', 'Option 2', 'Option 3']) !!}
                      </div>
       <!--                 <h6>Jalur Tes</h6>
                        <select class="browser-default" name="jalur">
                          <option value="" disabled selected>Choose your option</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                        <br>
                        <h6>Program Studi</h6>
                        <select class="browser-default" name="prodi">
                          <option value="" disabled selected>Choose your option</option>
                          @foreach($posts as $post)
                            <option value="0">{{$post->nama_prodi}}</option>
                          @endforeach
                        </select>
                      -->
                        <div class="row">
                          <div class="input-field col s6 offset-s6">
                            <button class="btn teal waves-effect waves-light" type="submit" href="#test2">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                      </div>
                      {!! Form::close() !!}
                    </div>
                    </div>
                  </div>
                  <div id="test2" class="col s12">
                    <div class="section">
                    <div class="col s12">
                    <br>
                    <br>
                      <img class="materialboxed" data-caption="Pendaftaran Online" width="300" src="img/reg.jpg">
                    </div>
                    </div>
                  </div>
                  <div id="test3" class="col s12">
                    <div class="section">
                    <div class="col s12">
                    <br>
                    <br>
                      <img class="materialboxed" data-caption="Pendaftaran Online" width="300" src="img/reg.jpg">
                    </div>
                    </div>
                  </div>
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