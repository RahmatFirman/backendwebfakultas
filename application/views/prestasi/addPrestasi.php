<?php
echo'
	'.validation_errors().'
	<h3>Tambah data</h3>
	'.form_open('prestasi/add').'
	<input type="text" name="nama" placeholder="Nama">
	<input type="text" name="prestasi" placeholder="Prestasi">
	<input type="text" name="tahun" placeholder="Tahun">
	<input type="submit" name="submit" value="Tambah ">
';
?>