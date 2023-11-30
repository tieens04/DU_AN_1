<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');  
$vnp_TmnCode = "JJHC9QFM"; //Mã định danh merchant kết nối (Terminal Id)
$vnp_HashSecret = "JFDMCNMJGUIXVQNHYKHPRDBGZHSPUEHZ"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost:3000/vnpay_php/vnpay_return.php";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+2 minutes',strtotime($startTime)));