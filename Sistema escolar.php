<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         
        <meta charset="UTF-8">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
         <?php
        
        session_start();
        ob_start();
       
            ?>
        <header>
            <div class="alert alert-primary">
  <div class="row">
    <div class="col">
  <center> <h1>  <p style= "position:relative;  " > SISTEMA DE GESTION ESCOLAR</p></h1></center>
    </div>
            
            
        </header>
        
       <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
      <center> <h3>  <p>FORMULARIO ESCOLAR</p> </h3>  </center>

      <form method="POST" action="Sistema escolar.php" >
        <div class="form-group">
	    <label for="numero">Numero de escuela</label>
	    <input type="text" name="numero" class="form-control" id="numero">
	</div>

	<div class="form-group">
	    <label for="nombreE">Nombre De Escuela</label>
	    <input type="text" name="nombreE" class="form-control" id="nombreE">
	</div>

   <div class="form-group">
	    <label for="dir">Director </label>
	    <input type="text" name="dir" class="form-control" id="dir">
	</div>

	<div class="form-group">
	    <label for="tel">Telefono </label>
	    <input type="text" name="tel" class="form-control" id="tel">
	</div>
            
        
        <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
        </form>
    
        <?php
       
        
        
        if(isset($_POST['btn1']))
  	{
  		include("conectar_1.php");

  		$numero=$_POST['numero'];
  		$nombreE=$_POST['nombreE'];
  		$dir=$_POST['dir'];
  		$tel=$_POST['tel'];

  		$conexion1->query("INSERT INTO $tabla_db1 (numero,nombreE,director,telefono) values ('$numero','$nombreE','$dir','$tel')");
echo 'se efectuo la el registro';

  		include("cerrar_1.php");
                
                  
  	}
        // put your code here
        ?>
    </div>
  <div class="col-md-4"></div>
</div>
    </body>
</html>
