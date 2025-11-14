<main class="course-page">
      <form method="GET" class="sidebar">
        <input type="hidden" name="ctrl" value="course" />
        <input type="hidden" name="act" value="list" />
        <h3>Lọc khóa học</h3>
        
        <input type="text" placeholder="Tìm theo tên..."name="keyword" class="search-bar" value="<?= $keyword != '' ? $keyword : '' ?>" />

        <button type="submit" class="btn">Tìm ki</button>

        <div class="filter-group">
          <h4>Tên giảng viên</h4>
          <?php foreach ($teacherList as $t): ?>
          <label>
            <input type="checkbox" name="teacher[]" value="<?= $t['id']  ?>"
            <?= array_search($t['id'], $teacher) !== false ? 'checked' : '' ?>/>
            <?= $t['name'] ?>
        </label>
          <?php endforeach; ?>
        </div>

        <div class="filter-group">
          <h4>Danh mục</h4>
          <?php foreach ($categoryList as $c): ?>
          <label>
            <input type="checkbox" value="<?= $c['id'] ?>"
            <?= array_search($c['id'], $category) !== false ? 'checked' :'' ?> />
            <?= $c['name'] ?>
          </label>
          <?php endforeach; ?>

        </div>

        <div class="filter-group">
          <h4>Sắp xếp theo</h4>
          <select name="sort">
            <option value="price ASC"<?= $sort == 'price ASC' ? 'selected' : '' ?>> Giá tăng dần</option>
            <option value="price DESC" <?= $sort == 'price DESC' ? 'selected' : '' ?>> Giá giảm dần</option>
            <option value="id ASC" <?= $sort == 'id ASC' ? 'selected' : '' ?>>Mới nhất</option>
            <option value="id DESC"<?= $sort == 'id DESC' ? 'selected' : '' ?>> Cũ nhất</option>
          </select>
        </div>
      </form>

      <div class="course-list">
        <!-- Một dòng 4 box khóa học -->
        <div class="courses">
          <?php foreach ($courseList as $course): ?>
          <div class="course">
            <img src="public/img/<?= $course['image']?>" alt="<?= $course['title']?>" />
            <h3><?= $course['title']?></h3>
            <p><?= number_format($course['price'])?> </p>
            <a href="?ctrl=course&act=detail&id=<?= $course['id']?>"class="btn">Đăng ký</a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </main>