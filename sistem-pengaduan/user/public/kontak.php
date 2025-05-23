<!-- # @Author: Wahid Ari <wahidari>
# @Date:   8 January, 5:05
# @Copyright: (c) wahidari 2017 -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Kontak | Dispendukcapil Bangkalan</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Main Styles CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

        <div class="shadow">
            <nav class="navbar navbar-fixed navbar-inverse form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home">
                            <img alt="Brand" src="images/bangkalan.png">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="home">HOME</a></li>
                            <li><a href="lapor">LAPOR</a></li>
                            <li><a href="lihat">LIHAT PENGADUAN</a></li>
                            <li><a href="cara">CARA</a></li>
                            <li class="dropdown">
                                <a href="profildinas" class="dropdown-toggle" data-toggle="dropdown">PROFIL DINAS <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="profildinas">Profil Dinas</a></li>
                                    <li class="divider"></li>
                                    <li><a href="profildinas">Visi dan Misi</a></li>
                                    <li class="divider"></li>
                                    <li><a href="profildinas">Struktur Organisasi</a></li>
                                    <li class="divider"></li>
                                    <li><a href="profildinas">Motto / Maklumat Pelayanan</a></li>
                                </ul>
                            </li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="bantuan">BANTUAN</a></li>
                            <li class="active"><a href="">KONTAK</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!-- content -->
            <div class="main-content">
                <h3>Kontak</h3>
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <div id="map" class="card-shadow-2" style="width:100%;height:300px"></div>
                            <script>
                            function myMap() {
                                  var mapCanvas = document.getElementById("map");
                                  var myCenter = new google.maps.LatLng(-7.0502444,112.7332750);
                                  var mapOptions = {center: myCenter, zoom: 18};
                                  var map = new google.maps.Map(mapCanvas,mapOptions);
                                  var marker = new google.maps.Marker({
                                    position: myCenter,
                                    animation: google.maps.Animation.BOUNCE
                                  });
                                  marker.setMap(map);
                            }
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXyK9sf3rI0EKVupuALaOAzq1NKlUES98&callback=myMap"></script>
                    </div>

                    <div class="col-md-6"></div>
                </div>
                <hr>
                <h4>Kantor</h4>
                <p>Jalan Soekarno-Hatta No 50</p>
                <p>Bangkalan, Jawa Timur</p>
                <hr>
                <h4>Contact Info:</h4>
                <p>031 3095331</p>
                <p>dispendukcapil@bangkalankab.go.id</p>
                <p>dispendukcapil.bangkalan@gmail.com</p>
                <p>&nbsp;</p>

                <!-- link to top -->
                <a id="top" href="#" onclick="topFunction()">
                    <i class="fa fa-arrow-circle-up"></i>
                </a>
                <script>
                    // When the user scrolls down 100px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};
                    function scrollFunction() {
                        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                            document.getElementById("top").style.display = "block";
                        } else {
                            document.getElementById("top").style.display = "none";
                        }
                    }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
                <!-- link to top -->


            <!-- end main-content -->
            </div>

            <hr>
            
<?php include("footer.php"); ?>
