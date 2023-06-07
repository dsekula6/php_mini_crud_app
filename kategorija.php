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
                include 'connect.php';
                define('UPLPATH', '');
                ?> 
                
                <?php
                $kategorija=$_GET["kategorija"];
                $query  = "SELECT * FROM pwa_projekt WHERE arhiva=0 AND kategorija='$kategorija' LIMIT 15";
                $result = mysqli_query($dbc, $query);
                $i      = 0;
                echo '<div class="row redtin">';
                while ($row = mysqli_fetch_array($result)) {
                    if ($i%3==0) {
                        echo '</div>';
                        echo '<div class="row redtin">';

                    }

                    echo '<div class="col-sm-3 col-xs-12 tindecko">';
                    echo '<div><img src="' . UPLPATH . $row['slika'] . '" alt="" ></div>';
                    echo '<div class="containerLink">';
                    echo '<a href="clanak.php?id=' . $row['id'] . '">';
                    echo '<h2>'. $row['naslov'] . '</h2>';
                    echo '<div class="tekstLink">sample tekst</div>';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>'; 
                    $i++;
                }
                ?>
            </div>
        </div>
    </article>

    <footer>
        <div>Daniel Sekula mail: dsekula@tvz.hr 0246094139 ©2022</div>
        
    </footer>

</div>
    
</body>
</html>

