@extends('layouts.main')

@section('content')

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
@stop

