<?php
include_once "./Models/Database.php";
class Payment
{
  private $db;
  private $vnp_TmnCode = "0OVZRI18"; //Mã định danh merchant kết nối (Terminal Id)
  private $vnp_HashSecret = "WLY9GGB9K2N7R1NGQXF07EAKKE303D18"; //Secret key
  private $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
  private $vnp_Returnurl = "http://localhost/XTH-EzCode-Ca1/?ctrl=payment&act=result";
  // $vnp_Returnurl = "http://localhost/vnpay_php/vnpay_return.php";
  private $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
  private $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
  private $expire;
  function __construct()
  {
    $this->db = new Database();
    //Config input format
    //Expire
    $startTime = date("YmdHis");
    $this->expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));
  }

  function create($order_id, $amount)
  {
    $vnp_TxnRef = rand(1, 10000) . '-' . $order_id; //Mã giao dịch thanh toán tham chiếu của merchant
    $vnp_Amount = $amount; // Số tiền thanh toán
    $vnp_Locale = 'vi'; //Ngôn ngữ chuyển hướng thanh toán
    $vnp_BankCode = ''; //Mã phương thức thanh toán
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán

    $inputData = array(
      "vnp_Version" => "2.1.0",
      "vnp_TmnCode" => $this->vnp_TmnCode,
      "vnp_Amount" => $vnp_Amount * 100,
      "vnp_Command" => "pay",
      "vnp_CreateDate" => date('YmdHis'),
      "vnp_CurrCode" => "VND",
      "vnp_IpAddr" => $vnp_IpAddr,
      "vnp_Locale" => $vnp_Locale,
      "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
      "vnp_OrderType" => "other",
      "vnp_ReturnUrl" => $this->vnp_Returnurl,
      "vnp_TxnRef" => $vnp_TxnRef,
      "vnp_ExpireDate" => $this->expire
    );

    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
      $inputData['vnp_BankCode'] = $vnp_BankCode;
    }

    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
      if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
      } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
      }
      $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }

    $vnp_Url = $this->vnp_Url . "?" . $query;
    if (isset($this->vnp_HashSecret)) {
      $vnpSecureHash =   hash_hmac('sha512', $hashdata, $this->vnp_HashSecret); //  
      $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }
    header('Location: ' . $vnp_Url);
    die();
  }

  function secure()
  {
    $vnp_SecureHash = $_GET['vnp_SecureHash'];
    $inputData = array();
    foreach ($_GET as $key => $value) {
      if (substr($key, 0, 4) == "vnp_") {
        $inputData[$key] = $value;
      }
    }

    unset($inputData['vnp_SecureHash']);
    ksort($inputData);
    $i = 0;
    $hashData = "";
    foreach ($inputData as $key => $value) {
      if ($i == 1) {
        $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
      } else {
        $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
        $i = 1;
      }
    }

    $secureHash = hash_hmac('sha512', $hashData, $this->vnp_HashSecret);
    if ($secureHash == $vnp_SecureHash) {
      if ($_GET['vnp_ResponseCode'] == '00') {
        return "success";
        // echo "<span style='color:blue'>GD Thanh cong</span>";
      } else {
        // echo "<span style='color:red'>GD Khong thanh cong</span>";
        return "fail";
      }
    } else {
      // echo "<span style='color:red'>Chu ky khong hop le</span>";
      return "error";
    }
  }
}
