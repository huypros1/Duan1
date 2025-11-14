

    <main class="dashboard-page">
      <!-- Sidebar trái: menu dọc -->
      <?php include_once "./Views/layout_teacher_sidebar.php"; ?>
      <section class="dashboard-content">
        <h2>Tạo khóa học mới</h2>
        <form action="?ctrl=teacher&act=postCourse" method="POST" enctype="multipart/form-data" class="create-course-form">
          <!-- Cột trái -->
          <div class="form-column">
            <label for="title">Tên khóa học</label>
            <input
              type="text"
              id="title"
              name="title"
              placeholder="Nhập tên khóa học..."
              required
            />

            <label for="category">Danh mục</label>
            <select id="category" required name="category">
              <?php foreach ($categoryList as $category): ?>
              <option value="<?= $category['id']?>"><?= $category['name']?></option>
              <?php endforeach; ?> 
            </select>

            <label for="price">Giá khóa học (VNĐ)</label>
            <input
              type="number"
              id="price"
              name="price"
              placeholder="Nhập giá..."
              required
            />
          </div>

          <!-- Cột phải -->
          <div class="form-column">
            <label for="description">Mô tả khóa học</label>
            <textarea
              id="description"
              name="description"
              rows="5"
              placeholder="Nhập mô tả chi tiết..."
              required
            ></textarea>

            <label for="thumbnail">Ảnh đại diện</label>
            <input type="file" id="thumbnail" accept="image/*" name="image" />

            <button type="submit">Tạo khóa học</button>
          </div>
        </form>
      </section>
    </main>

   