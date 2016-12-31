<?php
echo '
<div class="container">
  <div id="mycarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mycarousel" data-slide-to="1" ></li>

    </ol>
    <div class="carousel-inner">
      <!-- isi slider disini -->
      <div class="item active">
        <img src="img/kampus2.jpg">
      </div>
      <div class="item">
        <img src="img/kampus3.jpg">
      </div>

    </div>
    <a class="left carousel-control " href="#mycarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control " href="#mycarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div> 
</div>

<div class="container">

  <div id="kiri"> <!--area sebelah kiri yang biasa untuk berita-->
  ';
  foreach ($news as $a)
  {
    echo'
    <div class="row">
      <div class="col-md-6">
        <h2>'.$a['judul'].'</h2>
        <p>Berita mungkin dan blallalalalalalalalalala </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>

    </div>
    ';

  }
    echo'
  </div>

  <div id="kanan"> <!--Area kanan biasa untuk pengumuman atau jadwal-->
    <h3>Jadwal?</h3>
    <div class="list-group">
      <a href="#" class="list-group-item">item</a>
      <a href="#" class="list-group-item">item</a>
      <a href="#" class="list-group-item">item</a>
      <a href="#" class="list-group-item">item</a>

    </div>
  </div>

</div>
';
