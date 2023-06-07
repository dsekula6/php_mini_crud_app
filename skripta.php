<?php


if (isset($_POST['title'])) {
    $title=$_POST['title']; 
}
if (isset($_POST['about'])) {
    $about=$_POST['about']; 
}
if (isset($_POST['content'])) {
    $content=$_POST['content']; 
}
if (isset($_POST['pphoto'])) {
    $pphoto=$_POST['pphoto']; 
}
if (isset($_POST['category'])) {
    $category=$_POST['category']; 
}


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
                        <li class="col-md-3 col-sm-12"><a href="">HOME</a></li>
                        <li class="col-md-3 col-sm-12"><a href="">SPORT</a></li>
                        <li class="col-md-3 col-sm-12"><a href="">KULTURA</a></li>
                        <li class="col-md-3 col-sm-12"><a href="">ADMINISTRACIJA</a></li>
                    </ul>
                </div>
            </div>

        </header>
        <hr>

        

        <article>
            <div class="container-fluid">
                <section role="main">
                    <div class="row">
                        <p class="category">
                            <?php echo $category; ?>
                        </p>
                        <h1 class="title">
                            <?php echo $title; ?>
                        </h1>
                        <p>AUTOR:</p>
                        <p>OBJAVLJENO:</p>
                    </div>
                    <section class="slika">
                        <?php echo "<img src='img/$pphoto'"; ?>
                    </section>
                    <section class="about">
                        <p>
                            <?php echo $about; ?>
                        </p>
                    </section>
                    <section class="sadrzaj">
                        <p>
                            <?php echo $content; ?>
                        </p>
                    </section>
                </section>
            </div>
        </article>

        <footer>
            <div>Daniel Sekula mail: dsekula@tvz.hr 0246094139 ©2022</div>

        </footer>



</body>

</html>