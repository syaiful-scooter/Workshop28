<form action="<?php echo base_url().'siswa/simpan' ?>" method="POST">
		<label>NAMA </label>
		<input type="text" name="txt_nama" > <p>


			<label>JURUSAN </label>
		<select name="txt_jurusan">
			<option value="TI">Teknik Informatika</option>
			<option value="SI">Sistem Informasi </option>
			<option value="MI">Manajemen Informasi</option>
		</select>
		<p>
		<label>JENIS KELAMIN</label>
		<input type="radio" name="txt_jenis_kelamin" value="laki"> LAKI
		<input type="radio" name="txt_jenis_kelamin" value="perempuan"> PEREMPUAN
		<p>
		<label>ALAMAT</label>
		<textarea name="txt_alamat"></textarea>

		<button> SIMPAN</button>
</form>