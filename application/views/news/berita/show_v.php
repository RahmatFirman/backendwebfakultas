<html>  
<head>  
    <title>Portal Artikel Berita</title>  
</head>  
<body>  
    <h1><?php echo 'Portal Artikel Berita' ?></h1>  
    <hr>  

    <?php
    $no = $this->uri->segment('3') + 1;
    foreach ($tulisan as $a) 
    {
       echo $no++ .' '. $a->judul . '<br>'; 
    }
    echo $this->pagination->create_links();
    ?>  

</body>  
</html>

