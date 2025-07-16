<?php
/*===================================================================
    * Webhook para recibir notificaciones de Facebook
    *
    * Este script se utiliza para recibir notificaciones de eventos de Facebook
    * a través de un webhook. Asegúrate de configurar correctamente el token
    * en la plataforma de Meta.
====================================================================*/

$token ="1234abcd";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["hub_verify_token"])){

    if ($_GET["hub_verify_token"] == $token){

        echo $_GET["hub_challenge"];

        exit;

    } else {

        echo "Token Inválido";

        exit;

    }
}
/* =================================================================
RECIBIR RESPUESTA DE LA API DE WHATSAPP
====================================================================*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = file_get_contents("php://input");

    file_put_contents("webhook_log.txt", $input."\n\n", FILE_APPEND);

}
?>