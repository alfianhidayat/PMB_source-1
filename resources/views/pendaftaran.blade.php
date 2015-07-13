@extends('layouts.main')

@section('content')

        <div class="section">
          <div class="row">
            <ul class="collection with-header">
              <li class="collection-header"><h4>Formulir Pendaftaran Online</h4></li>
                <li class="collection-item">       
                  <form class="col m12 s12" method="post" url="peserta">
                      <div class="row">
                      <div class="input-field col s6">
                        <input type="text" name="nama" required>
                        <label>Nama</label>
                      </div>
                      </div>
                      <div class="row">
                      <div class="input-field col s3">
                        <input type="text" name="tempatlahir" required>
                        <label>Tempat Lahir</label>
                      </div>
                      <div class="input-field col s3">
                        <input type="text" name="tanggallahir" placeholder="dd/mm/yyyy" required>
                        <label>Tanggal Lahir</label>
                      </div>
                    <div class="row">
                      <div class="input-field col s3">
                      <label style="top:-20px;">Jenis Kelamin</label>
                        <select class="browser-default" name="jk" required>
                          <option value="">- Pilih -</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <textarea class="materialize-textarea" name="alamat" required></textarea>
                        <label>Alamat</label>
                      </div>
                      <div class="input-field col s3">
                        <input type="text" name="telp" required>
                        <label>Telepon</label>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input type="text" name="aslsekolah" required>
                        <label>Asal Sekolah</label>
                      </div>
                      <div class="input-field col s3">
                        <input type="text" name="thnlulus" required>
                        <label>Tahun Lulus</label>
                      </div>
                    </div>
                   <div class="row">
                      <div class="input-field col s3">
                      <label style="top:-20px">Ukuran Jas</label>
                        <select class="browser-default" name="jk" required>
                          <option value="">- Pilih -</option>
                          <option value="1">S</option>
                          <option value="2">M</option>
                          <option value="3">L</option>
                          <option value="4">XL</option>
                        </select>
                      </div>
                      <div class="input-field col s3">
                      <label style="top:-20px">Agama</label>
                        <select class="browser-default" name="jk" required>
                          <option value="">- Pilih -</option>
                          <option value="1">Islam</option>
                          <option value="2">Kristen</option>
                          <option value="3">Hindu</option>
                          <option value="4">Buddha</option>
                          <option value="5">Protestan</option>
                        </select>
                      </div> 
                      <div class="input-field col s6">
                        <label style="top:-20px">Pilihan Program Studi</label>
                        <select class="browser-default" name="jk" required>
                          <option value="">- Pilih -</option>
                          <option value="1">Teknologi Hasil Pangan</option>
                          <option value="2">Budidaya Tanaman</option>
                          <option value="3">Budidaya Ternak</option>
                          <option value="4">Budidaya Perikanan</option>
                          <option value="5">Multimedia</option>
                        </select>
                      </div>
                  </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input type="submit" class="btn orange right" name = "regis" value="registrasi">
                      </div>
                    </div>
                  </form>
                </li>
            </ul>
          </div>
        </div>

@stop