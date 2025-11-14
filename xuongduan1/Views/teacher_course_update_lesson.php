

    <main class="dashboard-page">
      <!-- Sidebar trái: menu dọc -->
      
      <section class="dashboard-content">
        <h2>Sửa bài học</h2>
        <form class="edit-lesson-form">
          <label for="lesson-title">Tiêu đề bài học</label>
          <input
            type="text"
            id="lesson-title"
            value="Cấu trúc HTML cơ bản"
            required
          />

          <label for="lesson-duration">Thời lượng (phút)</label>
          <input type="number" id="lesson-duration" value="18" required />

          <label for="lesson-video">Link video bài học</label>
          <input
            type="url"
            id="lesson-video"
            value="https://www.youtube.com/embed/abc123"
            required
          />

          <label for="lesson-content">Nội dung mô tả bài học</label>
          <textarea id="lesson-content" rows="6" required>
Trong bài này, bạn sẽ học về thẻ h1, p, a, img, và cách tổ chức bố cục HTML hiệu quả.
    </textarea
          >

          <button type="submit">Lưu thay đổi</button>
        </form>
      </section>
    </main>

   