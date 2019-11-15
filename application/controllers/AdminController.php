<?php
/**
 * meniru contoh siswa dari hifzon, menggunakan ace admin template bootstrap, mengambil data mahasiswa
 * belum selesai karena tingkat kesulitan front end javascript ada pada paginations yang menyebabkan dobel tombol (run admin controller )
 * terpecahkannya dengan solusi menutup/memberi komentar pada script html nya yang menyebabkan ganda, lalu di beri contoh data lebih dari 10
 */
class AdminController extends CI_Controller
{ protected $layout = "ace_layout/main_layout";
  protected $module = "mahasiswa";


  function __construct()
  {   parent::__construct();
      $this->load->model('M_mahasiswa','mhs');
  }

  public function index()
  {
    $ambil_data_dr_model= $this->mhs->list_mhs();
		$list = array(
      'list_data' =>$ambil_data_dr_model,
      'title'     => "Data Mahasiswa",
      "content" => $this->module."/datatables"
    );

    $this->load->view($this->layout,$list);
  }

  public function UjiFaker()
  { include APPPATH.'/third_party/faker/autoload.php';
    $faker = Faker\Factory::create("id_ID");
    // code...looping untuk simpan sejumlah data
    // $pureName = $faker->firstName ." ". $faker->lastName;
    for ($i=0; $i < 1000; $i++)
    { $a=$i+1;
      echo "$a. ";
      echo $faker->firstNameMale ." ". $faker->lastNameMale ." --> ". $faker->streetAddress;
      echo "<br>";
    }

  }


}

 ?>
