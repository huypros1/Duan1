

    <main class="dashboard-page">
      <!-- Sidebar trái: menu dọc -->
      <?php include_once "./Views/layout_teacher_sidebar.php"; ?>
      <section class="dashboard-content">
        <h2>Sửa khóa học</h2>

        <form method="POST" action="?ctrl=teacher&act=postUpdateCourse&id=<?= $course['id']?>" class="create-course-form" enctype="multipart/form-data">
          <!-- Cột trái -->
          <div class="form-column">
            <label for="title">Tên khóa học</label>
            <input type="text" id="title" name="title"required  value="<?= $course['title']?>" />

            <label for="category">Danh mục</label>
            <select id="category" required name="category">
              <?php foreach ($categoryList as $category): ?>
              <option value="<?= $category['id']?>" <?= $category['id'] == $course['category_id'] ? 'selecteed' : '' ?>><?= $category['name']?></option>
              <?php endforeach; ?>
            </select>

            <label for="price">Giá khóa học (VNĐ)</label>
            <input type="number" id="price" required name="price" value="<?= $course['price']?>" />
          </div>

          <!-- Cột phải -->
          <div class="form-column">
            <label for="description">Mô tả khóa học</label>
            <textarea id="description" rows="5" required name="description" value="<?= $course['description']?>">

      </textarea
            >

            <label for="thumbnail">Cập nhật ảnh đại diện</label>
            <img src="public/img/<?= $course['image']?>" alt="" width="100%">
            <input type="file" id="thumbnail" accept="image/*" name="image"/>

            <button type="submit">Lưu thay đổi</button>
          </div>
        </form>

        <!-- Danh sách bài học -->
        <h3>Danh sách bài học</h3>
        <a href="teacher_course_create_lesson.html" class="btn add-lesson-btn"
          >+ Thêm bài học</a
        >

        <table class="lesson-table">
          <thead>
            <tr>
              <th>Tên bài học</th>
              <th>Thời lượng</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bài 1: Giới thiệu HTML & cài môi trường</td>
              <td>15 phút</td>
              <td>
                <a href="teacher_course_update_lesson.html" class="btn btn-sm"
                  >Sửa</a
                >
                <a href="#" class="btn btn-sm">Xóa</a>
              </td>
            </tr>
            <tr>
              <td>Bài 2: Cấu trúc trang HTML cơ bản</td>
              <td>20 phút</td>
              <td>
                <a href="teacher_course_update_lesson.html" class="btn btn-sm"
                  >Sửa</a
                >
                <a href="#" class="btn btn-sm">Xóa</a>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>

   