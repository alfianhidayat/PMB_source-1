@extends('layouts.main')

@section('content')

        <div class="section">
          <div class="row">
            <ul class="collection with-header">
              <li class="collection-header"><h4>Download Formulir Pendaftaran</h4></li>
                <li class="collection-item">       
                    <div class="section">
                    <div class="col s6">
                    <br>
                    <br>
                      <img class="materialboxed" data-caption="Pendaftaran Online" width="400" src="img/reg.jpg">
                    </div>
                    <div class="col s5">
                      <div class="row">
                        <form class="col s12" action="db.blade.php" method="post">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="reg" type="text" class="validate" name="idreg">
                              <label for="reg">No. Registrasi</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="first_name" type="text" class="validate">
                              <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                              <input id="last_name" type="text" class="validate">
                              <label for="last_name">Last Name</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="asal_sekolah" type="text" class="validate">
                              <label for="asal_sekolah">Asal Sekolah</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="tempat" type="text" class="validate">
                              <label for="tempat">Tempat Lahir</label>
                            </div>
                            <div class="input-field col s6">
                              <input placeholder="Choose Date" type="date" class="datepicker">
                              <label for="date">Tanggal Lahir</label>
                              <button class="btn teal waves-effect waves-light" type="submit" name="action">Download
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </li>
            </ul>
          </div>
        </div>
@stop