@extends('layouts.main')

@section('content')
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
@stop