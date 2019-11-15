# Workshop28
Adalah sebuah framework php dari Codeigniter yang dibuat menjadi sebuah fake project / untuk belajar pribadi, nama Workshop28 di ambil dari kegiatan workshop tentang codeigniter yang saya ikuti pada tanggal 28 september 2019, berlokasi di kampus trilogi kalibata jakarta selatan.
mentor : hifdzon ( founder of http://cyber-learning.id/ )
versi Codeiniternya : 3.1.10

# Bagian yang sudah berhasil
- [Membuat tree menu dinamis (sumber dari Weblessons merupakan php native)](#dynamicTreeMenu)
- [Membuat kerangka template bootstrap (Ace Admin)](#menggunakanAceAdmin)
- [Membuat data dummy untuk project (menggunakan faker)](##Membuat data dummy untuk project)


##Membuat data dummy untuk project
```sh
Controller yang akan dipanggil :
$route['inputmhs'] = 'DummyController/inputDummyMHS';
```
<hr />

```sh
//running DummyController.php untuk mengisi data
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

```
data base faker adalah library untuk membuat data dummy, contoh Controller di atas (DummyController) mengisi data mahasiswa ke dalam tabel dengan perulangan sebanyak 100 kali.

## menggunakanAceAdmin

```sh
Nama Controller : AdminController.php
Nama Model      : M_mahasiswa.php
Nama View       : ace_layout/main_layout <--- datatables.php
Nama ROUTES     : $route['mhs'] = 'AdminController';
```

Menggunakan template bootstrap gratisan bernama Ace Admin untuk di pasang kedalam framework Codeigniter, lalu sekalian memberi komponen datatables yang memiliki fitur copy, pilih kolom, pencarian, pengurutan, pembuatan halaman, dll.



## dynamicTreeMenu

```sh
Nama Controller : BikinArray.php
Nama Model      : M_tree.php
Nama View       : - (tidak ada)
Nama ROUTES     : $route['tree4'] = 'BikinArray/encode_datanya1';
```

Tree menu ini dibuat dengan menterjemahkan tutorial video milik Weblessons yang merupakan php native,
dimana data di olah dalam bentuk array dengan 4 kali proses foreach, dan di keluarkan dalam bentuk object Json.
