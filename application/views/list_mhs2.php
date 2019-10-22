<?php echo "$title"."<p>"; ?>
  <a href=<?php echo base_url().'mahasiswa/add_mhs'; ?>>TAMBAH ++</a>
<table border="1">
  <thead>
      <tr>
        <th>NAMA</th><th>ALAMAT</th><th>USIA</th><th>JURUSAN</th>
        <th>Execute</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($list_data as $key ) {?>
      <!-- // code... -->
      <tr>
        <td><?php echo $key['nama']; ?></td>
        <td><?php echo $key['alamat']; ?></td>
        <td><?php echo $key['usia']; ?></td>
        <td><?php echo $key['jurusan']; ?></td>
        <td>
          <a href="<?php echo base_url().'mahasiswa/delete/'.$key['id']; ?>" onclick="return confirm('delete data?');">Delete</a> || <a href="<?php echo base_url().'mahasiswa/update/'.$key['id']; ?>">Update</a>
        </td>
      </tr>
  <?php } ?>

  </tbody>
</table>

<?php //var_dump($isi_mhs); echo "<br>";
// var_dump($list_data);
 ?>
