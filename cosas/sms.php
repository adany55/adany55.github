<?php


$varnumorigen = $_POST['numorigen']; // e-mail del remitente tomado desdel el form.
$varnomemp = $_POST['nomemp']; // empresa de telefonía (destino) - idem.
$varnumdestino = $_POST['numdestino']; // numero de celular (destino) - idem.


// procesamos el select del formulario html, con switch desde php.

switch($varnomemp)
{
case "personal": // personal
$empresa = "@mc.Zupersat.com"; // "case" valor "personal" - lo asigno a $empresa.
break;
case "movistar2": // cti digital
$empresa = "@mms.movistar.mx";
break;
case "ctig": // cti gsm
$empresa = "@sms.ctimovil.com.ar";
break;
case "movistar": // movistar ex-unifon
$empresa = "@internet.movistar.mx";
break;
case "movistarm": // movistar ex movicom
$empresa = "@movimensaje.com.ar";
break;
case "movistarg": // movistar genérico
$empresa = "@sms.movistar.net.ar";
break;
case "nextel":
$empresa = "@nextel.net.ar";
break;
case "skytel":
$empresa = "@skytel.com.ar";
break;
case "conectel":
$empresa = "@conectel.com.ar";
break;
default; 
echo "empresa incorrecta - seleccione nuevamente";
break;
}
$titulo = "sms web"; // titulo que aparecerá en el sms del destinatario
$headers = "From: " . $_POST['nombre'];
$headers .= "<" . $varnumorigen . ">\\r\\n"; // e-mail del remitente (esto es 100% obligatorio)
$headers .= "Reply-To: " . $varnumorigen; // esta campo no es obligatorio, pero queda bien :)
$mensaje = $_POST['mensaje']; // esta variable contiene el mensaje que enviamos, captado desde el formulario
$destino = $varnumdestino.$empresa; // concateno el numero de celular con la empresa

                                        $mailin = new Mailin('adany5151@gmail.com', 'YhDvxQq1RnwjHF7V');
                                        $mailin->
                                        addTo('adany5151@gmail.com', 'Dany Alex')->
                                        setFrom('adany5151@gmail.com', 'Dany Alex')->
                                        setReplyTo('adany5151@gmail.com','Dany Alex')->
                                        setSubject('Escriba el asunto aquí')->
                                        setText('Hola')->
                                        setHtml('<strong>Hola</strong>');
                                        $res = $mailin->send();
                                        /**
                                        El mensaje de éxito será enviado de esta forma:
                                        {'result' => true, 'message' => 'E-mail enviado'}
                                        */
                                        
if(mail($destino, $titulo, $mensaje,$headers)){
            print "<p></p>";
            echo "sms enviado!";
        } else {
            print "Error en el envío de su correo, intentarlo más tarde<br>";
        }

require("ver.php");

?>