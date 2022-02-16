<?php  
// ngrok http http://localhost:80/ 

 $con=mysqli_connect('localhost','root','','gps') or die("Error en la conexion del servicio");

 $sql=" INSERT INTO entrando
  VALUES
  (null,'".$_POST["nombre"]."','".$_POST["email"]."','".$_POST["numero"]."','".$_POST["mensaje"]."','".$_POST["imei"]."','".$_POST["telefonia"]."' )";
 

 $resul=mysqli_query($con,$sql) or die ("no lo manda ");
  mysqli_close($con);

require("volver.php");


?>