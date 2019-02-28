<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


require_once "include/config.php";

echo "<pre>";



$seller_items_Api = new \CNovaApiLojistaV2\SellerItemsApi($api_client);

try {

    $get_seller_items_response = $seller_items_Api->getSellerItems('EX', 0, 100);
    var_dump($get_seller_items_response);

} catch (ApiException $e) {
    echo ($e->getMessage());
}




 ?>
