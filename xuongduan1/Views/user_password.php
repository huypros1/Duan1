<main class="profile-page">
      <!-- Sidebar trái: menu dọc -->
      <?php include_once "./Views/layout_user_sidebar.php"; ?>

      <!-- Nội dung bên phải: danh sách khóa học -->
      <section class="profile-content">
        <h2>Đổi mật khẩu</h2>
        <form class="change-password-form">
          <label for="current-password">Mật khẩu hiện tại</label>
          <input
            type="password"
            id="current-password"
            placeholder="Nhập mật khẩu hiện tại..."
            required
          />

          <label for="new-password">Mật khẩu mới</label>
          <input
            type="password"
            id="new-password"
            placeholder="Nhập mật khẩu mới..."
            required
          />

          <label for="confirm-password">Nhập lại mật khẩu mới</label>
          <input
            type="password"
            id="confirm-password"
            placeholder="Nhập lại mật khẩu mới..."
            required
          />

          <button type="submit">Đổi mật khẩu</button>
        </form>
      </section>
    </main>