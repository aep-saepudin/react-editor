<?php 

 header("Access-Control-Allow-Origin: *");

/**
* get and request data class
*/

class getdata {

	var $customer_id;

   	function getDataCustomer(){
   		session_start();
		$_SESSION['customer_id'] = $_POST['customer_id'];
		$customer_id = $_SESSION['customer_id'];
		return $customer_id;
	}
}
 
$data = new getdata();
echo $data->getDataCustomer();

?>