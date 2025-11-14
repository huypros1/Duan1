try {
  // Simple slider
  let images = document.querySelectorAll(".slider img");
  let current = 0;

  function showSlide(index) {
    images.forEach((img) => img.classList.remove("active"));
    images[index]?.classList.add("active");
  }

  function nextSlide() {
    current = (current + 1) % images.length;
    showSlide(current);
  }

  setInterval(nextSlide, 3000);
  showSlide(current);
} catch (error) {}

try {
  const accButtons = document.querySelectorAll(".accordion-btn");

  accButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const content = btn.nextElementSibling;

      // Đóng tất cả accordion khác
      document.querySelectorAll(".accordion-content").forEach((other) => {
        if (other !== content) {
          other.style.maxHeight = null;
        }
      });

      // Mở accordion hiện tại
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  });
} catch (error) {}

try {
  document
    .getElementById("menu-toggle")
    ?.addEventListener("click", function () {
      document.getElementById("main-menu")?.classList.toggle("active");
    });
} catch (error) {}
