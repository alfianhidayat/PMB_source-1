@extends('layouts.main')

@section('content')
        <div class="section">
          <div class="row">
            <ul class="collection with-header">
              <li class="collection-header"><h4>Konfirmasi Pembayaran</h4></li>
                <li class="collection-item">       
                    <div class="section">
                    <br>
                    <div class="col s6">
                      <img class="materialboxed" data-caption="Pendaftaran Online" width="400" src="img/reg.jpg">
                    </div>
                    <div class="col s5">
                      <div class="row">
                        <form class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="reg" type="text" class="validate">
                              <label for="reg">No. Registrasi</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input placeholder="Choose Date" type="date" class="datepicker">
                              <label for="date">Tanggal Transfer</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="nominal" type="text" class="validate">
                              <label for="nominal">Nominal</label>
                            </div>
                          </div>
                          <form action="#">
                          <div class="row col s14">
                              <label for="nominal">Bukti Transfer</label>
                              <div class="file-field input-field col s12">
                              <input class="file-path validate" disabled="true" type="text"/>
                              <div class="btn">
                                <span>File</span>
                                <input type="file" />
                              </div>
                            </div>
                          </div>
                          </form>
                          <div class="row">
                            <div class="input-field col s6 offset-s6">
                              <button class="btn teal waves-effect waves-light" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </li>
            </ul>
          </div>
        </div>

@stop