<?php

require_once('conexion.php');
if($API->connect($ip, $usuario, $password)){
    $getInterfaces = $API->comm("/interface/print");
    $totalRegistros = count($getInterfaces);
    $response[]= array();

    for ($i=0; $i < $totalRegistros; $i++) { 
        $interface=$getInterfaces[$i];
        $response[]=$interface;
    }

    print json_encode($response);
}else{
    print json_encode("Error de conexión");
}
?>