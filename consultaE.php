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
        
        
      
        <header>
            
            <div class="alert alert-primary">
  <div class="row">
    <div class="col">
  <center> <h1>  <p style= "position:relative;  " > SISTEMA DE GESTION ESCOLAR</p></h1></center>
    </div>
            
            
        </header>
        
       <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-1">
      <center> <h3>  <p> FORMULARIO ESCOLAR</p> </h3>  </center>

      <form method="POST" action="" >
           
        
            <input type="submit" value="ESCUELAS" class="btn btn-success" name="btn2"><br>
            <br>
        <input type="submit" value="DIRECTORES" class="btn btn-success" name="btn3">
        
        </form>
    
      <center><div style="position: relative; left: 500px; top: -100px " >    <?php
       
       // session_start(); codigo variable local
       // ob_start();
       include("conectar_1.php");
                $numero="";
  		$nombreE= "";
  		$dir="";
  		$tel="";
                
        if(isset($_POST['btn2']))
  	{
  		
                

  		
  		



  		$resultados = mysqli_query($conexion1,"SELECT * FROM $tabla_db1 ");
while($consulta = mysqli_fetch_array($resultados))
{
    echo $consulta['nombreE']."<br>";

}
  		include("cerrar_1.php");
                
                  
  	}
         if(isset($_POST['btn3']))
  	{

        $resultados = mysqli_query($conexion1,"SELECT * FROM $tabla_db1 ");
        while ($consulta = mysqli_fetch_array($resultados))
{
    echo '<CENTER>DIRECTORES</CENTER>';
    echo $consulta['director']."<br>";

}
 
  		include("cerrar_1.php");
                
                  
  	}
        // put your code here
        ?>
          </div></center>
    </div>
  <div class="col-md-4"></div>
</div>
    </body>
</html>