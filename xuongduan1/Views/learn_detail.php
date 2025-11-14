<main class="learning-page">
  <!-- Sidebar trái -->
  <aside class="learning-sidebar">
    <div class="course-info">
      <img src="public/img/<?= $course['image'] ?>" alt="<?= $course['title'] ?>" />
      <h3><?= $course['title'] ?></h3>
    </div>

    <ul class="lesson-nav">
      <?php foreach ($lessonList as $l): ?>
        <li class="<?= $l['id'] == $lesson_id ? 'active' : '' ?>">
          <a href="?ctrl=learn&act=detail&id=<?= $id ?>&lesson_id=<?= $l['id'] ?>">
            <?= $l['title'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </aside>

  <!-- Nội dung học bên phải -->
  <section class="lesson-content">
    <h2><?= $lesson['title'] ?></h2>

    <div class="video-wrapper">
      <div class="video-ratio">
        <iframe
          src="https://www.youtube.com/embed/<?= str_replace('https://www.youtube.com/watch?v=', '', $lesson['video']) ?>"
          frameborder="0"
          allowfullscreen></iframe>
      </div>
    </div>

    <div class="lesson-description">
      <?= $lesson['content'] ?>
    </div>
  </section>
</main>