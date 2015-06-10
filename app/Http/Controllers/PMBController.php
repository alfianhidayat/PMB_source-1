<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PMBController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function viewInformasi(){
		$array = array();
		$array ['posts'] = \App\Models\wkt::all();
		return view('informasi',$array);
	}

	public function viewBeritaHasil(){
		return view('berita_hasil');
	}

	public function viewBeritaUjian(){
		return view('berita_ujian');
	}

	public function viewFormulir(){
		return view('formulir_pendaftaran');
	}

	public function viewKonfirmasi(){
		return view('konfirmasi_pembayaran');
	}

	public function viewPendafOnline(){
		$array = array();
		$array ['posts'] = \App\Models\prodi::all();
		return view('pendaftaran_online',$array);
	}

	public function viewBeritaPenting(){
		return view('berita_penting');
	}

	public function viewProdi(){
		return view('prodi');
	}

	public function coba(){
		return view('welcometest');
	}

}
