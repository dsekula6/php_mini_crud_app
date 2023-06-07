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
<body>
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

    <!-- <article>
        <div class="container-fluid">
            <p>lobs IMMOBILIER</p>
            <h1>Lorem ipsum dolor sit, amet consectetur adipisicing </h1>
            <img src="tin_decko_fin.jpg" class="slika" alt="">

            <br><br><p>loreLorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptatibus sed est modi excepturi, ullam et eligendi adipisci! Ad eos tempore omnis animi id iste dolore fugit impedit cumque magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque assumenda dicta eum! Hic, ab maxime deleniti tenetur laudantium fugiat non aperiam provident, voluptate porro accusantium. Sequi rem maxime maiores harum. ipsum dolor sit amet consectetur adipisicing elit. Asperiores ut consequuntur impedit inventore fugiat repellendus repellat possimus minima voluptates minus debitis nihil perferendis ipsam beatae enim non qui, quis provident.</p>
            <b><i><p>loreLorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptatibus sed est modi excepturi, ullam et eligendi adipisci! Ad eos tempore omnis animi id iste dolore fugit impedit cumque magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque assumenda dicta eum! Hic, ab maxime deleniti tenetur laudantium fugiat non aperiam provident, voluptate porro accusantium. Sequi rem maxime maiores harum. ipsum dolor sit amet consectetur adipisicing elit. Asperiores ut consequuntur impedit inventore fugiat repellendus repellat possimus minima voluptates minus debitis nihil perferendis ipsam beatae enim non qui, quis provident.</p>
                <p>loreLorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptatibus sed est modi excepturi, ullam et eligendi adipisci! Ad eos tempore omnis animi id iste dolore fugit impedit cumque magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque assumenda dicta eum! Hic, ab maxime deleniti tenetur laudantium fugiat non aperiam provident, voluptate porro accusantium. Sequi rem maxime maiores harum. ipsum dolor sit amet consectetur adipisicing elit. Asperiores ut consequuntur impedit inventore fugiat repellendus repellat possimus minima voluptates minus debitis nihil perferendis ipsam beatae enim non qui, quis provident.</p>
                <p>loreLorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptatibus sed est modi excepturi, ullam et eligendi adipisci! Ad eos tempore omnis animi id iste dolore fugit impedit cumque magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque assumenda dicta eum! Hic, ab maxime deleniti tenetur laudantium fugiat non aperiam provident, voluptate porro accusantium. Sequi rem maxime maiores harum. ipsum dolor sit amet consectetur adipisicing elit. Asperiores ut consequuntur impedit inventore fugiat repellendus repellat possimus minima voluptates minus debitis nihil perferendis ipsam beatae enim non qui, quis provident.</p>
            </i></b>
        </div>
    </article> -->

    <?php
    include 'connect.php';
    define('UPLPATH', '');
    $id = $_GET["id"];
    $query  = "SELECT * FROM pwa_projekt WHERE id=$id LIMIT 15";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result);

    ?>

    <section role="main">
	<div class="row">
		<h2 class="category"><?php echo "<span>" .$row['kategorija']. "</span>"; ?></h2>
		<h1 class="title"><?php echo $row['naslov']; ?></h1>
		<p>AUTOR:</p>
		<p>OBJAVLJENO:
			<?php echo "<span>" .$row['datum']. "</span>"; ?></p>
	</div>
	<section class="slika">
		<?php echo '<img src="' . UPLPATH . $row['slika'] . '">'; ?> </section>
	<section class="about">
		<p>
			<?php echo "<i>".$row['sazetak']."</i>"; ?> </p>
	</section>
	<section class="sadrzaj">
		<p>
			<?php echo $row['tekst']; ?>
		</p>
	</section>
    </section>
    

    <footer>
        <div>Daniel Sekula mail: dsekula@tvz.hr 0246094139 ©2022</div>
        
    </footer>

</div>
    
</body>
</html>