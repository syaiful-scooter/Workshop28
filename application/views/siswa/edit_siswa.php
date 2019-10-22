<div class="card" style="">
    <div class="card-header">
        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>

      <form action="<?php echo base_url().'siswa/simpanEdit' ?>" method="POST">
			<label>NAMA </label>

			<input type="hidden" name="txt_id" class="form-control" value="<?php echo $getSiswaByID->id ?>"> 
			<input type="text" name="txt_nama" class="form-control" value="<?php echo $getSiswaByID->nama ?>"> 


			<label>JURUSAN </label>
			<select name="txt_jurusan" class="form-control">
				<option value="TI" <?php echo ($getSiswaByID->jurusan == 'TI') ?"selected" : "" ?> >Teknik Informatika</option>
				<option value="SI" <?php echo ($getSiswaByID->jurusan == 'SI') ?"selected" : "" ?> >Sistem Informasi </option>
				<option value="MI" <?php echo ($getSiswaByID->jurusan == 'MI') ?"selected" : "" ?> >Manajemen Informasi</option>
			</select>
		
			<label>JENIS KELAMIN</label> <p>
			<input type="radio" name="txt_jenis_kelamin" value="laki" <?php echo ($getSiswaByID->jenis_kelamin == 'laki') ?"checked" : "" ?> > LAKI
			<input type="radio" name="txt_jenis_kelamin" value="perempuan"  <?php echo ($getSiswaByID->jenis_kelamin == 'perempuan') ?"checked" : "" ?> > PEREMPUAN <p>
		
			<label>ALAMAT</label>
			<textarea name="txt_alamat" class="form-control"></textarea>

			<button class="btn btn-success"> update </button>
    </div>
    
</div>