<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


require_once "include/config.php";

echo "<pre>";
$params = [
  "_offset" => 0,
  "_limit" => 9999
];
$sell_items = $rest_client->get("sellerItems",$params);

var_dump($sell_items);

 ?>
