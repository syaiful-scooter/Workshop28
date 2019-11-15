<?php

/**
 * controller untuk mengisi data dummy
 */
class dummyController extends CI_Controller
{
  public $table = 'mahasiswa_tbl';



  function __construct()
  {
    // code...
    parent::__construct();
    $this->load->model('M_generic_faker','m');
  }


  public function inputDummyMHS()
  {
    include APPPATH.'/third_party/faker/autoload.php';
    $faker = Faker\Factory::create("id_ID");
    // code...

    for ($i=0; $i < 100; $i++) {
      // code...
      $nama = $faker->firstNameMale ." ". $faker->lastNameMale;
      $alamat = $faker->streetAddress;
      $jurusan = $faker->randomElement($array = array ('TI','TK','SI','MI'));
      $usia = $faker->numberBetween($min = 19, $max = 30);

      $data  = array(
  			"nama" => $nama,
  			"alamat" => $alamat,
  			"jurusan" => $jurusan,
  			"usia" => (int)$usia
  		);

  		$save = $this->m->simpanData($this->table, $data);

    }

  }
}

 ?>
