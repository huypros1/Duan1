<aside class="profile-sidebar">
        <ul class="profile-menu">
          <li class="<?= $_GET['act'] == 'course' ? 'active' : '' ?>">
            <a href="?ctrl=user&act=course">Khóa học của tôi</a>
        </li>
          <li class="<?= $_GET['act'] == 'profile' ? 'active' : '' ?>">
            <a href="?ctrl=user&act=profile">Thông tin cá nhân</a>
          </li>
          <li class="<?= $_GET['act'] == 'password' ? 'active' : '' ?>">
            <a href="?ctrl=user&act=password">Đổi mật khẩu</a>
        </li>
        </ul>
      </aside>