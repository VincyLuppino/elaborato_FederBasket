<?php
session_start();
include("DBConnection.php");


$error = false;
echo $_POST["nTessera"];
echo $_POST["pw"];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nTessera']) && isset($_POST['pw'])) {

    $nTessera = trim($_POST['nTessera']);
    $pw = md5($_POST['pw']);



    if (!empty($nTessera) && !empty($pw)) {

        $result = $conn->query("select * from utenti where numeroTessera ='$nTessera' and psw='$pw'");
        //var_dump("select * from password where email='$email' and password_='$pw'");

        if ($result->num_rows == 1) {
            //redirect alla pagina index.php con log avvenuto
            $_SESSION["logged"] = true;
            $_SESSION["nTessera"] = $nTessera;

            if ($nTessera[0] == "M") {
                header("location: indexMaster.php");
                exit();
            } else if ($nTessera[0] == "A" || $nTessera[0] == "U") {
                header("location: indexArbitroUdc.php");
                exit();
            } else if ($nTessera[0] == "D") {
                header("location: indexDesignatore.php");
                exit();
            } else if ($nTessera[0] == "S") {
                header("location: indexSocieta.php");
                exit();
            }
        } else {
            header("location: login.php?error=1");
            exit();
        }
    }
}
