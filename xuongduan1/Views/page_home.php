

    <!-- Banner -->
    <section class="banner">
      <div class="slider">
        <img src="public/img/banner.png" alt="Khóa học EzCode" />
        <img src="public/img/banner.png" alt="Khóa học EzCode" />
        <img src="public/img/banner.png" alt="Khóa học EzCode" />
      </div>
    </section>

    <main>
      <!-- Khóa học -->
      <h2>Khóa học nổi bật</h2>
      <div class="courses">
        <?php foreach($courseList as $course): ?>
        <div class="course">
          <img src="public/img/<?= $course['image'] ?>" alt="<?= $course['title'] ?>" />
          <h3><?= $course['title'] ?></h3>
          <p><?= number_format( $course['price']) ?>đ</p>
          <a href="?ctrl=course&act=detail&id=<?= $course['id']?>"class="btn">Đăng ký</a>
        </div>
        <?php endforeach; ?>
        <!-- Thêm 3 khóa học tương tự -->
      </div>
    </main>

    