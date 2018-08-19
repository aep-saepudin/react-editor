<?php
require_once('../core/Doku.php');

date_default_timezone_set('Asia/Jakarta');

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

Doku_Initiate::$sharedKey = $doku_shared_key;
Doku_Initiate::$mallId = $_POST['mall_id'];

$params = array(
    'amount' => $_POST['amount'],
    'invoice' => $_POST['trans_id'],
    'currency' => $_POST['currency']
);

$words = Doku_Library::doCreateWords($params);

$customer = array(
    'name' => 'TEST NAME',
    'data_phone' => '08121111111',
    'data_email' => 'test@test.com',
    'data_address' => 'bojong gede #1 08/01'
);

$dataPayment = array(
    'req_mall_id' => $_POST['mall_id'],
    'req_chain_merchant' => $_POST['chain_merchant'],
    'req_amount' => $params['amount'],
    'req_words' => $words,
    'req_trans_id_merchant' => $_POST['trans_id'],
    'req_purchase_amount' => $params['amount'],
    'req_request_date_time' => date('YmdHis'),
    'req_session_id' => sha1(date('YmdHis')),
    'req_email' => $customer['data_email'],
    'req_name' => $customer['name']
);

$response = Doku_Api::doGeneratePaycode($dataPayment);

if($response->res_response_code == '0000'){
    //echo 'GENERATE SUCCESS -- ';
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
    echo 'GENERATE FAILED -- ';
}

var_dump($response);

?>
