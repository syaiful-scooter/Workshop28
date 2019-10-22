<form action="<?php echo base_url().'mahasiswa/simpan'; ?>"  method="post">
<p>  <label for="">NAMA</label>
  <input type="text" name="nama" value="">
<p>
  <label for="">USIA</label>
  <input type="text" name="usia" value="">
<p>
  <label for="">ALAMAT</label>
  <textarea name="alamat"></textarea>
<p>
  <label name="">JURUSAN</label>
  <select name="jurusan">
    <option value="TI"> Teknik Informatika</option>
    <option value="SI"> Sistem Informasi</option>
    <option value="MI"> Manajemen Informatika</option>
    <option value="TK"> Teknik Komputer</option>
  </select>
<p>
<input type="Submit" value="SIMPAN DATA">
</form>
