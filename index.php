<?php
?>
<!DOCTYPE head PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="webroot/css/bootstrap.css">
		<script src="framework/js/bootstrap.js"></script> 
	</head>
	<body>
    	<div class="container-fluid">
    			<div class="col-12">
    				&nbsp;
                </div>
                <div class="row justify-content-center">
                <div class="jumbotron">
                      <h1 class="display-4">Hola</h1>
                      <p class="lead">Por favor, haz click en el botón de abajo para cargar el archivo.</p>
                      <hr class="my-4">
                      <form enctype="multipart/form-data" action="logica.php" method="post">
   							<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                      		<div class="form-group row">
                          		<div class="col-lg-12">
                          		      <input type='file' name = "dat" id = "dat" class="form-control-file">
                          		</div>
                          		<hr class="my-4">	
                          		<div class="col-lg-12">
                          		      <button type="submit" name = "procesar" id = "procesar" value ="procesar" class="form-control btn btn-info" >Procesar</button>
                          		</div>
                          	</div>
                      </form>
                    </div>
                </div>
    	</div>
	</body>
</html>