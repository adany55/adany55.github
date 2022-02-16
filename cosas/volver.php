<!DOCTYPE html >
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=decive-width,user-scalable=no,initial-scale=1,maximun-scale=1,minimun-scale=1">
  <title>Formulario </title>
</head>


<body background="verde_2.jpg">
  <center>
<?php
$conection= mysqli_connect('localhost', 'root', '', 'gps') or die("Error De Conexion");

$query = " SELECT MAX(folio_gps) AS ult_id FROM Entrando";

if ($stmt = $conection->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($folio_gps);
    while ($stmt->fetch()) {

 

echo "<script>alert('Este es tu folio :$folio_gps')</script>";
        
    
    }
    $stmt->close();
}



    ?>
    <br><font color="white">
    <br>
<form   action="agregar.html" , method="POST">
      <h1>Registro guardado</h1>


  



  <input type="submit" name="enviar"  value="Volver">

</form>

  <div align="right"> ©Daniel Alejandro 
  </div>
</center>
</body>
</html>