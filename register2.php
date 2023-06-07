<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Document</title>
</head>
<body class="bodyindex">
<?php
include 'connect.php';
    define('UPLPATH', '');
    ?>
    <div class="container main">
    <header>
        <div class="container-fluid tekst">
            <h1>L'obs</h1>
        </div>
            
        <div class="container-fluid header_nav">
        <div class="container">
        <ul class="row">
        <li class="col-md-2 col-sm-12"><a href="index.php">HOME</a></li>
            <li class="col-md-2 col-sm-12"><a href="kategorija.php?kategorija=sport">SPORT</a></li>
            <li class="col-md-2 col-sm-12"><a href="kategorija.php?kategorija=kultura">KULTURA</a></li>
            <li class="col-md-2 col-sm-12"><a href="administracija.php">ADMINISTRACIJA</a></li>
            <li class="col-md-2 col-sm-12"><a href="unos.php">UNOS</a></li>
            <li class="col-md-2 col-sm-12"><a href="register2.php">REGISTRACIJA</a></li>
        </ul>
        </div>
        </div>
        
    </header>
    <hr>
    <article>
        <div class="container-fluid portfolio">
           <div class="container">
           <?php //Registracija je prošla uspješno
if ($registriranKorisnik == true)
{
    echo '<p>Korisnik je uspješno registriran!</p>';
}
else
{ //registracija nije protekla uspješno ili je korisnik prvi put došao na stranicu
    
?> <section role="main"> <form enctype="multipart/form-data" action="" method="POST"> <div class="form-item"> <span id="porukaIme" class="bojaPoruke"></span> <label for="title">Ime: </label> <div class="form-field"> <input type="text" name="ime" id="ime" class="form-field-textual"> </div> </div> <div class="form-item"> <span id="porukaPrezime" class="bojaPoruke"></span> <label for="about">Prezime: </label> <div class="form-field"> <input type="text" name="prezime" id="prezime" class="form-field-textual"> </div> </div> <div class="form-item"> <span id="porukaUsername" class="bojaPoruke"></span> <label for="content">Korisničko ime:</label> <!-- Ispis poruke nakon provjere korisničkog imena u bazi --> <?php echo '<br><span class="bojaPoruke">' . $msg . '</span>'; ?> <div class="form-field"> <input type="text" name="username" id="username" class="form-field-textual"> </div> </div> <div class="form-item"> <span id="porukaPass" class="bojaPoruke"></span> <label for="pphoto">Lozinka: </label> <div class="form-field">

<input type="password" name="pass" id="pass" class="form-field-textual"> </div> </div> <div class="form-item"> <span id="porukaPassRep" class="bojaPoruke"></span> <label for="pphoto">Ponovite lozinku: </label> <div class="form-field"> <input type="password" name="passRep" id="passRep" class="form-field-textual"> </div> </div> <div class="form-item"> <button type="submit" value="Prijava" id="slanje">Prijava</button> </div> </form> </section> <script type="text/javascript"> document.getElementById("slanje").onclick = function(event) { var slanjeForme = true; // Ime korisnika mora biti uneseno 
var poljeIme = document.getElementById("ime"); var ime = document.getElementById("ime").value; if (ime.length == 0) { slanjeForme = false; poljeIme.style.border="1px dashed red"; document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>"; } else { poljeIme.style.border="1px solid green"; document.getElementById("porukaIme").innerHTML=""; } // Prezime korisnika mora biti uneseno 
var poljePrezime = document.getElementById("prezime"); var prezime = document.getElementById("prezime").value; if (prezime.length == 0) { slanjeForme = false;

poljePrezime.style.border="1px dashed red"; document.getElementById("porukaPrezime").innerHTML="<br>Unesite Prezime!<br>"; } else { poljePrezime.style.border="1px solid green"; document.getElementById("porukaPrezime").innerHTML=""; } // Korisničko ime mora biti uneseno 
var poljeUsername = document.getElementById("username"); var username = document.getElementById("username").value; if (username.length == 0) { slanjeForme = false; poljeUsername.style.border="1px dashed red"; document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>"; } else { poljeUsername.style.border="1px solid green"; document.getElementById("porukaUsername").innerHTML=""; } // Provjera podudaranja lozinki 
var poljePass = document.getElementById("pass"); var pass = document.getElementById("pass").value; var poljePassRep = document.getElementById("passRep"); var passRep = document.getElementById("passRep").value; if (pass.length == 0 || passRep.length == 0 || pass != passRep) { slanjeForme = false; poljePass.style.border="1px dashed red"; poljePassRep.style.border="1px dashed red"; document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>"; document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>"; } else { poljePass.style.border="1px solid green"; poljePassRep.style.border="1px solid green"; document.getElementById("porukaPass").innerHTML=""; document.getElementById("porukaPassRep").innerHTML=""; } if (slanjeForme != true) { event.preventDefault(); }

}; </script> <?php
} ?>

           </div>
        </div>
    </article>

    <footer>
        <div>Daniel Sekula mail: dsekula@tvz.hr 0246094139 ©2022</div>
        
    </footer>

</div>
    
</body>
</html>

