let heroBg = document.querySelector(".hero");
setInterval(() => {
  heroBg.style.backgroundImage = "url(img/bg-light.jpg)";

  setTimeout(() => {
    heroBg.style.backgroundImage = "url(img/bg.jpg)";
  }, 1000);
}, 2200);

document.addEventListener("DOMContentLoaded", () => {
  const textElements = document.querySelectorAll(".text");

  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (
          entry.target.closest(".hero") ||
          entry.target.closest(".audi") ||
          entry.target.closest(".bmw")
        ) {
          entry.target.classList.add("slide-in-left");
        } else if (
          entry.target.closest(".mercedes") ||
          entry.target.closest(".ford")
        ) {
          entry.target.classList.add("slide-in-right");
        }
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);

  textElements.forEach((element) => {
    observer.observe(element);
  });
});
