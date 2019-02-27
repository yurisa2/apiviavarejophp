<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


require_once "include/config.php";

echo "<pre>";



var_dump($api_client);


$loads_api = new \CNovaApiLojistaV2\LoadsApi($api_client);

var_dump($loads_api);

try {

	$get_products_response = $loads_api->getProducts(null, null, 0, 10);
	var_dump($get_products_response);

} catch (ApiException $e) {

	$errors = deserializeErrors($e->getResponseBody(), $api_client);

	if ($errors != null) {
		foreach ($errors->errors as $error) {
			echo ($error->code . ' - ' . $error->message . "\n");
		}
	} else {
		echo ($e->getMessage());
	}

}


 ?>
