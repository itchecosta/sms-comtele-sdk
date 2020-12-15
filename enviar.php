<?php 
//require_once "comtele-sdk/textmessage_service.php";
require_once "comtele-sdk/contextmessage_service.php";

$API_KEY = "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX";

$result = send("APPLICATION", "TESTE DE ENVIO", ["99999999999"]);

echo $result;die;
?>