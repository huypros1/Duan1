<?php
include_once "./Models/Database.php";
// Dùng để quản lý các trang không liên quan
// Vd: Trang chủ, trang liên hệ, trang giới thiệu
class CourseController
{
  function list($keyword = '', $teacher =[], $category = [], $sort = 'id DESC')
  {
    // Xử lý dữ liệu
    include_once "./Models/Course.php";
    $courseModel = new Course();
    
    // Lấy danh sách khóa học
    $courseList = $courseModel->getAll();
    
    //user
    include_once "./Models/User.php";
    $userModel = new User();
    $teacherList = $userModel->getAllTeacher();
    
    // Danh mục
    include_once "Models/Category.php";
    $categoryModel = new Category();
    $categoryList = $categoryModel->getAllCategory();
  
    
    // Xử lý dữ liệu
    include_once "./Models/Course.php";
    $courseModel = new Course();
    $courseList = $courseModel->fillter($keyword, $teacher, $category, $sort);

    //user
    include_once "./Models/User.php";
    $userModel = new User();
    $teacherList = $userModel->getAllTeacher();
    
    // Danh mục
    include_once "Models/Category.php";
    $categoryModel = new Category();
    $categoryList = $categoryModel->getAllCategory();
    // Hiển thị dữ liệu
    include_once "./Views/course_list.php";
  }
  function detail($id)
  {
    include_once "./Models/Course.php";
    $courseModel = new Course();
    $course = $courseModel->getById($id);

    include_once "./Models/Lesson.php";
    $lessonModel = new Lesson();
    $lessonList = $lessonModel->getAllByCourse($id);

    // hiển thị dữ liệu
    include_once "./Views/course_detail.php";
}
function register($id)
  {
    $user_id = 1; //Giả bộ đang đăng nhập
    // Lấy thông tin khóa học
    include_once "./Models/Course.php";
    $courseModel = new Course();
    $course = $courseModel->getById($id);
    $price = $course['price'];
    // Xử lý thanh toán
    include_once "./Models/Payment.php";
    $paymentModel = new Payment();
    $order_id = $user_id . '-' . $id;
    $paymentModel->create($order_id, 10000);
  }

}
