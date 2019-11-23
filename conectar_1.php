<?php

	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "registro";    // sera el valor de nuestra BD 
	$usuariodb = "luis";    // sera el valor de nuestra BD 
	$clavedb = "12345";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "escuela"; 	   // tabla de usuarios
	

	error_reporting(0); //No me muestra errores
	
	$conexion1 = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion1->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

