<?php
session_start();
include("DBConnection.php");
$nome = trim($_POST["name"]);
$cognome = trim($_POST["surname"]);
$dataDiNascita = trim($_POST["dataDiNascita"]);
$componente = $_POST["component"];
if ($componente == "Arbitro") {
    $nTessera = "A" . trim($_POST["numeroTessera"]);
} else if ($componente == "Udc") {
    $nTessera = "U" . trim($_POST["numeroTessera"]);
} else if ($componente == "Designatore") {
    $nTessera = "D" . trim($_POST["numeroTessera"]);
} else if ($componente == "Societa") {
    $nTessera = "S" . trim($_POST["numeroTessera"]);
}

echo $nTessera;



$result = $conn->query("select * from utenti where numeroTessera='$nTessera'");
//var_dump("select * from password where email='$email' and password_='$pw'");

if ($result->num_rows == 1) {
    header("location: creazioneUtente.php?error=1");
} else {
    /*
    //Attempt insert something in Elenco
    $sql = "INSERT INTO utenti (nomeCognome,email,username,psw,telefono,indirizzo,dataNascita,sesso,dataRegistrazione,CID,dataScadenza,foto) VALUES ('$nomeCognome','$email','$userName', '$psw','$phone_number','$address','$dataDiNascita','$genderIndicator','$dataDiRegistrazione','$identityCardNumber', '$dataScadenza','foto')";
    // echo $email . $password . "\n";

    //Check if everything is ok
    if (mysqli_query($conn, $sql)) {
        //echo "Utente inserito";
        //  echo "<br><br>";
        $_SESSION["username"] = $userName;


        $sql = "SELECT * FROM utenti WHERE username='$_SESSION[username]'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["idUtente"] = $row["idUtente"];
        }

        $sql = "INSERT INTO passeggeri(idUtente) VALUES( '$_SESSION[idUtente]')";
        if (mysqli_query($conn, $sql)) {
            // ok
            $sql = "SELECT * FROM passeggeri WHERE idUtente='$_SESSION[idUtente]'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION["idPasseggero"] = $row["idPasseggero"];
            }
        }


        header("Location: finalPage.php");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    */
    $prezzoIniziale = 0;

    if ($componente == "Arbitro") {

        $sql = "INSERT INTO utenti (numeroTessera,psw) VALUES ('$nTessera',' ')";
        //Check if everything is ok
        if (mysqli_query($conn, $sql)) {
            //echo "Utente inserito";
            $sql = "INSERT INTO contabilita (saldo) VALUES ('$prezzoIniziale')";
            if (mysqli_query($conn, $sql)) {
                //echo "Utente inserito";
                $sql = "SELECT * FROM contabilita ORDER BY idSaldo DESC LIMIT 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $idSaldo = $row["idSaldo"];

                    $sql = "INSERT INTO arbitro (nome,cognome,dataDiNascita, numeroTessera, idSaldo) VALUES ('$nTessera',' ')";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    } else if ($componente == "Udc") {
        echo "ud";
    } else if ($componente == "Designatore") {
        echo "de";
    } else if ($componente == "Societa") {
        echo "soc";
    }
}



//Close connection
mysqli_close($conn);
