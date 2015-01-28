<?php
/*
Web2PD v0.1 - Simple Version
---------
Este script envia valores a Pure Data (http://www.puredata.info) 
a traves del protocolo TCP (para UDP anteponer "udp://" en la variable $web2pd_host).

Desarrollado por Ludique LABS - http://www.ludique.cl/labs

Licencia: 
La licencia de este software te permite compartirlo, modificarlo, usarlo en cualquier país en el mundo, incluso venderlo si no le niegas a nadie hacer lo mismo.

*/

/******************************
    	CONFIGURACION
******************************/
/* Host  */
$web2pd_host = "192.168.0.20";
/* Port */
$web2pd_puerto = 13009;


/**** FIN CONFIGURACION *****/

if(isset($_GET["value"])) {
	$mensaje = $_GET["value"];
} else if (isset($_POST["value"])) {
	$mensaje = $_POST["value"];
} else {
	$mensaje = "Error: No se encontro un valor GET o POST!";
}

$fp = fsockopen($web2pd_host,$web2pd_puerto);


function enviarDatos($fp, $mensaje) {
    for ($escrito = 0; $escrito < strlen($mensaje); $escrito += $fwrite) {
		$mensaje = $mensaje.";\\n";
        $fwrite = fwrite($fp, substr($mensaje, $escrito));
        if (!$fwrite) {
            return $fwrite;
        }
    }
    return $escrito;
}

enviarDatos($fp, $mensaje);

