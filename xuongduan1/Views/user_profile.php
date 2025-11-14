<main class="profile-page">
      <?php include_once "./Views/layout_user_sidebar.php"; ?>
    

      <!-- Nội dung bên phải: danh sách khóa học -->
      <section class="profile-content">
        <h2>Thông tin cá nhân</h2>
        <form method="POST" action="?ctrl=page&act=postProfile" class="personal-form">
          <label for="fullname">Họ và tên</label>
          <input
            type="text"
            id="fullname"
            placeholder="Nhập họ tên..."
            required
          />

          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Nhập email..." required />

          <label for="phone">Số điện thoại</label>
          <input
            type="tel"
            id="phone"
            placeholder="Nhập số điện thoại..."
            required
          />

          <button type="submit">Cập nhật thông tin</button>
        </form>
      </section>
    </main>