<?php
$ip = "172.16.0.1";
$usuario = "apimkt";
$password = "apimkt123";
$puerto = "8728";


include_once('routeros_api.class.php');

$API = new RouterosAPI();
$API->debug = false;
$API->port = $puerto;


?>