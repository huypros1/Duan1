<?php
// Dùng để quản lý các trang không liên quan
// Vd: Trang chủ, trang liên hệ, trang giới thiệu
class TeacherController
{
  function teacherDashboard()
  {
    // Xử lý dữ liệu
    // Gọi đến models để xử lý
    // include_once "./Models/Teacher.php";
    // $teacherModel = new Teacher();
    // $teacherData = $teacherModel->getDashboardData();

    // Hiển thị dữ liệu
    include_once "./Views/teacher_dashboard.php";
  }
  
    function Course()
    {
        // Xử lý dữ liệu
    $user_id = $_SESSION['user']['id'];
    include_once "./Models/Enrollment.php";
    $enrollmentModel = new Enrollment();
    $courseList = $enrollmentModel->getMyCourseByRole($user_id, 'teacher');
        
        // Hiển thị dữ liệu
        include_once "./Views/teacher_course.php";
    }
    function createCourse()
    {
        include_once "./Models/Category.php";
        $categoryModel = new Category();
        $categoryList = $categoryModel->getAllCategory();
        include_once "./Views/teacher_course_create.php";

    }
    function postCourse()
    {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $file = $_FILES['image'];
        if($file['error'] == 0){
            $image = $file['name'];
            move_uploaded_file($file['tmp_name'], "./public/img/".$image);
        }
        include_once "./Models/Course.php";
        $courseModel = new Course();
        $teacher_id = $_SESSION['user']['id'];
        $course_id = $courseModel->create($teacher_id, $title, $category, $price, $description, $image);
    
    include_once "./Models/Enrollment.php";
    $enrollmentModel = new Enrollment();
    $enrollmentModel->enroll($teacher_id, $course_id, 'teacher', 0);

}
    function updateCourse($id){
    include_once "./Models/Category.php";
    $categoryModel = new Category();
    $categoryList = $categoryModel->getAllCategory();

    include_once "./Models/Course.php";
    $courseModel = new Course();
    $course = $courseModel->getById($id);

    include_once "./Views/teacher_course_update.php";
}
    function postUpdateCourse($id){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $file = $_FILES['image'];
    $image = '';
    if(isset($file) && $file['error'] == 0){
        $image = $file['name'];
        move_uploaded_file($file['tmp_name'], "./public/img/".$image);
    }
    include_once "./Models/Course.php";
    $courseModel = new Course();
    $courseModel->update($id, $title, $category, $price, $description, $image);
    $_SESSION['INFO'] = "Cập nhật khóa học thành công";
    header("Location: ?ctrl=teacher&act=updateCourse&id=$id");
}
}