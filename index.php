<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


require_once "include/config.php";

echo "<pre>";

$sell_items = $rest_client->get("sellerItems");

var_dump($sell_items);

 ?>
