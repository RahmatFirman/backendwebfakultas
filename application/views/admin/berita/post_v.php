<?php
echo'
<h3>Buat Berita</h3>

        <form method="post" action="'.base_url().'admin/berita_c/tambah_tulisan">

            <input name="judul" type="text" value="" size="100"><br>
            <textarea rows="14" cols="100" name="isi"></textarea><br>
            <input type="text" name="waktu" value="'.date('d-m-Y').'">
            <input type="radio" name="aktif" Value="1" >Aktif<br>

            <input type="radio" name="aktif" Value="0">Tidak Aktif<br>

            <input type="submit">

        </form>';
?>