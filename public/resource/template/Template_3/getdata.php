<?php 
    header("Access-Control-Allow-Origin: *");

	session_start();
	$customer_id = $_SESSION['customer_id'];

	$pageURL = 'http';
 	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 	$pageURL .= "://";
 	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

 	$search = 'https://build.web.id/editor/builder-editor/saved-site/';
 	$pos = strpos($pageURL, $search);
 	if ($pos === false) {
	    echo $customer_id;
	}else{
		echo 1;
	}

?>