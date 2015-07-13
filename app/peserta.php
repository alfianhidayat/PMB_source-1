<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta extends Model {

	//
	protected $table = 'tb_peserta';
	protected $fillabel = [
		'nama',
		'jenisKelamin',
		'alamat',
		'telepon',
		'tahun_lulus',
		'sekolah_asal'
	];

}
