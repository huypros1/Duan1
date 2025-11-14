

    <main class="dashboard-page">
      <!-- Sidebar trái: menu dọc -->
      
      <section class="dashboard-content">
        <h2>Thêm bài học mới</h2>
        <form class="add-lesson-form">
          <label for="lesson-title">Tiêu đề bài học</label>
          <input
            type="text"
            id="lesson-title"
            placeholder="Nhập tiêu đề bài học..."
            required
          />

          <label for="lesson-duration">Thời lượng (phút)</label>
          <input
            type="number"
            id="lesson-duration"
            placeholder="VD: 20"
            required
          />

          <label for="lesson-video">Link video bài học</label>
          <input
            type="url"
            id="lesson-video"
            placeholder="https://www.youtube.com/embed/xyz"
            required
          />

          <label for="lesson-content">Nội dung mô tả bài học</label>
          <textarea
            id="lesson-content"
            rows="6"
            placeholder="Nhập nội dung chi tiết..."
            required
          ></textarea>

          <button type="submit">Thêm bài học</button>
        </form>
      </section>
    </main>

    