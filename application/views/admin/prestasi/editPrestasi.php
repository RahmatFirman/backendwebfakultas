s<?php echo validation_errors();?>
<?php echo form_open('admin/prestasi/edit/'.$prestasi_id['id']);?>
<?php
	
echo'	
	<input type="text" name="nama" value="'.$prestasi_id['nama'].'">
	<input type="text" name="prestasi" value="'.$prestasi_id['prestasi'].'">
	<input type="text" name="tahun" value="'.$prestasi_id['tahun'].'">
	<input type="file" name="foto" value="'.$prestasi_id['foto'].'">
	<input type="submit" name="submit" value="Tambah ">
';
echo form_close();
?>


