<?php
echo'
'.validation_errors().'
<h3>Buat Berita</h3>

        '.form_open_multipart('admin/berita_c/tambah_tulisan').'

            <input name="judul" type="text" value="" size="100"><br>
            <textarea rows="14" cols="100" name="isi"></textarea><br>
            <input type="radio" name="aktif" value="1" checked>Post<br>
            <input type="radio" name="aktif" value="0">Jangan Post
            <input type="text" name="waktu" value="'.date('Y-m-d').'">
            <input type="file" name="foto">
            <input type="submit" name="submit">

        </form>';
?>