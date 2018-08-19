<?php 

 header("Access-Control-Allow-Origin: *");

/**
* get and request data class
*/

$var = $_GET['i'];
if($var == 'data'){
	$data = file_get_contents("scid.txt");
	$data = json_decode($data, true);

	$cid = $data['cid'];
	$layanan_id = $data['layanan_id'];
	$customer_id = $_POST['customer_id'];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://build.web.id/api/customers/getCustomerdatabyId/");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"client_id=".$cid."&service_id=".$layanan_id."&customer_id=".$customer_id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
	$arr = json_decode($server_output, true);
	$customer = $arr['data']['firstname'].' '.$arr['data']['lastname'];

	$scid = $_POST['cid'];
	$slayanan_id = $_POST['layanan_id'];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://build.web.id/api/cart/content/");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"client_id=".$scid."&service_id=".$slayanan_id."&customer_id=".$customer_id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
	$arr = json_decode($server_output, true);
	$count_cart = $arr['count'];
	
	$result = array(
		"customer" => $customer,
		"count_cart" => $count_cart,
	);

	echo json_encode($result);
}

if($var == 'data'){
	$data = file_get_contents("scid.txt");
	$data = json_decode($data, true);

	$cid = $data['cid'];
	$layanan_id = $data['layanan_id'];
	$customer_id = $_POST['customer_id'];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://build.web.id/api/customers/getCustomerdatabyId/");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"client_id=".$cid."&service_id=".$layanan_id."&customer_id=".$customer_id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
	$arr = json_decode($server_output, true);
	$customer = $arr['data']['firstname'].' '.$arr['data']['lastname'];

	$scid = $_POST['cid'];
	$slayanan_id = $_POST['layanan_id'];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://build.web.id/api/cart/content/");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"client_id=".$scid."&service_id=".$slayanan_id."&customer_id=".$customer_id);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
	$arr = json_decode($server_output, true);
	$count_cart = $arr['count'];
	
	$result = array(
		"customer" => $customer,
		"count_cart" => $count_cart,
	);

	echo json_encode($result);
}

?>