<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EzCode - Khóa học trực tuyến</title>
    <link rel="stylesheet" href="public/css/style.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="logo">
        <a href="?ctrl=page&act=home"
          ><img src="public/img/Logo.png" alt="Logo" style="width: 140px"
        /></a>
      </div>
      <button id="menu-toggle" class="menu-toggle">&#9776;</button>
      <form method="GẺt" class="search-form">
        <input type="hidden" name="ctrl" value="course" />
        <input type="hidden" name="act" value="list" />
      <input type="search" placeholder="Tìm khóa học..." name="keyword" />
    </form>
      <nav id="main-menu">
        <ul>
          <li><a href="?ctrl=page&act=home">Trang chủ</a></li>
          <li><a href="?ctrl=course&act=list">Khóa học</a></li>
           
          <li><a href="?ctrl=user&act=register">Đăng ký</a></li>
          <li><a href="?ctrl=user&act=login">Đăng nhập</a></li>
         
          <li><a href="?ctrl=user&act=profile">Tài khoản</a></li>
          
          <li><a href="?ctrl=teacher&act=course">Quản lý khóa học</a></li>
          
          <li><a href="?ctrl=user&act=logout">Đăng xuất </a></li>
          
        </ul>
      </nav>
    </header>

    <?php if (isset($_SESSION['info'])): ?>
      <div style="color: green; text-align: center; margin-top: 20px;">
        <?php echo $_SESSION['info']; unset($_SESSION['info']); ?>
      </div>
    <?php unset($_SESSION['info']); endif; ?>
      

    