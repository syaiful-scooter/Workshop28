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


public function ContohFaker()
	{
		include APPPATH.'/third_party/faker/autoload.php';

		$faker = Faker\Factory::create();
		$faker->seed(2);

		echo "<strong>Title: </strong>".$faker->title;
		echo "<br>";

		echo "<strong>First Name: </strong>".$faker->firstName;
		echo "<br>";

		echo "<strong>Last Name: </strong>".$faker->lastName;
		echo "<br>";

		echo "<strong>Street Address: </strong>".$faker->streetAddress;
		echo "<br>";

		echo "<strong>Postcode: </strong>".$faker->postcode;
		echo "<br>";

		echo "<strong>City: </strong>".$faker->city;
		echo "<br>";

		echo "<strong>Country: </strong>".$faker->country;
		echo "<br>";


		//$this->load->view('welcome_message');
	}

}
