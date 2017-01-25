<?php

namespace App;

class Daftar
{
	private $nama;
	private $tmp_lahir;
	private $tgl_lahir;
	private $gender;
	private $agama;
	private $alamat;
	private $email;
	private $telp;
  private $nisn;
	private $prodi;
	private $pass;

	public function __construct($nama, $tmp_lahir, $tgl_lahir, $gender, $agama,
		$alamat, $email, $telp, $nisn, $prodi, $pass)
	{
		$this->nama = $nama;
		$this->tmp_lahir = $tmp_lahir;
		$this->tgl_lahir = $tgl_lahir;
		$this->gender = $gender;
		$this->agama = $agama;
		$this->alamat = $alamat;
		$this->email = $email;
		$this->telp = $telp;
		$this->nisn = $nisn;
		$this->prodi = $prodi;
		$this->pass = $pass;
	}

	public function dataMahasiswa()
	{
		if (!empty($_SESSION['mahasiswa'])) {
			// $this->nisn = $_SESSION['mahasiswa'];
		} else {
			$_SESSION['mahasiswa'] = array();
		}

		$_SESSION['mahasiswa'][$this->nisn] = [
					'nama'		=>	$this->nama,
					'tmp_lahir'	=>	$this->tmp_lahir,
					'tgl_lahir'	=>	$this->tgl_lahir,
					'gender'	=>	$this->gender,
					'agama'   	=>	$this->agama,
					'alamat'	=>	$this->alamat,
					'email'	    =>	$this->email,
					'telp'    	=>	$this->telp,
					'nisn'	    =>	$this->nisn,
					'prodi'	    =>	$this->prodi,
					'pass'	    =>	$this->pass,

		];
	}

	public function setNisn(){
		return $this->nisn;
	}
}

 ?>
