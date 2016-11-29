<html>  
<head>  
    <title>Portal Artikel Berita</title>  
</head>  
<body>  
<h1><?php echo 'Portal Artikel Berita' ?></h1>  
<hr>  

<?php
if (!isset($tulisan)){  
  echo
"Tidak ada berita";
}else{  
   
    foreach ($tulisan as $row) {  
        ?>  

        <h3><a href="<?=base_url()?>news/view/<?=$row['id_tulisan']?>"> <?=$row['judul']?></a>
            </a> </h3>  
        <p><?=substr(strip_tags($row['isi']),0,200)."…"?></p>  
        <?php  
    }
    }?>  
 
</body>  
</html>

