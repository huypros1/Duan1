<?php
// dùng quản lý trang user

class UserController
{
  function login()
  {
   
   include_once "./Views/user_login.php";
  }
  function postLogin(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    include_once "./Models/User.php";
    $userModel = new User();
    $user = $userModel->login($email, $password);
    if ($user)
    {
      $_SESSION['info'] = "đăng nhập thành công";
      $_SESSION['user'] = $user;
      header("Location: ?ctrl=page&act=home");

    }else {
      $_SESSION['error'] = "đăng nhập thất bại";
      
      header("Location: ?ctrl=user&act=login");
    }
    
  }
  function register()
  {
    include_once "./Views/user_register.php";
  }
  function postRegister()
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include_once "./Models/User.php";
    $userModel = new User();
    $user = $userModel->checkEmail($email);
    if($user){
      $_SESSION['error'] = "Email đã được đăng ký";
    header("Location: ?ctrl=user&act=register");
      return;
    }
    $userModel->register($name, $email, $password);
    $_SESSION['info'] = "Đăng ký thành công";
    header("Location: ?ctrl=user&act=login");
  }

  function logout()
  {
    unset($_SESSION['user']);
    $_SESSION['info'] = "Đăng xuất thành công";
    header("Location: ?ctrl=page&act=home");
  }
  function profile()
  {
    include_once "./Views/user_profile.php";
  }
  function course()
  {
    $user_id = $_SESSION['user']['id'];
    include_once "./Models/Enrollment.php";
    $enrollmentModel = new Enrollment();
    $courseList = $enrollmentModel->getMyCourseByRole($user_id, 'student');
    include_once "./Views/user_course.php";
  }
  function password()
  {
    include_once "./Views/user_password.php";
  }
}
