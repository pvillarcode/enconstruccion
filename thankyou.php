<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$moreinfo = false;

if(isset($_POST['moreinfo'])){
    $moreinfo = true;
}

$query   = "INSERT into tb_cform (name,email,moreinfo) VALUES('" . $name . "','" . $email . "','" . $moreinfo . "')";

$success = $conn->query($query);

if (!$success) {
    die("Por favor intente de nuevo.: ".$conn->error);

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Libros Condor Sitio en Construcción">
    <meta name="author" content="BootstrapBay.com">
    <title>Libros Condor Sitio en construcción</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3"> 
                <h1 class="page-header text-center">
                <?php
                    echo 'Muchas gracias '.$name.'. Pronto nos contactaremos contigo. ';
                ?>
  				</h1>
                <img class="img-responsive center-block" src="logo.jpg">
				
			</div>
		</div>
	</div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>