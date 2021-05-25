<?php
session_start();
include("DBConnection.php");

$password = md5($_POST["nuovaPassword"]);
$sql = "UPDATE utenti SET psw='$password' WHERE numeroTessera='$_SESSION[nTessera]'";
echo $sql;

if ($conn->query($sql) === TRUE) {

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
} else {
    echo "Error updating record: " . $conn->error;
}
