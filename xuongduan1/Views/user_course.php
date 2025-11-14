<main class="profile-page">
      <!-- Sidebar trái: menu dọc -->
      <?php include_once "./Views/layout_user_sidebar.php";
      ?>
      <!-- Nội dung bên phải: danh sách khóa học -->
      <section class="profile-content">
        <h2>Khóa học đang tham gia</h2>

        <div class="courses">
          <?php foreach ($courseList as $course): ?>
          <div class="course">
            <img src="public/img/<?= $course ['image'] ?>" alt="<?= $course['title']?>" />
            <h3><?= $course['title']?></h3>
            <p><?= $course['price']?></p>
            <a href="?ctrl=learn&act=detail&id=<?= $course['id']?>" class="btn">Tiếp tục học</a>
          </div>
         <?php endforeach; ?>
          <!-- Thêm tối đa 4 khóa học mỗi dòng -->
        </div>
      </section>
    </main>