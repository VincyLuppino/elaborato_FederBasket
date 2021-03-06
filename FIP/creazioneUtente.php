<!doctype html>
<html lang="en">

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

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






    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Feder basket</title>
    <!-- Favicons -->
    <link href="assets/img/faviconFIP.jpg" rel="icon"> <!-- Logo in alto a sinistra -->
    <link href="assets/img/faviconFIP.jpg" rel="faviconFIP.jpg">

    <link href="assets/css/styleCreazioneUtente.css" rel="stylesheet">

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



    <main class="my-form">
        <div class="cotainer" style="margin-top: 100px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Inserisci i dati</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="creazioneUtenteSheet.php" method="post">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="surname" class="col-md-4 col-form-label text-md-right">Cognome</label>
                                    <div class="col-md-6">
                                        <input type="text" id="surname" class="form-control" name="surname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dataDiNascita" class="col-md-4 col-form-label text-md-right">Data di nascita</label>
                                    <div class="col-md-6">
                                        <input type="date" id="dataDiNascita" class="form-control" name="dataDiNascita">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="numeroTessera" class="col-md-4 col-form-label text-md-right">Numero tessera</label>
                                    <div class="col-md-6">
                                        <input type="text" id="numeroTessera" class="form-control" name="numeroTessera" placeholder="es. 070241">
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Tipo di componente CIA</label>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="form-control">
                                                    <input type="radio" id="arbitroRadio" name="component" value="Arbitro">&nbspArbitro
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-control">
                                                    <input type="radio" id="udcRadio" name="component" value="Udc">&nbspUdc
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-control">
                                                    <input type="radio" id="designatoreRadio" name="component" value="Designatore">&nbspDesign.
                                                </label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-control">
                                                    <input type="radio" id="societa" name="component" value="Societa">&nbspSociet??
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrati
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>