<html>
    <head>
    </head>
    <body bgcolor="#f0f0f0">
        <h1><center>Datos obtenidos</center></h1>   

        

        <table border="3">
            
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>email</td>
            <td>celular</td>
            <td>mensaje</td>
            <td>compañia</td>

            </tr>


<?php
$conection= mysqli_connect('127.0.0.1', 'root', '', 'gps') or die("Error De Conexion");

$query = "SELECT * from entrando ";
$result=mysqli_query($conection,$query);

while($mostrar=mysqli_fetch_array($result)){


[]
    ?>
    <tr>
        
            <td><?php echo $mostrar['folio_gps']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['celular']?></td>
            <td><?php echo $mostrar['mensaje']?></td>
            <td><?php echo $mostrar['compan']?></td>
    </tr>
<?php
}
?>
    </table>         
       
              
                   
 </body>
    </html>