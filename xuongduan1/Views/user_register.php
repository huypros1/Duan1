<main class="register-page">
      <section class="register-container">
        <h2>Đăng ký</h2>
        <form action="?ctrl=user&act=postRegister" method="post" class="register-form">
          <label for="name">Họ và tên</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Nhập họ và tên..."
            required
          />

          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Nhập email..."
            required
          />

          <label for="password">Mật khẩu</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Nhập mật khẩu..."
            required
          />

          <button type="submit">Đăng ký</button>
        </form>
      </section>
    </main>