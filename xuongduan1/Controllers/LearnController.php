<?php
include_once "./Models/Database.php";
// Dùng để quản lý các trang không liên quan
// Vd: Trang chủ, trang liên hệ, trang giới thiệu
class LearnController

{
  function detail()
  {
    // Xử lý dữ liệu // Copy từ CourseController trong hàm detail($id)
    include_once "./Models/Course.php";
    $courseModel = new Course();
    $course = $courseModel->getById($id);

    include_once "./Models/Lesson.php";
    $lessonModel = new Lesson();
    $lessonList = $lessonModel->getAllByCourse($id);

    if ($lesson_id == null && count($lessonList) > 0) {
      $lesson_id = $lessonList[0]['id'];
    }
    $lesson = $lessonModel->getById($lesson_id);
    include_once "./Views/learn_detail.php";
  }
}
