<main class="course-detail">
  <div class="detail-container">
    <img src="public/img/<?= $course['image'] ?>" alt="Hình ảnh khóa học" />
    <div class="detail-info">
      <h2><?= $course['title'] ?></h2>
      <p class="price">Giá: <?= number_format($course['price']) ?>đ</p>
      <p class="teacher">Giảng viên: <?= $course['teacher_name'] ?></p>
      <p class="description">
        <?= $course['description'] ?>
      </p>
      <!-- Hiện 1 trong 2 nút sau -->
      <a href="?ctrl=course&act=register&id=<?= $course['id'] ?>" class="btn">Đăng ký ngay</a>
      <a href="?ctrl=learn&act=detail&id=<?= $course['id'] ?>" class="btn">Vào học</a>
    </div>
  </div>
  <section class="lesson-section">
    <h3>Danh sách bài học</h3>
    <div class="accordion">
      <?php foreach ($lessonList as $lesson): ?>
        <div class="accordion-item">
          <button class="accordion-btn">
            <?= $lesson['title'] ?>
          </button>
          <div class="accordion-content">
            <p>
              <?= $lesson['content'] ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>