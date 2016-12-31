<html>  
<head>  
    <title>Portal Artikel Berita</title>  
</head>  
<body>  
<h1>Portal Artikel Berita</h1>  
<hr>  
<?php   
if (!isset($satutulisan['isi'])){  
    echo "Halaman tidak ditemukan";  
}else{
	echo'
        <h3>'.$satutulisan['judul'].'</h3> 
        '.$satutulisan['penulis'].' 
        '.$satutulisan['waktu'].'
        <p>'.$satutulisan['isi'].'</p>  
        <img src="'.base_url().'public/upload/berita/'.$satutulisan['foto'].'" width="200" height="200">
    
        ';
}?>  
</body>  
</html>  