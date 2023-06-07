<?php

$username="";
$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["username"]))  {
        	echo "Korisnicki račun nije unesen.";
		
    		}
	else if (empty($_POST["password"]))  {
        	echo "Lozinka nije unesena.";
		
    		}
	else {
		$username= $_POST["username"];
		$password= $_POST["password"];
        provjera($username, $password);
		
	}
}


function provjera($username, $password) {
	

	$xml=simplexml_load_file("users.xml");
	
	
	foreach ($xml->user as $usr) {
  	 	$usrn = $usr->username;
		$usrp = $usr->password;
		if($usrn==$username){
			if($usrp == $password){
				echo "<script type='text/javascript'>confirm('prijavljeni ste kao $usrn!');</script>";
				return;
				}
			else{
				echo "<script type='text/javascript'>confirm('Netočna lozinka!');</script>";
				return;
				}
			}
		}
		
	echo "Korisnik ne postoji.";
	return;
}

?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="login.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="username" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>
           
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <button type="submit" name="log" id="log">Log In Here</button>       
        <br><br>    
        <a href="register.php" class="link">Register</a> 
    </form>     
</div>    
</body>    
</html>  