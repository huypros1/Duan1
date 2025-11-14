

    <main class="dashboard-page">
      <!-- Sidebar trái: menu dọc -->
      <?php include_once "./Views/layout_teacher_sidebar.php"; ?>
      <section class="dashboard-content">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Khóa học của tôi</h2>
          <a href="?ctrl=teacher&act=createCourse" class="btn"
            >+ Tạo khóa học mới</a
          >
        </div>

        <h3>Danh sách các khóa học đã tạo</h3>
        <table class="course-table">
          <thead>
            <tr>
              <th>Tên khóa học</th>
              <th>Ngày tạo</th>
              <th>Trạng thái</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($courseList as $course): ?>
            <tr>
              <td><?= $course['title']?></td>
              <td><?= $course['created_at']?></td>
              <td><?= $course['status'] ? 'đang hiển thị' : 'Đang ẩn' ?></td>
              <td>
                <a href="?ctrl=teacher&act=updateCourse&id=<?= $course['id']?>" class="btn btn-sm">Sửa</a>
                <?php if ($course['status']): ?>
                  <a href="#" class="btn btn-sm">Ẩn</a>
                <?php else: ?>
                  <a href="#" class="btn btn-sm">hiện</a>
                  <?php endif; ?>
                
              </td>
            </tr>
            <?php endforeach; ?>
            <!-- Thêm các dòng khác -->
          </tbody>
        </table>
        <div class="pagination">
          <button class="page-btn" data-action="first">« Đầu</button>
          <button class="page-btn" data-action="prev">‹ Trước</button>

          <span class="page-numbers">
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <!-- Có thể thêm nhiều số trang -->
          </span>

          <button class="page-btn" data-action="next">Sau ›</button>
          <button class="page-btn" data-action="last">Cuối »</button>
        </div>
      </section>
    </main>