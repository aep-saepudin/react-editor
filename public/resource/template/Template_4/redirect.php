<?php
$order_number = $_GET['TRANSIDMERCHANT'];
$purchase_amt = $_GET['AMOUNT'];
$status_code = $_GET['STATUSCODE'];
$words = $_GET['WORDS'];
$paymentchannel = $_GET['PAYMENTCHANNEL'];
$session_id = $_GET['SESSIONID'];
$paymentcode = $_GET['PAYMENTCODE'];
$responsecode = $_GET['RESPONSECODE'];
$approvalcode = $_GET['APPROVALCODE'];
$verify_id = $_GET['VERIFYID'];
$verify_score = $_GET['VERIFYSCORE'];
$verify_status = $_GET['VERIFYSTATUS'];
$msg = $_GET['MSG'];

$dokuform="<form name=\"param_pass\" id=\"param_pass\" method=\"post\" action=\"$domain/result.php\">\n"; //example redirect link

$dokuform.="<input name=\"order_number\" type=\"hidden\" id=\"order_number\" value=\"$order_number\">\n";
$dokuform.="<input name=\"purchase_amt\" type=\"hidden\" id=\"purchase_amt\" value=\"$purchase_amt\">\n";
$dokuform.="<input name=\"status_code\" type=\"hidden\" id=\"status_code\" value=\"$status_code\">\n";
$dokuform.="<input name=\"words\" type=\"hidden\" id=\"words\" value=\"$words\">\n";
$dokuform.="<input name=\"paymentchannel\" type=\"hidden\" id=\"paymentchannel\" value=\"$paymentchannel\">\n";
$dokuform.="<input name=\"session_id\" type=\"hidden\" id=\"session_id\" value=\"$session_id\">\n";
$dokuform.="<input name=\"paymentcode\" type=\"hidden\" id=\"paymentcode\" value=\"$paymentcode\">\n";
$dokuform.="<input name=\"responsecode\" type=\"hidden\" id=\"responsecode\" value=\"$responsecode\">\n";
$dokuform.="<input name=\"approvalcode\" type=\"hidden\" id=\"approvalcode\" value=\"$approvalcode\">\n";
$dokuform.="<input name=\"verify_id\" type=\"hidden\" id=\"verify_id\" value=\"$verify_id\">\n";
$dokuform.="<input name=\"verify_score\" type=\"hidden\" id=\"verify_score\" value=\"$verify_score\">\n";
$dokuform.="<input name=\"verify_status\" type=\"hidden\" id=\"verify_status\" value=\"$verify_status\">\n";
$dokuform.="<input name=\"msg\" type=\"hidden\" id=\"msg\" value=\"$msg\">\n";

$dokuform.="</form>\n";
$dokuform.="<script language=\"JavaScript\" type=\"text/javascript\">";
$dokuform.="document.getElementById('param_pass').submit();";
$dokuform.="</script>";

//FIREFOX FIX
$redirect_url = str_replace('&amp;', '&', $redirect_url);

?>
<body>
<?php print $dokuform; ?>
<noscript>
If you are not redirected please <a href="<?php echo $redirect_url; ?>">click here</a> to confirm your order.
</noscript>
</body>