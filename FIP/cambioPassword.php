<head>

    <link href="assets/css/styleAggiungiCampionato.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>Feder basket</title>
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
    <link href="assets/css/styleModificaPassword.css" rel="stylesheet">

    <!--parte di modifica password-->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>

<script>
    $(function() {
        $('input').floatlabel({
            labelEndTop: 0
        });
    });
</script>
<script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>



<body style="background-image: url('assets/img/basketBackground.jpg')">





    <div class="container" style="margin-top: 100px;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cambio Password <small>Inserisci una nuova password</small></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="cambioPasswordSheet.php" method="post">
                            <div class="form-group">
                                <input type="password" name="vecchiaPassword" id="vecchiaPassword" class="form-control input-sm" placeholder="Vecchia password">
                            </div>

                            <div class="form-group">
                                <input type="password" name="nuovaPassword" id="nuovaPassword" class="form-control input-sm" placeholder="Nuova password">
                            </div>


                            <input type="submit" value="Cambia" class="btn btn-info btn-block">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>