<?php

require_once "controllers/get.controller.php";

$table = explode("?", $routerArray[1][0]);

$select = $_GET["select"] ?? '*';

$respose = new GetController();
$respose->getData($table, $select);