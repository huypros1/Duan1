<main class="register-page">
      <section class="register-container">
        <h2>Đăng nhập</h2>
        <form action="?ctrl=user&act=postLogin" method="post" class="register-form">
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

          <button type="submit">Đăng nhập</button>
        </form>
      </section>
    </main>