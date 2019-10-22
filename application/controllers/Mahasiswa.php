<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}


	public function index()
	{
    echo "controller mahasiswa";

		/*/$kata['judul']="ini controller Welcome";
		$kata2=array('title' => "1. ini controller dari array",
	 								"halaman" => "2. List aray mahasiswa"
								);
		$this->load->view('list_mhs', $kata2);*/
	}

  public function data_mhs()
  {
    // code...echo "ini data mahasiswa";

    // cara pertama
    // $daftar['isi_mhs']=$this->db->get('mahasiswa_tbl')->result_array();
    // $this->load->view('list_mhs',$daftar);

    // cara kedua
    // $list = array(
    //   'list_data' =>$this->db->get('mahasiswa_tbl')->result_array(),
    //   'title'=> "List Mahasiswa ku");
		// $this->load->view('list_mhs2',$list);

		// cara ke-3, ambil dari model (M_mahasiswa)
		$ambil_data_dr_model= $this->M_mahasiswa->list_mhs();
		$list = array(
      'list_data' =>$ambil_data_dr_model,
      'title'=> "List Mahasiswa ku");
		$this->load->view('list_mhs2',$list);

  }public function add_mhs()
  {
    // code...
		$this->load->view('add_mhs');
  }
  public function simpan()
  {
    // code... langsung di controller
		//   $data = array(
	  //     'nama' => "Jaja",
	  //   'alamat'=> "Cibarusah",
	  //   'usia'=>"30",
	  //   'jurusan'=>"TI"
	  // );
	  // $this->db->insert('mahasiswa_tbl', $data);

		// code... dari model, data hardcode
		//   $data = array(
		//   'usia'=>"22",
	  //     'nama' => "Wulan",
	  //   'alamat'=> "Cibarusah",
	  //   'jurusan'=>"SI"
	  // );
	  // $eksekusi = $this->db->insert('mahasiswa_tbl', $data);
		// if ($eksekusi) {
		// 	// code...
		// 	echo "input sukses";
		// }else {
		// 	// code...
		// 	echo "data gagal dimasukkan";
		// }

		// code... dari model, data dari format
		$nama_txt = $this->input->post('nama');
		$alamat_txt = $this->input->post('alamat');

		$usia_txt = $this->input->post('usia');
		$jurusan_txt = $this->input->post('jurusan');

		$data = array(
		  'nama'=>$nama_txt,
	    'alamat' =>$alamat_txt,
	    'usia'=> $usia_txt,
	    'jurusan'=>$jurusan_txt
	  );

	  // $exec = $this->db->insert('mahasiswa_tbl', $data);
		$exec = $this->M_mahasiswa->simpan('mahasiswa_tbl', $data);
		if ($exec) {
			// code...
			// echo "input sukses";
			redirect(base_url('mahasiswa/data_mhs'));
		}else {
			// code...
			echo "data gagal dimasukkan";
		}


  }
  public function update($id)
  {
    // code... cari 1 data yg akan di update berdasarkan id
		$parameterIdentitas=array(
			"id"=>$id
		);

		$get['get_mhs']=$this->M_mahasiswa->getMhsById('mahasiswa_tbl',$parameterIdentitas);

		$this->load->view('update_form_mhs', $get);

		// $nama_txt = $this->input->post('nama');
		// $alamat_txt = $this->input->post('alamat');
		// $usia_txt = $this->input->post('usia');
		// $jurusan_txt = $this->input->post('jurusan');
		//
		// $data = array(
		// 	'nama'=>$nama_txt,
		// 	'alamat' =>$alamat_txt,
		// 	'usia'=> $usia_txt,
		// 	'jurusan'=>$jurusan_txt
		// );

  }
  function simpan_update1($id) {
    // code...
		$parameterIdentitas=array(
			"id"=>$id
		);

		$nama_txt = $this->input->post('nama');
		$alamat_txt = $this->input->post('alamat');
		$usia_txt = $this->input->post('usia');
		$jurusan_txt = $this->input->post('jurusan');

		$data = array(
			'nama'=>$nama_txt,
			'alamat' =>$alamat_txt,
			'usia'=> $usia_txt,
			'jurusan'=>$jurusan_txt
		);

		$exec = $this->M_mahasiswa->simpan_update('mahasiswa_tbl', $data, $parameterIdentitas);
		if ($exec) {
			// code...
			// echo "update sukses";
			redirect(base_url('mahasiswa/data_mhs'));
		}else {
			// code...
			echo "data gagal di update";
		}

  }

	public function delete($id)
	{
		// code... delete from mahasiswa_tbl where id =$id
			$parameterIdentitas = array('id' => $id );
			$exec=$this->M_mahasiswa->delete('mahasiswa_tbl',$parameterIdentitas);

			if ($exec) {
				// code...
				// echo "delete data id $id sukses";
				redirect(base_url('mahasiswa/data_mhs'));
			}else {
				// code...
				echo "gagal delete";
			}

	}

}
