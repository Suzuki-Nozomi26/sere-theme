window.addEventListener("load", function () {
  const wrapper = document.querySelector(".gallery-wrapper");
  const images = document.querySelectorAll(".gallery-img");
  let index = 0;
  const imageWidth = images[0].offsetWidth + 10;

  function slideNext() {
    index++;
    if (index >= images.length) {
      index = 0;
    }
    wrapper.style.transform = `translateX(-${index * imageWidth}px)`;
  }

  setInterval(slideNext, 5000);
});
