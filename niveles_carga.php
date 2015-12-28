<?php
include("conexion.php");

  /* Empieza la sesión */
    session_start();
 
    /* se crea la sesión */
    $_SESSION['username'] = $_POST['username'];
 
    /* Si no hay una sesión creada, redireccionar al index. */
    if(empty($_SESSION['username'])) { 
        header('Location: index.html');
    }

$query = "INSERT INTO niveles (tx, rx,mer,usuario, fecha) 
VALUES ('$_POST[tx]', '$_POST[rx]', '$_POST[mer]', '$_POST[username]', '$_SESSION[username]', NOW())";
if(!$mysqli->query($query)){
	 echo "Falló la operación: (" . $mysqli->errno . ") " . $mysqli->error;
	}else
	{
	  header('location.href = index.html');
	}

/*$query = "INSERT INTO niveles (tx) 
VALUES (100)";
if(!$mysqli->query($query)){
	 echo "Falló la operación: (" . $mysqli->errno . ") " . $mysqli->error;
	}else {
		
    
    header('location.href = index.html');
  
	}*/



?>
