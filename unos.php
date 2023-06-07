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
        <div class="container-fluid">
            <form enctype="multipart/form-data" action="unos.php" method="POST">
	<div class="form-item"> <span id="porukaTitle" class="bojaPoruke"></span>
		<label for="title">Naslov vjesti</label>
		<div class="form-field">
			<input type="text" name="title" id="title" class="form-field-textual"> </div>
	</div>
	<div class="form-item"> <span id="porukaAbout" class="bojaPoruke"></span>
		<label for="about">Kratki sadržaj vjesti (do 50 znakova)</label>
		<div class="form-field">
			<textarea name="about" id="about" cols="30" rows="10" class="form-field-textual"></textarea>
		</div>
	</div>
	<div class="form-item"> <span id="porukaContent" class="bojaPoruke"></span>
		<label for="content">Sadržaj vjesti</label>
		<div class="form-field">
			<textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"></textarea>
		</div>
	</div>
	<div class="form-item"> <span id="porukaSlika" class="bojaPoruke"></span>
		<label for="pphoto">Slika: </label>
		<div class="form-field">
			<input type="file" class="input-text" id="pphoto" name="pphoto" /> </div>
	</div>
	<div class="form-item"> <span id="porukaKategorija" class="bojaPoruke"></span>
		<label for="category">Kategorija vjesti</label>
		<div class="form-field">
			<select name="category" id="category" class="form-field-textual">
				<option value="" disabled selected>Odabir kategorije</option>
				<option value="sport">Sport</option>
				<option value="kultura">Kultura</option>
			</select>
		</div>
	</div>
	<div class="form-item">
		<label>Spremiti u arhivu:
			<div class="form-field">
				<input type="checkbox" name="archive" id="archive"> </div>
		</label>
	</div>
	<div class="form-item">
		<button type="reset" value="Poništi">Poništi</button>
		<button type="submit" value="Prihvati" id="slanje">Prihvati</button>
	</div>
</form>

        </div>
    </article>

    <footer>
        <div>Daniel Sekula mail: dsekula@tvz.hr 0246094139 ©2022</div>
        
    </footer>

</div>
    
</body>
</html>

<?php
echo '<script type="text/javascript"> 
// Provjera forme prije slanja 
document.getElementById("slanje").onclick = function(event) {
    var slanjeForme = true; // Naslov vjesti (5-30 znakova) 
    var poljeTitle = document.getElementById("title");
    var title = document.getElementById("title").value;
    if(title.length < 5 || title.length > 30) {
        slanjeForme = false;
        poljeTitle.style.border = "1px dashed red";
        document.getElementById("porukaTitle").innerHTML = "Naslov vjesti mora imati između 5 i 30 znakova!<br>";
    } else {
        poljeTitle.style.border = "1px solid green";
        document.getElementById("porukaTitle").innerHTML = "";
    } // Kratki sadržaj (10-100 znakova) 
    var poljeAbout = document.getElementById("about");
    var about = document.getElementById("about").value;
    if(about.length < 10 || about.length > 100) {
        slanjeForme = false;
        poljeAbout.style.border = "1px dashed red";
        document.getElementById("porukaAbout").innerHTML = "Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
    } else {
        poljeAbout.style.border = "1px solid green";
        document.getElementById("porukaAbout").innerHTML = "";
    } // Sadržaj mora biti unesen 
    var poljeContent = document.getElementById("content");
    var content = document.getElementById("content").value;
    if(content.length == 0) {
        slanjeForme = false;
        poljeContent.style.border = "1px dashed red";
        document.getElementById("porukaContent").innerHTML = "Sadržaj mora biti unesen!<br>";
    } else {
        poljeContent.style.border = "1px solid green";
        10
        document.getElementById("porukaContent").innerHTML = "";
    } // Slika mora biti unesena 
    var poljeSlika = document.getElementById("pphoto");
    var pphoto = document.getElementById("pphoto").value;
    if(pphoto.length == 0) {
        slanjeForme = false;
        poljeSlika.style.border = "1px dashed red";
        document.getElementById("porukaSlika").innerHTML = "Slika mora biti unesena!<br>";
    } else {
        poljeSlika.style.border = "1px solid green";
        document.getElementById("porukaSlika").innerHTML = "";
    } // Kategorija mora biti odabrana 
    var poljeCategory = document.getElementById("category");
    if(document.getElementById("category").selectedIndex == 0) {
        slanjeForme = false;
        poljeCategory.style.border = "1px dashed red";
        document.getElementById("porukaKategorija").innerHTML = "Kategorija mora biti odabrana!<br>";
    } else {
        poljeCategory.style.border = "1px solid green";
        document.getElementById("porukaKategorija").innerHTML = "";
    }
    if(slanjeForme != true) {
        event.preventDefault();
    }
}; 
</script>' ;
include 'connect.php'; 
$picture = $_FILES['pphoto']['name']; 
$title=$_POST['title']; 
$about=$_POST['about']; 
$content=$_POST['content']; 
$category=$_POST['category']; 
$date=date('d.m.Y.'); 
if(isset($_POST['archive'])){ 
    $archive=1; }
else{ 
        $archive=0; 
    } 
$target_dir = ''.$picture; 
move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
$query = "INSERT INTO pwa_projekt (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$date', '$title', '$about', '$content', 'tin_decko_fin.jpg', '$category', '$archive')";
$result = mysqli_query($dbc, $query) or die('Error querying databese.'); 
mysqli_close($dbc); ?>