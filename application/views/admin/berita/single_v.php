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
}else{?>  
        <h3><?=$satutulisan['judul']?></h3> 
        <?=$satutulisan['waktu']?> 
        <p><?=$satutulisan['isi']?></p>  
        
}?>  
</body>  
</html>  