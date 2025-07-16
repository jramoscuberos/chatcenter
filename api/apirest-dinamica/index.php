<?php

/*=================================================
MOSTRAR ERRORES
==================================================*/

ini_set('display_errors', 1);
ini_set('log_startup_errors', 1);
ini_set("error_log", "D:/xampp/htdocs/chatcenter/api/apirest-dinamica/php_error.log");

/*=================================================
REQUERIMIENTOS
==================================================*/

/*probar si funciona con require_once la base de datos
-------------------------------------------------------------------------------
require_once "models/connection.php";
echo "<pre>"; print_r(connection::infoDatabase()["database"]); echo "</pre>";
return;
--------------------------------------------------------------------------------*/

require_once "controllers/routes.controller.php";

$index = new RoutesController();
$index -> index();