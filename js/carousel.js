const carousel = document.querySelector(".carousel");
const slides = document.querySelectorAll(".slide");
const prevButton = document.querySelector(".prev-button");
const nextButton = document.querySelector(".next-button");

let currentIndex = 0;

    setInterval(() => {
        if (currentIndex < slides.length - 1) {
            currentIndex++;
            updateCarousel();
          }else if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
          }
    }, 20000);

nextButton.addEventListener("click", () => {
  if (currentIndex < slides.length - 1) {
    currentIndex++;
    updateCarousel();
  }
});

prevButton.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateCarousel();
  }
});

function updateCarousel() {
  const slideWidth = slides[0].offsetWidth;
  const offset = -currentIndex * slideWidth;
  carousel.style.transform = `translateX(${offset}px)`;
}