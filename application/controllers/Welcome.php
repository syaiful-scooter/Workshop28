<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$kata['judul']="ini controller Welcome";
		$kata2=array('title' => "1. ini controller dari array",
	 								"halaman" => "2. List aray mahasiswa"
								);
		$this->load->view('list_mhs', $kata2);
	}
}
