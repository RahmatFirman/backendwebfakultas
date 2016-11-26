<?php
echo'
	<button><a href="'.base_url().'admin/prestasi/add">Tambah Data</a></button>
	<table>
			<th>Nama</th>
			<th>Prestasi</th>
			<th>Foto</th>
			<th>Aksi</th>

'
;
echo ($this->session->flashdata('sukses'));
foreach ($prestasi as $a)
{
	echo '
			<tr>
			'.base_url().'public/upload/prestasi/'.$a['foto'].'
				<td>'.$a['nama'].'</td>
				<td>'.$a['prestasi'].'</td>
				<td><img src="'.base_url().'public/upload/prestasi/'.$a['foto'].'" width="200px" height="200px"></td>
				<td><button><a href="'.base_url().'admin/prestasi/edit/'.$a['id'].'"">Edit</a></button><button><a href="'.base_url().'admin/prestasi/delete/'.$a['id'].'">Delete</a></button></td>
			</tr>
		
		
	';
	
}
echo '</table>';
			
 		//$file = $this->prestasi_model->get_single(
 		
?>
