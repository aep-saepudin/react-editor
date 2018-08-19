<?php
require_once('../core/Doku.php');

//get doku_shared_key
$data = file_get_contents("../../scid.txt");
$data = json_decode($data, true);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://build.web.id/api/setting/getPaymentByCode/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"client_id=".$data['cid']."&service_id=".$data['layanan_id']."&code=doku");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
$server_output = json_decode($server_output, true);
$doku_shared_key = $server_output['data']['doku_shared_key'];

//Doku_Initiate::$sharedKey = 'k8UhY5t4RF4e';
Doku_Initiate::$sharedKey = $doku_shared_key;
Doku_Initiate::$mallId = $_POST['mallid'];
$amount=$_POST['amount'];
$invoice=$_POST['invoice'];
$mallid=$_POST['mallid'];
$chain=$_POST['chain'];


$params = array(
    'amount' => $amount,
    'invoice' => $invoice,
    'currency' => '360'
);

$cc = str_replace(" - ", "", $_POST['cc_number']);
$words = Doku_Library::doCreateWords($params);

$customer = array(
    'name' => 'TEST NAME',
    'data_phone' => '08121111111',
    'data_email' => 'test@test.com',
    'data_address' => 'bojong gede #1 08/01'
);

$basket[] = array(
    'name' => 'sayur',
    'amount' => $amount,
    'quantity' => '1',
    'subtotal' => $amount
);

$dataPayment = array(
    'req_mall_id' => $mallid,
    'req_chain_merchant' => $chain,
    'req_amount' => $params['amount'],
    'req_words' => $words,
    'req_purchase_amount' => $params['amount'],
    'req_trans_id_merchant' => $_POST['invoice'],
    'req_request_date_time' => date('YmdHis'),
    'req_currency' => '360',
    'req_purchase_currency' => '360',
    'req_session_id' => sha1(date('YmdHis')),
    'req_name' => $customer['name'],
    'req_payment_channel' => '02',
    'req_email' => $customer['data_email'],
    'req_card_number' => $cc,
    'req_basket' => $basket,
    'req_challenge_code_1' => $_POST['CHALLENGE_CODE_1'],
    'req_challenge_code_2' => $_POST['CHALLENGE_CODE_2'],
    'req_challenge_code_3' => $_POST['CHALLENGE_CODE_3'],
    'req_response_token' => $_POST['response_token'],
    'req_mobile_phone' => $customer['data_phone'],
    'req_address' => $customer['data_address']
);

$response = Doku_Api::doDirectPayment($dataPayment);


if($response->res_response_code == '0000'){
    //echo 'PAYMENT SUCCESS -- ';
    //merchant process
        //do what you want to do

        //process tokenization
        if(isset($responsePayment->res_bundle_token)) {
            $tokenPayment = json_decode($responsePayment->res_bundle_token);

            if ($tokenPayment->res_token_code == '0000') {
                //save token
                $getTokenPayment = $tokenPayment->res_token_payment;
            }
        }

        $data = array(
            'MSG' => $responsePayment->res_response_msg,
            'TRANSIDMERCHANT' => $_POST['doku_invoice_no'], 
            'AMOUNT' => $responsePayment->res_amount, 
            'STATUSCODE' => 17, 
            'WORDS' => $responsePayment->res_words, 
            'PAYMENTCHANNEL' => $responsePayment->res_payment_channel, 
            'SESSIONID' => $responsePayment->res_session_id, 
            'PAYMENTCODE' => $responsePayment->res_payment_channel, 
            'RESPONSECODE' => $responsePayment->res_response_code,
            'APPROVALCODE' => $responsePayment->approvalcode,
            'VERIFYID' => $responsePayment->res_verify_id,
            'VERIFYSCORE' => $responsePayment->res_verify_score,
            'VERIFYSTATUS' => $responsePayment->res_verify_status,
        );
        //redirect process to doku
        //$responsePayment->res_redirect_url = '../example-payment/merchant-redirect-example.php';
        $responsePayment->res_redirect_url = '../../redirect.php?'.http_build_query($data);
        $responsePayment->res_show_doku_page = true; //true if you want to show doku page first before redirecting to redirect url
        
        //example : Response doku to merchant
        //MIPPayment.processRequest ACKNOWLEDGE : {"res_approval_code":"245391","res_trans_id_merchant":"invoice_1461728094","res_amount":"50000.00","res_payment_date_time":"20160427003515","res_verify_score":"-1","res_verify_id":"","res_verify_status":"NA","res_words":"00a22b8d81a731d948605b682578d6a9074de5c47498312cd13abd0ef2f80e7a","res_response_msg":"SUCCESS","res_mcn":"5***********8754","res_mid":"094345145394964","res_bank":"Bank BNI","res_response_code":"0000","res_session_id":"b249a07ff9c5251dddc87997d482836ea3b8affd","res_payment_channel":"15"}        
        
        echo json_encode($responsePayment);
}else{
    echo 'PAYMENT FAILED -- ';
}
// MIPPayment.processRequest ACKNOWLEDGE : {"res_response_msg":"SUCCESS","res_transaction_code":"20c7d99c75ce6418af4aae7bc3f27df8009800ed","res_mcn":"4***********1111","res_approval_code":"2949000000","res_trans_id_merchant":"inline_1461811342","res_payment_date":"20160428164236","res_bank":"Mandiri Click Pay","res_amount":"50000.00","res_message":"PAYMENT APPROVED","res_response_code":"0000","res_session_id":"b4502a7fd29c07026d7a535ed3971fdbc121d53c"}
var_dump($response);


?>