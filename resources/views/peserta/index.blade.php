@extends('layouts.main')

@section('content')

	<div class="section">
          <div class="row">
            <ul class="collection with-header">
              <li class="collection-header"><h4>Data Peserta</h4></li>
                <li class="collection-item">       
                  	 <table class="table table-striped table-bordered table-hover">
					     <thead>
					     <tr class="bg-info">
					         <th>Nama</th>
					         <th>Jenis Kelamin</th>
					         <th>Alamat</th>
					         <th>Telepon</th>
					         <th>Tahun Lulus</th>
					         <th>Asal Sekolah</th>
					     </tr>
					     </thead>
					     <tbody>
					     @foreach ($peserta as $psrt)
					         <tr>
					             <td>{{ $psrt->nama }}</td>
					             <td>{{ $psrt->jenisKelamin }}</td>
					             <td>{{ $psrt->alamat }}</td>
					             <td>{{ $psrt->telepon }}</td>
					             <td>{{ $psrt->tahun_lulus }}</td>
					             <td>{{ $psrt->sekolah_asal }}</td>
					         </tr>
					     @endforeach

					     </tbody>

					 </table>
                </li>
            </ul>
          </div>
        </div>

@stop