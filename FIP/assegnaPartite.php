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
    <link href="assets/css/styleAssegnaPartite.css" rel="stylesheet">

    <!-----parte delle designazioni-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>

<body style="background-image: url('assets/img/basketBackground.jpg')">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="indexDesignatore.php"><img src="assets/img/logoFIP.jpg"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="assegnaPartite.php">Assegna partite</a></li>


                </ul>
            </nav><!-- .nav-menu -->



        </div>
    </header><!-- End Header -->





    <div class="container" style="margin-top: 80px;">
        <h1 class="well">Designazione partite</h1>
        <div class="col-lg-12 well">
            <div class="row">
                <form>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="numeroGara">Numero gara</label>
                            <select name="numeroGara" id="numeroGara" class="form-control" style="font-size: 14px;">
                                <option>numeroGara</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                        </div>

                        <div class="row">
                            <label for="arbitro1">&nbsp;&nbsp;&nbsp;&nbsp;Arbitro 1&nbsp;</label>
                            <select name="arbitro1" id="arbitro1" class="form-control" style="width: auto;">
                                <option>arbitro 1</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                            <label for="arbitro2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arbitro 2&nbsp;</label>
                            <select name="arbitro2" id="arbitro2" class="form-control" style="width: auto;">
                                <option>arbitro 2</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                        </div> <br>
                        <div class="row">
                            <label for="udc1">&nbsp;&nbsp;&nbsp;&nbsp;Udc 1&nbsp;</label>
                            <select name="udc1" id="udc1" class="form-control" style="width: auto;">
                                <option>udc 1</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                            <label for="udc2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Udc 2&nbsp;</label>
                            <select name="udc2" id="udc2" class="form-control" style="width: auto;">
                                <option>udc 2</option>
                            </select>
                            <span id="error_gender" class="text-danger"></span>
                        </div> <br>
                        <button type="button" class="btn btn-lg btn-info">Designa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>