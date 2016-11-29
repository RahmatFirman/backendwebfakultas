<?php
echo'
	'.validation_errors().'
	<h3>Tambah data</h3>
	'.form_open_multipart('admin/prestasi/add').'
	<input type="text" name="nama" placeholder="Nama">
	<input type="text" name="prestasi" placeholder="Prestasi">
	<input type="text" name="tahun" placeholder="Tahun">
	<input type="file" name="foto">
	<input type="submit" name="submit" value="Tambah ">
';
echo '</form>';

?>