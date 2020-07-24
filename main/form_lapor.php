<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Lapor Bencana | BPBD Kota Tebing Tinggi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="../css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/modern-business.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/fontawesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="main.js"></script>

</head>
<style>
html {
  scroll-behavior: smooth;
}
</style>
<body>
    <header>
        <!-- main navbar -->
        <div class="row navbar-collapse bg-orange " style="margin-top:-4%; ">

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

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>

            </div>
        </div>

        <!-- navbar menu -->
        <!-- navbar menu -->
        <div class=" row navbar navbar-expand-md navbar-light menu-color">
            <div class="col-1">
            </div>
            <div class="col-11">
                <div class="collapse navbar-collapse justify-content-between" id="nav">

                    <ul class="navbar-nav">

                        <li class="nav-item " >

                            <a class="nav-link text-dark font-weight-bold px-3 mnu" href="index.php">Beranda</a>

                        </li>

                        <li class="nav-item menu-active">

                            <a class="nav-link text-dark font-weight-bold px-3 mnu" href="form_lapor.php">Lapor</a>

                        </li>

                        <li class="nav-item dropdown" data-toggle="dropdown">

                            <a class="nav-link text-dark font-weight-bold px-3 dropdown-toggle mnu" href="#">Profil</a>

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
    <br>
    <section class="container ">
        <!-- <div class="row"> -->
        <div class="col-12 " aria-label="breadcrumb">

            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Form Lapor</li>
            </ol>
        </div>

    </section>

    <div class="container text-center ">
        <!-- <center> -->
        <h3 style=" float: center;">Form Lapor Bencana</h3>
        <h6 class="text-danger">*Sampaikan Laporan Bencana Anda</h6>
        
        <!-- </center> -->
        
    </div>
    
    <!-- form lapor bencana -->
    
    <main style="">
        <div class="container" style=""> <hr>
            <div class="row">
                
                <div class="col-sm-1"></div>
                <div class="col-sm-10" style="background-color:#ECECEC;"> 
                    <form style=" padding-top:5%;background-color:#ECECEC;">
                        <div class="form-group ">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Bencana" required>
                        </div><br>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keluhan" required>
                        </div><br>
                        <div class="form-group ">
                            <!-- <label for="exampleInputEmail1" class="txt-dark">Nama Bencana</label> -->
                            <select type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori Bencana" required>
                                <option selected>Kategori bencanca</option>
                                <option value="volvo">Gempa</option>
                                <option value="saab">Tsunami</option>
                                <option value="fiat">Kebakaran</option>
                                <!-- <option value="audi">Audi</option> -->
                            </select>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div><br>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lokasi Kejadian" required>
                        </div><br>
                        <div class="form-group">
                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Waktu Kejadian" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <img src="" id="profile-img-tag" width="200px" /><br><br>

                            <input type="file" class="form-control" id="imageUpload" required>
                        </div><br>
                        <script type="text/javascript">
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        $('#profile-img-tag').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            $("#imageUpload").change(function() {
                                readURL(this);
                            });
                        </script>




                        <div class="form-group ">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Anda" required>
                        </div><br>
                        <div class="form-group ">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Telp / HP" required>
                        </div><br>
                        <div class="form-group ">

                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK (sesuai KTP)" required>
                            <p class="text-danger">*Pastikan NIK anda sesuai KTP</p>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg float-right">Kirim</button>
                    </form>
                </div>
                <br>
                <div class="col-sm-1"></div>
            </div>

        </div>

    </main>
    <br><br>                        



    <!-- <div <div class="container"> -->
    <div class="row white-font-color" style=" background-color:#E94039; "  id="kontak">
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