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
?><!--HTML FORMATUA-->
<!DOCTYPE html>

<!--HIZKUNTZA-->
<html lang="zxx">

<!--HEAD atala html-aren itxura "aldatzeko"-->

<head>
    <meta charset="utf-8">
    <meta name="author" content="2.Taldea">
    <meta name="keywords" content="Zinema, Pelikulak, Entretenimendua, Pelikula-ikusienak, Guri-buruz">
    <meta name="description" content="Elorrieta zinemen web orrialdea">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elorrieta Zinema</title>
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
                    <li><a href="nortzuk.html">Guri buruz</a></li>
                    <li id="desplegablea" class="dropdown"><a href="karteldegia.html">Karteldegia</a>
                        <div id="desplegablea-a">
                            <a href="drama.html">Drama</a>
                            <a href="zi-fi.html">Zi-Fi</a>
                            <a href="komedia.html">Komedia</a>
                            <a href="beldurrezkoak.html">Beldurra</a>
                        </div>
                    </li>
                    <li><a href="erreserbak.html">Erreserbak</a></li>
                </ul>
            </nav>
        </div>
    </header><!-- / #main-header -->

    <main id="main-content">
        <article id="izenburuak-erreserbak">
            <header>
                <h2>EROSKETAREN XEHETASUNAK</h2>
            </header>
            <div class="formulario">


                <section class="formularioaI">
                    <form action="JS.js">
                        <h5>Erreserba Osatu</h5>
                        <label for="aretoa">Aretoa aukeratu: </label>
                        <select id="aretoa" name="aretoa">
                            <option value="1">Yelmo cines Megapark</option>
                            <option value="2">Merkatu zaharra Erandio</option>
                            <option value="3">Cinessa MaxCenter</option>
                            <option value="4">Yelmo cines Artea</option>
                            <option value="5">Elorrieta Cines</option>
                        </select>
                        <br>
                        <!-- Generoa aukeratu -->
                        <label for="generoa">Generoa aukeratu:</label>
                        <select id="generoa" name="generoa" onchange="aldatu()">
                            <option value="0">Aukeratu...</option>
                            <option value="1">Drama</option>
                            <option value="2">Beldurra</option>
                            <option value="3">Zientzia-fikzioa</option>
                            <option value="4">Komedia</option>
                        </select>
						<br>
                        <select id="pelikula" name="pelikula">
                            <option value="-"></option>
                        </select>
                        <script>
                            var drama = new Array('-', 'Handia', 'La lista de Schindler', 'Cadena Perpetua', 'Million Dolar Baby');
                            var zientziafikzioa = new Array('-', 'Odisea en el Espacio', 'La novia de Frankenstein', 'El planeta de los Simios', 'Alien, el octavo pasajero');
                            var komedia = new Array('-', 'Scary Movie', 'El Gran Lebowski', 'La vida de Bryan', 'Aterriza como puedas');
                            var beldurra = new Array('-', 'Psicosis', 'El resplandor', 'Dracula', 'Cisne Negro');
                    
                            //Un Array de Arrays
                            var generoak = [
                                [],
                                drama,
                                zientziafikzioa,
                                komedia,
                                beldurra,
                            ];
                            function aldatu() {
                                let generoID = document.getElementById("generoa").value;
                                if (generoID != 0) {
                                    let gen = generoak[generoID];
                                    let genero_zerrenda = document.getElementById("pelikula");
									genero_zerrenda.innerHTML="";
                                   
                                    for (let i = 0; i < gen.length; i++) {
                                        let aukera = document.createElement("option");
                                        let testua = document.createTextNode(gen[i]);
                                        aukera.appendChild(testua);
                                        genero_zerrenda.appendChild(aukera);
                                    }
                                }
                            }
                    
                        </script>
                        <br>
                        <label for="pelikula">Eguna aukeratu: </label>
                        <input type="date">
                        <br>
                        <label for="saioa">Saioa aukeratu: </label>
                        <select id="saioa" name="saioa">
                            <option value="1">18:00</option>
                            <option value="2">20:00</option>

                        </select>
                        <br>
                        <br>
                        <input class="botoia" type="submit" name="botoia" value="Jarraitu">
                    </form>
                </section>
            </div>


            </form>
            <div class="content">
                <p>Gure zentroan bertan sarrerak erosi ditzakezu. Gure webgunean berriz, sarrerak ezin direnez online
                    bidez erosi,
                    salgai ditugun zentro desberdinak aztertu eta bertan sarrerak erosi ditzakezu.
                    Hona hemen, gure sarrerak erosteko ahalbidetuta dauden zinema-aretoak</p>
            </div>
            <div class="content">
                <a href="https://www.yelmocines.es/cartelera/vizcaya/megapark">
                    <h4>Yelmo cines Megapark</h4>
                </a>
                <a href="https://www.yelmocines.es/cartelera/vizcaya/megapark"><img src="../irudiak/yelmo.jpg"
                        alt="yelmo_cines_max"></a>
                <address>Helbidea: C.C. Megapark Avda. de la Rivera SN Barrio Ibarreta-Zuloko, 48903<br>Barakaldo,
                    Bizkaia</address><br>
                <p><b>Telefonoa:</b>944 78 11 04</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27629.340295869242!2d-3.014558048218636!3d43.289622160101885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e50a0a00b3373%3A0x817bf301f5c1e096!2sCine%20Yelmo%20Megapark!5e0!3m2!1ses-419!2ses!4v1697641613528!5m2!1ses-419!2ses"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="content">
                <a
                    href="https://www.kulturklik.euskadi.eus/equipamiento/2023011909444292/merkatu-zaharra/z12-detalle/es/">
                    <h4>Merkatu zaharra Erandio</h4>
                </a>
                <a
                    href="https://www.kulturklik.euskadi.eus/equipamiento/2023011909444292/merkatu-zaharra/z12-detalle/es/"><img
                        src="../irudiak/merkatu.jpg" alt="merkatu_zaharra"></a>
                <address>Helbidea: San Jeronimo Kalea, 48950 <br> Altzaga, Bizkaia</address><br>
                <p><b>Telefonoa: </b>94 489 01 00</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23228.39796356631!2d-3.0125552415847987!3d43.302750004920185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e5a88fcc617bf%3A0x5e8fd3f654b4276a!2sErandioko%20Merkatu%20Zaharra!5e0!3m2!1ses-419!2ses!4v1697641199811!5m2!1ses-419!2ses"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="content">
                <a href="https://www.cinesa.es/cines/max-ocio/">
                    <h4>Cinessa MaxCenter</h4>
                </a>
                <a href="https://www.cinesa.es/cines/max-ocio/"><img src="../irudiak/cinesa.jpg" alt="cinesa"></a>
                <address>Helbidea: Max Ocio, Kareaga K., S/N, 48903 <br> Barakaldo, Bizkaia</address><br>
                <p><b>Telefonoa:</b>932 28 96 00</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32860.11440847879!2d-3.0216318445431716!3d43.28387157742593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e50a764261aef%3A0xed6d7fb530866615!2sCINESA%20MAX%20OCIO!5e0!3m2!1ses-419!2ses!4v1697641639103!5m2!1ses-419!2ses"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="content">
                <a href="https://www.yelmocines.es/cartelera/vizcaya/artea">
                    <h4>Yelmo cines Artea</h4>
                </a>
                <a href="https://www.yelmocines.es/cartelera/vizcaya/artea"><img src="../irudiak/artea.jpg"
                        alt="yelmo_artea"></a>
                <address>Peruri Auzoa, 33, 48940 <br> Leioa, Bizkaia</address><br>
                <p><b>Telefonoa:</b>902 33 32 31</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11606.793342163548!2d-2.9891193!3d43.3415012!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e5bba5273dec1%3A0x61318d03f190e8d0!2sCine%20Yelmo%20Premium%20Artea!5e0!3m2!1ses!2ses!4v1700131580265!5m2!1ses!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </article> <!-- /article -->

    </main> <!-- / #main-content -->

    <footer>
        <p>Enpresa kolaboratzailea</p>
        <img id="logoa" src="../irudiak/logo.jpg" alt="Gure taldea">
        <h6 class="fi">Online sareak</h6>
        <div id="sareak" class="fi">
            <a href="https://www.instagram.com/" target="_blank"><img src="../irudiak/instagram.png"
                    alt="Instagram"></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><img src="../irudiak/twitter.png" alt="Twitter"></a>
            <a href="https://www.facebook.com/?locale=es_ES" target="_blank"><img src="../irudiak/facebook.png"
                    alt="Facebook"></a>
        </div>
        <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank"
            rel="license noopener noreferrer" style="display:inline-block;"><img class="fi"
                style="height:22px;margin-left:3px;vertical-align:text-bottom;"
                src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1" alt="1"><img
                style="height:22px;margin-left:3px;vertical-align:text-bottom;"
                src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1" alt="2"><img
                style="height:22px;margin-left:3px;vertical-align:text-bottom;"
                src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1" alt="3"><img
                style="height:22px;margin-left:3px;vertical-align:text-bottom;"
                src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1" alt="4"></a>
    </footer> <!-- / #main-footer -->


</body>

</html>