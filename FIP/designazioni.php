<head>

    <link href="assets/css/styleAggiungiCampionato.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <!-- Favicons -->
    <link href="assets/img/faviconFIP.jpg" rel="icon"> <!-- Logo in alto a sinistra -->
    <link href="assets/img/faviconFIP.jpg" rel="faviconFIP.jpg">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/styleDesignazioni.css" rel="stylesheet">

    <!-- per le tabbed pane-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <!--per la tabella-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body style="background-image: url('assets/img/basketBackground.jpg')">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="indexArbitroUdc.php"><img src="assets/img/logoFIP.jpg"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="drop-down"><a href="">Amministrazione</a>
                        <ul>
                            <li><a href="rimborso.php">Rimborsi</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">CIA</a>
                        <ul>
                            <li><a href="anagrafica.php">Anagrafica</a></li>
                            <li><a href="designazioni.php">Designazioni</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Utenza</a>
                        <ul>
                            <li><a href="modificaPassword.php">Modifica password</a></li>
                        </ul>
                    </li>


                </ul>
            </nav><!-- .nav-menu -->



        </div>
    </header><!-- End Header -->

    <div class="tab" style="margin-top: 100px; margin-left: 300px; ">
        <button class="tablinks" onclick="openCity(event, 'daAccettare')">Da accettare</button>
        <button class="tablinks" onclick="openCity(event, 'altre')">Altre</button>
    </div>



    <div id="daAccettare" class="tabcontent" style="margin-left: 300px; background-color: white; ">



        <div class="container">

            <table class="table table-striped custab" style="width: auto;">
                <thead>
                    <tr>
                        <th>N.gara</th>
                        <th>Squadra casa</th>
                        <th>Squadra trasferta</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>ASD wsgsdfds</td>
                    <td>FD dfgdfgfd</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Accetta</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Rifiuta</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>News</td>
                    <td>News Cate</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Accetta</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Rifiuta</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>News</td>
                    <td>News Cate</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Accetta</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Rifiuta</a></td>
                </tr>
            </table>

        </div>
    </div>
    <div id="altre" class="tabcontent" style="margin-left: 300px; background-color: white; ">
        altre
    </div>




</body>