<div class="card" style="">
    <div class="card-header">
    	<a class="btn btn-success btn-sm"  data-toggle="modal" data-target="#create_siswa"> Tambah Siswa</a>

        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>

        <table class="table table-bordered" id="list_data">
			<thead>
				<tr>
					<th>NAMA </th>
					<th>JENIS KELAMIN</th>
					<th>JURUSAN</th>
					<th>ALAMAT</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($list_data as $key) { ?>
					<tr>
						<td><?php echo $key->nama ?></td>
						<td><?php echo $key->jenis_kelamin ?></td>
						<td><?php echo $key->jurusan ?></td>
						<td><?php echo $key->alamat ?></td>
						<td>
								<a class="btn btn-primary btn-danger btn-sm" href="<?php echo base_url().'siswa/delete/'.$key->id ?>" class="btn btn-delete" onClick = "return confirm('Hapus data ?')" >delete</a>
								<a class="btn btn-warning btn-sm"   href="<?php echo base_url().'siswa/editSiswa/'.$key->id ?>" > update</a>
						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
    </div>
    
</div>


<div id="create_siswa" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Tambah Siswa </h4>
      </div>
      <div class="modal-body">
       	<form action="<?php echo base_url().'siswa/simpan' ?>" method="POST">
			<label>NAMA </label>
			<input type="text" name="txt_nama" class="form-control"> 


			<label>JURUSAN </label>
			<select name="txt_jurusan" class="form-control">
				<option value="TI">Teknik Informatika</option>
				<option value="SI">Sistem Informasi </option>
				<option value="MI">Manajemen Informasi</option>
			</select>
		
			<label>JENIS KELAMIN</label> <p>
			<input type="radio" name="txt_jenis_kelamin" value="laki" > LAKI
			<input type="radio" name="txt_jenis_kelamin" value="perempuan"> PEREMPUAN
		
			<label>ALAMAT</label>
			<textarea name="txt_alamat" class="form-control"></textarea>

			

      </div>
      <div class="modal-footer">
      	<button class="btn btn-info btn-sm"> Simpan</button>
        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
	</form>
  </div>
</div>
