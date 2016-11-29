<?php
echo '<marquee>Halaman Prestasi</marquee>';
foreach ($result as $a) 
{
	echo $a['nama'] . '<br>';
	echo $a['prestasi'].	'<br>';
	echo '
	<img src="'.base_url().'public/upload/prestasi/'.$a['foto'].'" width="200px" height="200px">

	';

}

?>