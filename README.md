# Workshop28
Adalah sebuah framework php dari Codeigniter yang dibuat menjadi sebuah fake project / untuk belajar pribadi
versi Codeiniternya : 3.1.10

# Bagian yang sudah berhasil
- [Membuat tree menu dinamis (sumber dari Weblessons merupakan php native)](#dynamicTreeMenu)
- [Membuat kerangka template bootstrap (Ace Admin)](#menggunakanAceAdmin)


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
