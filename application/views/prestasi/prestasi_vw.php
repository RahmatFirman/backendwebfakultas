<?php
echo'
	<button><a href="'.base_url().'prestasi/add">Tambah Data</a></button>
';
foreach ($prestasi as $a)
{
	echo '
		<table>
			<th>Nama</th>
			<th>Prestasi</th>
			<th></th>
			<tr>
				<td>'.$a['nama'].'</td>
				<td>'.$a['prestasi'].'</td>
				<td><button><a href="#"">Edit</a></button><button><a href="#">Delete</a></button></td>
			</tr>
		</table>
		
	';
	
}
?>
