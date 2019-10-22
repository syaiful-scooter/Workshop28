<form action="<?php echo base_url().'mahasiswa/simpan_update1/'.$get_mhs->id; ?>"  method="post">
<p>  <label for="">NAMA</label>
  <input type="text" name="nama" value="<?php echo $get_mhs->nama; ?>">
<p>
  <label for="">USIA</label>
  <input type="text" name="usia" value="<?php echo $get_mhs->usia; ?>">
<p>
  <label>ALAMAT</label>
  <textarea name="alamat"><?php echo $get_mhs->alamat;?></textarea>
<p>
  <label name="">JURUSAN</label>
  <select name="jurusan">
    <option value="TI"<?php echo ($get_mhs->jurusan == 'TI')?"selected":"" ?>> Teknik Informatika</option>
    <option value="SI"<?php echo ($get_mhs->jurusan == 'SI')?"selected":"" ?>> Sistem Informasi</option>
    <option value="MI"<?php echo ($get_mhs->jurusan == 'MI')?"selected":"" ?>> Manajemen Informatika</option>
    <option value="TK"<?php echo ($get_mhs->jurusan == 'TK')?"selected":"" ?>> Teknik Komputer</option>
  </select>
<p>
<input type="Submit" value="Update DATA">
</form>
