<h3>Buat Berita</h3>

        <form method="post" action="<?=base_url()?>admins/berita_c/tambah_tulisan">

            <input name="judul" type="text" value="" size="100"><br>
            <textarea rows="14" cols="100" name="isi"></textarea><br>

            <input type="radio" name="aktif" Value="1" >Aktif<br>

            <input type="radio" name="aktif" Value="0">Tidak Aktif<br>

            <input type="submit">

        </form>