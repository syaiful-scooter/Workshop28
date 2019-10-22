<?php  

class Siswa extends CI_Controller{

	protected $layout = "master_layout/layout";
	protected $module = "siswa";

	function __construct(){
		parent::__construct();

		$this->load->model('Model_siswa');
	}
	public function index()
	{
		$getAllSiswa = $this->Model_siswa->getAllSiswa();
		$data  = array(
			"title" => "List Siswa",
			"list_data" => $getAllSiswa,
			"content" => $this->module."/list_siswa"
		);

		$this->load->view($this->layout, $data);
	}

	function create()
	{
		$data  = array(
			"content" => $this->module."/create_siswa"
		);

		$this->load->view($this->layout, $data);
	}

	public function simpan()
	{
		$nama = $this->input->post('txt_nama');
		$jenis_kelamin = $this->input->post('txt_jenis_kelamin');
		$jurusan = $this->input->post('txt_jurusan');
		$alamat = $this->input->post('txt_alamat');
		$data  = array(
			"nama" => $nama,
			"jenis_kelamin" => $jenis_kelamin,
			"jurusan" => $jurusan,
			"alamat" => $alamat
		);

		$getAllSiswa = $this->Model_siswa->simpanData($data);
		redirect(base_url().'siswa');
	}

	public function editSiswa($id)
	{
		$getSiswaByID = $this->Model_siswa->getSiswaByID($id);
		$data  = array(
			"getSiswaByID" => $getSiswaByID,
			"content" => $this->module."/edit_siswa"
		);


		$this->load->view($this->layout, $data);
		// fungsi untuk mengambil 1 data yang akan diedit lalu di tampilkan dalam form 
	}

	public function simpanEdit()
	{
		$id = $this->input->post('txt_id');
		$nama = $this->input->post('txt_nama');
		$jenis_kelamin = $this->input->post('txt_jenis_kelamin');
		$jurusan = $this->input->post('txt_jurusan');
		$alamat = $this->input->post('txt_alamat');

		$data  = array(
			"nama" => $nama,
			"jenis_kelamin" => $jenis_kelamin,
			"jurusan" => $jurusan,
			"alamat" => $alamat
		);

		$id = array(
			"id" => $id
		);
	
		$getSiswaByID = $this->Model_siswa->updateData($data, $id);
		redirect(base_url().'siswa');

		//  fungsi untuk memproses menyimpan data yang diedit
			
	}


	public function delete($id)
	{
		$getSiswaByID = $this->Model_siswa->deleteSiswaByID($id);
		redirect(base_url().'siswa');
		
	}


}

?>