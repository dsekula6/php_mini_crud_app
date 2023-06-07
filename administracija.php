<?php session_start(); include 'connect.php'; // Putanja do direktorija sa slikama 
define('UPLPATH', 'img/'); // Provjera da li je korisnik došao s login forme 
if (isset($_POST['prijava'])) { // Provjera da li korisnik postoji u bazi uz zaštitu od SQL injectiona 
    $prijavaImeKorisnika = $_POST['username']; $prijavaLozinkaKorisnika = $_POST['lozinka']; $sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?"; $stmt = mysqli_stmt_init($dbc); if (mysqli_stmt_prepare($stmt, $sql)) { mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika); mysqli_stmt_execute($stmt); mysqli_stmt_store_result($stmt); } mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, $levelKorisnika); mysqli_stmt_fetch($stmt); //Provjera lozinke 
    if (password_verify($_POST['lozinka'], $lozinkaKorisnika) && mysqli_stmt_num_rows($stmt) > 0) { $uspjesnaPrijava = true;
// Provjera da li je admin 
if($levelKorisnika == 1) { $admin = true; } else { $admin = false; } //postavljanje session varijabli 
$_SESSION['$username'] = $imeKorisnika; $_SESSION['$level'] = $levelKorisnika; } else { $uspjesnaPrijava = false; } } // Brisanje i promijena arhiviranosti
 ?>

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
            <?php
            include "connect.php";
            define('UPLPATH', '');

            $query  = "SELECT * FROM pwa_projekt";
            $result = mysqli_query($dbc, $query);
            while ($row = mysqli_fetch_array($result)) {
            echo '<form enctype="multipart/form-data" action="" method="POST"> <div class="form-item"> <label for="title">Naslov vjesti:</label> <div class="form-field"> <input type="text" name="title" class="form-field-textual" value="' . $row['naslov'] . '"> </div> </div> <div class="form-item"> <label for="about">Kratki sadržaj vijesti (do 50 znakova):</label> <div class="form-field"> <textarea name="about" id="" cols="30" rows="10" class="form-field-textual">' . $row['sazetak'] . '</textarea> </div> </div> <div class="form-item"> <label for="content">Sadržaj vijesti:</label> <div class="form-field"> <textarea name="content" id="" cols="30" rows="10" class="form-field-textual">' . $row['tekst'] . '</textarea> </div> </div> <div class="form-item"> <label for="pphoto">Slika:</label> <div class="form-field">
            <input type="file" class="input-text" id="pphoto" value="' . $row['slika'] . '" name="pphoto"/> <br><img src="' . UPLPATH . $row['slika'] . '" width=100px> // pokraj gumba za odabir slike pojavljuje se umanjeni prikaz postojeće slike </div> </div> <div class="form-item"> <label for="category">Kategorija vijesti:</label> <div class="form-field"> <select name="category" id="" class="form-field-textual" value="' . $row['kategorija'] . '"> <option value="sport">Sport</option> <option value="kultura">Kultura</option> </select> </div> </div> <div class="form-item"> <label>Spremiti u arhivu: <div class="form-field">';
            if ($row['arhiva'] == 0) {
            echo '<input type="checkbox" name="archive" id="archive"/> Arhiviraj?';
            } else {
            echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
            }
            echo '</div> </label> </div> </div> <div class="form-item"> <input type="hidden" name="id" class="form-field-textual" value="' . $row['id'] . '"> <button type="reset" value="Poništi">Poništi</button> <button type="submit" name="update" value="Prihvati"> Izmjeni</button> <button type="submit" name="delete" value="Izbriši"> Izbriši</button> </div> </form>';
            }

            
            ?>
            <?php if (isset($_POST['delete']))
            {
            $id = $_POST['id'];
            $query = "DELETE FROM pwa_projekt WHERE id=$id ";
            $result = mysqli_query($dbc, $query);
            } 
            
            ?>

            <?php 
            if (isset($_POST['update']))
            {
            $picture = $_FILES['pphoto']['name'];
            $title = $_POST['title'];
            $about = $_POST['about'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            if (isset($_POST['archive']))
            {
                $archive = 1;
            }
            else
            {
                $archive = 0;
            }
            $target_dir = '' . $picture;
            move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
            $id = $_POST['id'];
            $query = "UPDATE pwa_projekt SET naslov='$title', sazetak='$about', tekst='$content', slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id ";
            $result = mysqli_query($dbc, $query);
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

