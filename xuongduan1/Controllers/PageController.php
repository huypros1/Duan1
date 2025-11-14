<?php
// Dùng để quản lý các trang không liên quan
// Vd: Trang chủ, trang liên hệ, trang giới thiệu
class PageController
{
  function home()
  {
    // Xử lý dữ liệu
    // Gọi đến models để xử lý
    // include_once "./Models/Product.php";
    include_once "./Models/course.php";
    $courseModel = new Course();
    $courseList = $courseModel->getAll();
    // $productModel = new Product();
    // $productList = $productModel->getAll();

    // Hiển thị dữ liệu
     include_once "./Views/page_home.php";
  }
  
}
