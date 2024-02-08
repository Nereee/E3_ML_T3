<!--HTML FORMATUA-->
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
<body onload="ZinemaIzena()">
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
    </header><!-- #main-header -->

    <main id="main-content">
        <article id="izenburuak-erreserbak">
            <header>
                <h2>EROSKETAREN XEHETASUNAK</h2>
            </header>
            <div class="formulario">


                <section class="formularioaI">
                    <form action="JS.js">
                        <h6>Erreserba Osatu</h6>
                        <label for="zinema">Zinema aukeratu: </label>
                        <br>
                        <select id="zinema" name="zinema" onchange="Zinema_url()">
                           
                        </select>
                        <br>
                        
                        <label for="pelikula" onchange="Pelikula_url()">Pelikula aukeratu: </label>
                        <br>
                        <select id="pelikula" name="pelikula">
                            
                        </select>
                        
                        <br>
                        <label for="data">Data aukeratu: </label>
                        <br>
                        <input type="date">
                        <br>
                        <label for="saioa">Saioa aukeratu: </label>
                        <br>
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

    <script>
    function ZinemaIzena() {
        var zinema = document.getElementById("zinema");

        <?php

        $mysqli = new mysqli("localhost", "root", "", "e3");

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        $sql = "SELECT id_zinema, zinema_izena FROM zinema";
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
        ?>
            var option = document.createElement("option");
            option.value = "<?php echo $row['id_zinema']; ?>";
            option.textContent = "<?php echo $row['zinema_izena']; ?>";
            zinema.appendChild(option);
        <?php
        }

        $mysqli->close();
        ?>
    }

    function Zinema_url(){
        let zinema = document.getElementById("zinema");
        let patharray = window.location.pathname;
        window.location = window.location.pathname + "?zinema="+zinema.value;
    }

    function PelikulaIzena() {
        var pelikula = document.getElementById("pelikula");
        <?php

        $mysqli = new mysqli("localhost", "root", "", "e3");

        $sql = "SELECT film_izena, id_filma FROM filma join zinema using (id_zinema) WHERE id_zinema = ?";

        $stmt = $mysqli->prepare($sql);

        $stmt->bind_param("i", $_GET['zinema']);

        $stmt->execute();

        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
        ?>
            var option = document.createElement("option");
            option.value = "<?php echo $row['id_filma']; ?>";
            option.textContent = "<?php echo $row['film_izena']; ?>";
            pelikula.appendChild(option);
        <?php
        }

        $stmt->close();
        $mysqli->close();
        ?>
    }
    function Pelikula_url(){
        let zinema = document.getElementById("zinema");
        let pelikula = document.getElementById("pelikula");
        let patharray = window.location.pathname;
        window.location = window.location.pathname + "?zinema="+zinema.value + "&pelikula="+pelikula.value;

    }
</script>

</body>


</html>