<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="../img/logo.png">
    <title>Beranda | BPBD Kota Tebing Tinggi</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/modern-business.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/fontawesome.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<style>
html {
  scroll-behavior: smooth;
}
.shdw-bg{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px;
}

</style>
<!--  -->

<body>
    <header class="act-menu">
        <!-- main navbar -->
        <div class="row navbar-collapse bg-orange" style="margin-top:-4%;">

            <div class="col-1">
            </div>
            <div class=" col-7 navbar navbar-light expand-lg fice white-font-color ">
                <a class=" navbar-brand" href="index.php">

                    <img src="../img/logo.png" width="50px" height="50px" alt="">
                    <img src="../img/logo_pemkot.png" width="50px" height="50px" alt="">

                    <label> Badan Penanggulangan Bencana Daerah</label><br>
                    <label style="margin-left:22%;"> Pemerintahan Kota Tebing Tinggi</label>
                </a>

            </div>
            <div class="col-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">s</button>
                </form>

            </div>
        </div>
        <!-- navbar menu -->
        <div class=" row navbar navbar-expand-md navbar-light menu-color ">
            <div class="col-1">
            </div>
            <div class="col-11">
                <div class="collapse navbar-collapse justify-content-between" id="nav">

                    <ul class="navbar-nav ">

                        <li class="nav-item menu-active " style="">

                            <a class="nav-link text-dark font-weight-bold px-3 mnu" href="index.php">Beranda</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-dark font-weight-bold px-3 mnu" href="form_lapor.php">Lapor</a>

                        </li>

                        <li class="nav-item dropdown" data-toggle="dropdown">

                            <a class="nav-link text-dark font-weight-bold px-3 dropdown-toggle" href="#">Profil</a>

                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="#">Visi dan Misi</a>

                                <a class="dropdown-item" href="#">Tujuan dan Fungsi</a>

                                <a class="dropdown-item" href="#">Struktur Organisasi</a>

                            </div>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-dark font-weight-bold px-3 mnu" href="#">Berita</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-dark font-weight-bold px-3 mnu" href="galeri.php">Galeri</a>

                        </li>
                        <li class="nav-item">

                            <a class="nav-link text-dark font-weight-bold px-3 mnu" href="#kontak">Kontak</a>

                        </li>

                    </ul>


                </div>
            </div>


        </div>
    </header>
    <!-- slider -->
    <!-- <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style> -->
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/gambar_1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/gambar_2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/gambar_3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- </div> -->
    </div>    
    <!--  -->

    <br><br><br>
    <br><br><br>


    <!-- menampilkan data cuaca -->
    <?php

    $apiKey = "eb4233bc4cbd7300d07415058d8eb20e";
    $cityId = "1213500";
    $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);

    curl_close($ch);
    $data = json_decode($response);
    $currentTime = time();


    ?>

    <div class="report-container">
        <h2>Status Cuaca Kota <?php echo $data->name; ?></h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y", $currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Kecepatan: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
<!-- menamilkan info  -->
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card text-black ">
                    <div class="card-header bg-primary">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-black ">
                    <div class="card-header text-white bg-danger">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Ramalan Cuaca Kota  <?php echo $data->name; ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">Panel with panel-default class</div>
                        <div class="panel-body">Panel Content</div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <br><br><br>

<!-- menampilkan berita  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-10 text-center">
                    <h2><b>Berita</b> <hr></h2>
                    
                </div>
                <table class="table">
                    <tbody>
                  
                        <tr>
                            
                                <td>
                                <a href="detail_berita.php">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="box box-danger" class="link-decoration">
                                                <p><img width="200" height="150" class="img-responsive" src="../img/logo.png"></p>                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a> 
                                </td>
                                
                                <td>
                                <a href="detail_berita.php" class="link-decoration">
                                    <h5>Peristiwa longsor di kota tebing tinggi</h5> 
                                    <p>21 JULI 2020</p>
                                    <p style="opacity:0.8">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo arcu blandit, dignissim lacus a, 
                                    sagittis metus. Donec nisl leo, ultricies at quam eu, porta pharetra tortor. Aenean quis volutpat mauris, vitae 
                                    vulputate orci...
                                    
                                    </p>
                                </a> 
                                </td>
                            
                        </tr>
                    
                        <!-- berita kedua -->
                        <tr>
                            <td>
                            <div class="box">
                                <div class="box-body">
                                    <div class="box box-danger">
                                        <p><img width="200" height="150" class="img-responsive" src="../img/logo.png"></p>                                                </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="detail_berita.php" class="link-decoration">
                                    <h5>Penanganan Covid-19 di Tebing Tinggi</h4> 
                                    <p>21 JULI 2020</p>
                                    <p style="opacity:0.8">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo arcu blandit, dignissim lacus a, 
                                    sagittis metus. Donec nisl leo, ultricies at quam eu, porta pharetra tortor. Aenean quis volutpat mauris, vitae 
                                    vulputate orci...
                                    
                                    </p>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                
            </div>
            
            <div class="col-lg-4">
                <div class="card text-black ">
                    <div class="card-header text-white bg-primary">Kegiatan</div>
                        <div class="card-body">
                        <a href="#" class="link-decoration">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        
                                        <td>
                                        
                                            <img width="100" height="80" src="../img/logo.png">
                                        </td>
                                        <td> <p class="card-text">Some quick example 
                                        text to build on the card title ...</p>
                                        </td>
                                        
                                    </tr>                           
                                </tbody>
                            </table>  
                        </a>   
                        <a href="#" class="link-decoration">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                        <img width="100" height="80" src="../img/gambar_1.jpg">
                                        </td>
                                        <td> <p class="card-text">Some quick example 
                                        text to build on the card title ...</p></td>
                                    </tr>                           
                                </tbody>
                            </table>
                        </a>
                        </div>
                    <!-- <hr> -->

                </div>
            </div>
        </div>   
    </div>

    <!-- <div <div class="container"> -->
    <div class="row white-font-color" style=" background-color:#E94039;" id="kontak">
        <div class=" col-sm-6" style="padding: 30px 0px 30px 100px">
            <h4>Hubungi kami</h4>
            <br>
            <h5>BPBD Kota Tebing Tinggi</h5><br>
            <h6>Jl. Gunung Leuser , kel. Tj. Marulak, Kec. Rambutan, </h6>
            <h6>Kota Tebing Tinggi , Sumatera Utara 20614</h6>
            <h6>Sumatera Utara, Indonesia</h6>
        </div>
        <div class="col-sm-6" style="padding: 100px 0px 30px 40px">

            <h5>Telp&nbsp;&nbsp;: +62 621 2610001</h5>
            <h5>Fax &nbsp;&nbsp;: +62 621 2610001</h5>

        </div>
    </div>
    <!-- </div> -->

    <!-- <div class="container"> -->

    <div class="row color-foot" style="height: 40px; padding-top: 10px; text-align: center;">
        <div class="col-12 ">
            Copyright @2020
        </div>
    </div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap-transition.js"></script>
<script src="../js/bootstrap-alert.js"></script>
<script src="../js/bootstrap-modal.js"></script>
<script src="../js/bootstrap-dropdown.js"></script>
<script src="../js/bootstrap-scrollspy.js"></script>
<script src="../js/bootstrap-tab.js"></script>
<script src="../js/bootstrap-tooltip.js"></script>
<script src="../js/bootstrap-popover.js"></script>
<script src="../js/bootstrap-button.js"></script>
<script src="../js/bootstrap-collapse.js"></script>
<script src="../js/bootstrap-carousel.js"></script>
<script src=".. /js/bootstrap-typeahead.js"></script>

</html>