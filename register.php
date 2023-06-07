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
           <?php            $ime = $_POST['ime'];
                            $prezime = $_POST['prezime'];
                            $username = $_POST['username'];
                            $lozinka = $_POST['pass'];
                            $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
                            $razina = 0;
                            $registriranKorisnik = '';


                            //Provjera postoji li u bazi već korisnik s tim korisničkim imenom
                            $sql = "SELECT korisnicko_ime FROM users WHERE korisnicko_ime = ?";
                            $stmt = mysqli_stmt_init($dbc);
                            if (mysqli_stmt_prepare($stmt, $sql)) { 
                                mysqli_stmt_bind_param($stmt, 's', $username); 
                                mysqli_stmt_execute($stmt); 
                                mysqli_stmt_store_result($stmt);
                            }
                            if(mysqli_stmt_num_rows($stmt) > 0){
                            echo 'Korisničko ime već postoji!';
                            echo '<br/>';
                            echo '<a href="registracija2.php">Povratak na registraciju.</a>';
                            }else{

                            // Ako ne postoji korisnik s tim korisničkim imenom - Registracija korisnika u bazi pazeći na SQL injection
                            $sql = "INSERT INTO users (ime, prezime,korisnicko_ime, lozinka, razina)VALUES (?, ?, ?, ?, ?)";
                            $stmt = mysqli_stmt_init($dbc);
                            if (mysqli_stmt_prepare($stmt, $sql))  { mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username,
                            $hashed_password, $razina); mysqli_stmt_execute($stmt);
                            $registriranKorisnik = true;
                            }



                            }

                            //Registracija je prošla uspješno
                            if($registriranKorisnik == true) {
                                echo '<p>Korisnik je uspješno registriran!</p>';
                                echo '<a href="index.php"> Povratak na naslovnicu. </a>';
                                } else {
                                    echo '<p>Neuspjela registracija!</p>';
                                }
                            mysqli_close($dbc); ?>
           </div>
        </div>
    </article>

    <footer>
        <div>Daniel Sekula mail: dsekula@tvz.hr 0246094139 ©2022</div>
        
    </footer>

</div>
    
</body>
</html>

