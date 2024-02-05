<?php
if (isset($_GET['erabiltzaile']) && isset($_GET['pasahitza'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "db_login";

    // Konexioa sortu
	$mysqli = new mysqli($servername, $username, $password, $db);
    // Konexioa egiaztatu
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

	// Kontsulta
    $izena = $_GET["erabiltzaile"];
    $pwd = $_GET["pasahitza"];
	$kontsulta = "SELECT id FROM erabiltzaile WHERE izena = '$izena' AND pasahitza = '$pwd'";
    $result = $mysqli->query($kontsulta);

    if ($result->num_rows > 0) {
        header("Location: ../html/erreserbak.html");
        exit(); 
    } else {
        echo "Pasahitza edo erabiltzailea ez dira zuzenak";
    }

    // Konexioa itxi
   		 $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hasi saioa</title>
    <link rel="stylesheet" href="../plantilla.css">
    <link rel="stylesheet" href="../style.css">
</head>


<!--BODY atala gure web orrialdean agertu den informazioa idazteko-->
<body>
	<!--TITULU PRINTZIPAL ETA GARRANTZITSUENA-->
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
					<li><a href="../Datuak/erreserbak.php">Erreserbak</a></li>
				
				</ul>
			</nav>
		</div>
	</header><!-- / #main-header -->

	<main id="main-content">
		<section class="formularioaH">
            <form action="../Datuak/login.php" method="get" name="formulario_login" id="formulario_login">
			<h5>Saio hasiera</h5>
			<!-- Gmail-a idazteko -->
			<input class="control" type="text" name="erabiltzaile" value="" placeholder="Idatzi zure erabiltzailea">
			<!-- Pasahitza idazteko, idazten dena ez da ikusiko (puntuak agertzen dira) -->
			<input class="control" type="password" name="pasahitza" value="" placeholder="Pasahitza">
			<!-- Botoi bat egiteko -->
			<input class="botoia" type="submit" name="botoia" value="Jarraitu">
			<p><a href="#"><b>Ez dut pasahitza gogoratzen</b></a></p>
            </form>
			</section>
	
	</main> <!-- / #main-content -->
	
	<footer>
		<p>Enpresa kolaboratzailea</p>
		<img id="logoa" src="../irudiak/logo.jpg" alt="Gure taldea">
        <h6 class="fi">Online sareak</h6>
		<div id="sareak">
            <a href="https://www.instagram.com/" target="_blank"><img class="fi" src="../irudiak/instagram.png" alt="Instagram"></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><img class="fi" src="../irudiak/twitter.png" alt="Twitter"></a>
            <a href="https://www.facebook.com/?locale=es_ES" target="_blank"><img class="fi" src="../irudiak/facebook.png" alt="Facebook"></a>
        </div>
		<a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;"><img class="fi" style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt="1"><img style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="2"><img style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="3"><img style="height:22px;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt="4"></a>
	</footer> <!-- / #main-footer -->

	
</body>
</html>