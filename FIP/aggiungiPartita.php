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
    <link href="assets/css/style.css" rel="stylesheet">



</head>

<body style="background-image: url('assets/img/basketBackground.jpg')">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="indexMaster.php"><img src="assets/img/logoFIP.jpg"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="drop-down"><a href="">Gestione campionati</a>
                        <ul>
                            <li><a href="aggiungiCampionato.php">Aggiungi campionato</a></li>
                            <li><a href="aggiungiPartita.php">Aggiungi partita</a></li>
                        </ul>
                    </li>
                    <li><a href="creazioneUtente.php">Creazione utenti</a></li>


                </ul>
            </nav><!-- .nav-menu -->



        </div>
    </header><!-- End Header -->



    <div class="row" style="margin-top: 100px; font-size:20px">
        <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Registrazione partita
                </div>
                <div class="panel-body">
                    <form name="myform">
                        <div class="form-group">
                            <label for="societaCasa">Società casa</label>
                            <select name="societaCasa" id="societaCasa" class="form-control" style="font-size: 14px;">
                                <option>Societa casa</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="societaTrasferta">Società trasferta</label>
                            <select name="societaTrasferta" id="societaTrasferta" class="form-control" style="font-size: 14px;">
                                <option>Societa trasferta</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="date" id="data" class="form-control" name='data' style="height: auto;">
                        </div>

                        <div class="form-group">
                            <label for="campionato">Campionato</label>
                            <select name="campionato" id="campionato" class="form-control" style="font-size: 14px;">
                                <option>Campionato</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                        </div>

                        <button id="submit" type="submit" value="submit" class="btn btn-primary center" style="font-size: 14px;">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

</body>