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
  				<div class="col-sm-12 center-block">
                     <img class="img-responsive  logo" src="logo.jpg">
                      <h4>Distribuidora de libros para el cuidado de la tierra y las personas.</h4>
                      <hr>
                      
                    <h5>Nuestro sitio está en construcción, déjanos tus datos y quedamos en contacto</h5>
              
                </div>               
              
				<form class="form-horizontal" role="form" method="post" action="thankyou.php">
					<div class="form-group">
                        

						<label for="name" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-8 control-label"><input type="checkbox" value="" name="moreinfo"> Quiero recibir más información</label>
                            
                        <div class="col-sm-4">
							<input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
