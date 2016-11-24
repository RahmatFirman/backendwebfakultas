<?php
echo'
	<button><a href="'.base_url().'admin/prestasi/add">Tambah Data</a></button>
	<table>
			<th>Nama</th>
			<th>Prestasi</th>
			<th>Aksi</th>
';
foreach ($prestasi as $a)
{
	echo '
			<tr>
				<td>'.$a['nama'].'</td>
				<td>'.$a['prestasi'].'</td>
				<td><button><a href="'.base_url().'admin/prestasi/edit/'.$a['id'].'"">Edit</a></button><button><a href="'.base_url().'admin/prestasi/delete/'.$a['id'].'">Delete</a></button></td>
			</tr>
		
		
	';
	
}
echo '</table>';
?>
