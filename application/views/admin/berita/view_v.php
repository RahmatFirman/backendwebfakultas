
<h3><a href="<?=base_url()?>admin/berita_c/buat_tulisan/">  
                <span style="color:gray">Buat Berita</span>  
            </a></h3>
<?php   



if (!isset($tulisan)){  
  echo
"Tidak ada berita";
}else{  
    if (isset($success)) {
    if ($success == 1) {
        echo "Data berhasil ditambahkan!";
    }
}   
    foreach ($tulisan as $row) {  
        echo'  

        <h3><a href="<?=base_url()?>admin/berita_c/tulisan_page/'.$row['id_tulisan'].'">'.$row['judul'].'</a>
        <a href="'.base_url().'admin/berita_c/edit_tulisan/'.$row['id_tulisan'].'">  
                <span style="color:gray">Edit</span> </a>
                <a href="'.base_url().'admin/berita_c/hapus_tulisan/'.$row['id_tulisan'].'">  
                <span style="color:gray">Delete</span>  
            </a> </h3>  
        <p>'.substr(strip_tags($row['isi']),0,200).'"…"</p>  
';
        
    }  
}?>  
</body>  
</html>

