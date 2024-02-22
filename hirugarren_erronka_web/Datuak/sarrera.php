<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "e3_talde3";

// Konexioa sortu
$mysqli = new mysqli($servername, $username, $password, $db);
// Konexioa egiaztatu
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$NAN = $_SESSION['NAN'];
$eguna = $_POST['eguna'];
$zinema = $_POST['zinema'];
$pelikula = $_POST['pelikula'];
$saioa = $_POST['saioa'];
$kantitate = $_POST['kantitate'];
$prezioa = $_POST['prezioa'];
$deskontu = $_POST['deskontu'];

// Preparar la sentencia SQL
$sql = "INSERT INTO erosketa (deskontua, erosketa_eguna, kantitatea, faktura, NAN) VALUES ('$deskontu', '$eguna', '$kantitate', '$prezioa', '$NAN')";
if ($mysqli->query($sql) === true) {
    echo ("Erosketa ondo burutu da, hona hemen Tiketa");
} else {
    echo ("Error 1");
}

?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <title>Sarrera</title>
    <link rel="stylesheet" href="../plantilla.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body onload="tiketa_sortu()">

<header id="main-header">
    <div id="image-text-container">
        <a href="../index.html"><img src="../irudiak/logo-cine.png" alt="logoa"></a>
    </div>
    <div id="div2">
        <nav id="gohiburua">
            <ul>
                <li><a href="../index.html">Hasiera</a></li>
                <li><a href="../html/nortzuk.html">Guri buruz</a></li>
                <li id="desplegablea" class="dropdown"><a href="../html/karteldegia.html">Karteldegia</a>
                    <div id="desplegablea-a">
                        <a href="../html/drama.html">Drama</a>
                        <a href="../html/zi-fi.html">Zi-Fi</a>
                        <a href="../html/komedia.html">Komedia</a>
                        <a href="../html/beldurrezkoak.html">Beldurra</a>
                    </div>
                </li>
                <li><a href="../Datuak/login.php">Erreserbak</a></li>
            </ul>
        </nav>
    </div>
</header>

<main id="main-content">
    <h1><u>SARRERA</u></h1>
    <section class="formularioaH">
        <form action="../index.html" method="get" name="sarrera_form" id="sarrera_form">
            <h4 id="tiket"></h4>
            <br>
            <input type="button" value="Erreserbatu" onclick="erreserbatu()">
        </form>
    </section>
</main>

<footer>
    <p>Enpresa kolaboratzailea</p>
    <img id="logoa" src="../irudiak/logo.jpg" alt="Gure taldea">
    <h6 class="fi">Online sareak</h6>
    <div id="sareak">
        <a href="https://www.instagram.com/" target="_blank"><img class="fi" src="../irudiak/instagram.png" alt="Instagram"></a>
        <a href="https://twitter.com/?lang=es" target="_blank"><img class="fi" src="../irudiak/twitter.png" alt="Twitter"></a>
        <a href="https://www.facebook.com/?locale=es_ES" target="_blank"><img class="fi" src="../irudiak/facebook.png" alt="Facebook"></a>
    </div>
    <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">
        <img class="fi" style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt="1">
        <img style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="2">
        <img style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="3">
        <img style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt="4">
    </a>
</footer>

<script>
    function tiketa_sortu() {
        $zinema = $_POST['zinema'];
        $pelikula = $_POST['pelikula'];
        $eguna = $_POST['eguna'];
        $saioa = $_POST['saioa'];
        $kantitate =  $_POST['kantitate'];
        var prezioa = 5.5;
        var total = totala_kalkulatu($kantitate, 5.5);
        var deskontua = deskontua_ikusi($kantitate);
        var h4 = document.getElementById("tiket");

        h4.innerHTML = "Zinema: " + $zinema + "<br>" +
            "Pelikula: " + $pelikula + "<br>" +
            "Eguna: " + $eguna + "<br>" +
            "Saioa: " + $saioa + "<br>" +
            "Kantitate: " + $kantitate + "<br>" +
            "Deskontua: " + deskontua + "<br><br>" +
            "Diru totala: " + total + "€";
    }

    function totala_kalkulatu(kantitate, prezioa) {
        var totala = 0;
        if (kantitate == 1) {
            totala = 5.5;
        } else if (kantitate == 2) {
            totala = 2 * 5.5 * 0.8;
        } else if (kantitate >= 3) {
            totala = kantitate * 5.5 * 0.7;
        }
        return totala;
    }
    function deskontua_ikusi(kantitate){
        if (kantitate == 1) {
            deskontua = 1;
        } else if (kantitate == 2) {
            deskontua = 2;
        } else if (kantitate >= 3) {
            deskontua = 3;
        }
        return deskontua;
    
    }

</script>
</body>