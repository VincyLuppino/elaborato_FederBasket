<?php
session_start();
include("DBConnection.php");


$error = false;
echo $_POST["nTessera"];
echo $_POST["pw"];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nTessera']) && isset($_POST['pw'])) {

    $nTessera = trim($_POST['nTessera']);
    $pwNormal = $_POST['pw'];
    $pw = md5($_POST['pw']);



    if (!empty($nTessera) && !empty($pw)) {

        $result = $conn->query("select * from utenti where numeroTessera ='$nTessera' and psw='$pw'");
        //var_dump("select * from password where email='$email' and password_='$pw'");

        if ($result->num_rows == 1) {
            //redirect alla pagina index.php con log avvenuto
            $_SESSION["logged"] = true;
            $_SESSION["nTessera"] = $nTessera;

            if ($pwNormal == "fip.2021") {
                //$_SESSION["component"] = $nTessera[0];
                header("location: cambioPassword.php");
                exit();
            } else {
                if ($_SESSION["nTessera"][0] == "M") {
                    $_SESSION["component"] = $_SESSION["nTessera"][0];
                    header("location: indexMaster.php");
                    exit();
                } else if ($_SESSION["nTessera"][0] == "A" || $_SESSION["nTessera"][0] == "U") {
                    $_SESSION["component"] = $nTessera[0];
                    header("location: indexArbitroUdc.php");
                    exit();
                } else if ($_SESSION["nTessera"][0] == "D") {
                    $_SESSION["component"] = $_SESSION["nTessera"][0];
                    header("location: indexDesignatore.php");
                    exit();
                } else if ($_SESSION["nTessera"][0] == "S") {
                    $_SESSION["component"] = $_SESSION["nTessera"][0];
                    header("location: indexSocieta.php");
                    exit();
                }
            }
        } else {
            header("location: login.php?error=1");
            exit();
        }
    }
}
