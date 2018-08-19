<?php
//1. Database connections
//Please fill in your database detail on this file : 
//dbconnect.ini.php
$file = file_get_contents('scid.txt');
$file = json_decode($file);

$cid = $file->cid;
$layanan_id = $file->layanan_id;
$dbname = $file->db->dbname;
$dbuser = $file->db->dbuser;
$dbpass = $file->db->dbpass;

$link = mysqli_connect("localhost", "buildweb_".$dbuser, $dbpass, "buildweb_".$dbname);

$ip_range = "103.10.129.";
if ( $_SERVER['REMOTE_ADDR'] != '182.253.5.91' && (substr($_SERVER['REMOTE_ADDR'],0,strlen($ip_range)) !== $ip_range) )
{
    if($_POST['TRANSIDMERCHANT']) {
        $order_number = $_POST['TRANSIDMERCHANT'];    
	}else{ 
		$order_number = 0; 
	}
    
	$totalamount       = $_POST['AMOUNT'];
	$words             = $_POST['WORDS'];
	$statustype        = $_POST['STATUSTYPE'];
	$response_code     = $_POST['RESPONSECODE'];
	$approvalcode      = $_POST['APPROVALCODE'];
	$status            = $_POST['RESULTMSG'];
	$paymentchannel    = $_POST['PAYMENTCHANNEL'];
	$paymentcode       = $_POST['PAYMENTCODE'];
	$session_id        = $_POST['SESSIONID'];
	$bank_issuer       = $_POST['BANK'];
	$cardnumber        = $_POST['MCN'];
	$payment_date_time = $_POST['PAYMENTDATETIME'];
	$verifyid          = $_POST['VERIFYID'];
	$verifyscore       = $_POST['VERIFYSCORE'];
	$verifystatus      = $_POST['VERIFYSTATUS'];
	
	// Basic SQL

	$sql_checkout = "SELECT transidmerchant,totalamount FROM qw_doku WHERE transidmerchant='".$order_number."'and trxstatus='Requested'";
	$checkout = mysql_fetch_array(mysql_query($sql_checkout));
	
	$hasil  = $checkout['transidmerchant'];
	$amount = $checkout['totalamount'];

	// Custom Field

	if (!$hasil) {
	  echo 'Stop1';
	} else {
		if ($status=="SUCCESS") {
			$sql_success = "UPDATE qw_doku SET trxstatus='Success', words='$words', statustype='$statustype', response_code='$response_code', approvalcode='$approvalcode',
			trxstatus='$status', payment_channel='$paymentchannel', paymentcode='$paymentcode', session_id='$session_id', bank_issuer='$bank_issuer', creditcard='$cardnumber',
			payment_date_time='$payment_date_time', verifyid='$verifyid', verifyscore='$verifyscore', verifystatus='$verifystatus' where transidmerchant='$order_number'";
        
			$result = mysql_query($sql_success) or die ("Stop2");
		} else {
 		  $sql_failed = "UPDATE qw_doku set trxstatus='Failed' where transidmerchant='".$order_number."'";
		  $result = mysql_query($sql_failed) or die ("Stop3");
		}
		echo 'Continue';
	}
	mysql_close();
}
dbdisconnect();
?>