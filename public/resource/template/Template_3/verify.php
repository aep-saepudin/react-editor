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
$transidmerchant = $_POST["TRANSIDMERCHANT"]; 
$totalamount     = $_POST["AMOUNT"]; 
if ($_SERVER['REMOTE_ADDR'] ='103.10.128.11') {
    $sql_cek = "SELECT id, totalamount FROM qw_doku WHERE transidmerchant ='".$transidmerchant."' and totalamount = '".$totalamount."' and trxstatus = 'Requested'";
    $query_cek = mysqli_query($link,$sql_cek);
    
    if($query_cek){
       $num_rows = mysqli_num_rows($query_cek);
       if($num_rows > 0){
           $true = 1;
       }
    }
    
    $time = ('Y-m-d h:i:s');
    if($true == 1){
        $sql_update =  "UPDATE qw_doku set trxstatus ='Verify',payment_date_time='".$time."' WHERE transidmerchant='".$transidmerchant."'";
        $query_update = mysqli_query($link,$sql_update);
        if($query_update){
            $response = "Continue";
        }else{
            $response = "Stop";
        }
    }else{
        $response = "Stop";
    }
    echo $response;
}else{
    $sql_injection = "UPDATE qw_doku set trxstatus='FAILED - INJECTION DETECTED', payment_date_time='".$time."' where transidmerchant='".$transidmerchant."'";
    $query_injection = mysqli_query($link,$sql_injection);
    echo "Stop";
} 

?>	

