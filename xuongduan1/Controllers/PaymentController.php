<?php
// Dùng để quản lý các liên quan đến thanh toán
class PaymentController
{
  function result(...$params)
  {
    // Xử lý dữ liệu
    // include_once "./Models/Payment.php";
    // $paymentModel = new Payment();
    // $kq = $paymentModel->secure();
    // print_r($kq);
    echo "<pre>";
    print_r($params);
    echo "</pre>";
    $price = $params['vnp_Amount'] / 100;
    $user_id = explode("-", $params['vnp_TxnRef'])[1];;
    $id = explode("-", $params['vnp_TxnRef'])[2];
    if ($params['vnp_TransactionStatus'] == '00') {
      echo "Thanh toán thành công";
      // Ghi danh vào khóa học
      include_once "./Models/Enrollment.php";
      $enrollmentModel = new Enrollment();
      $enrollmentModel->enroll($user_id, $id, 'student', $price);

      // Chuyển về trang học
      header("Location: ?ctrl=learn&act=detail&id=$id");
    } else {
      echo "Thanh toán thất bại";
      header("Location: ?ctrl=course&act=detail&id=$id");
    }
  }
}

