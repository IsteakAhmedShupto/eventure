document.querySelector(".nav-open-btn").addEventListener("click", () => {
  document.querySelector(".nav-close-btn").classList.add("show-close-nav-btn");
  document.querySelector(".nav-open-btn").classList.add("hide-open-nav-btn");

  document.querySelector(".nav-lists").classList.add("show-nav-lists");
  document.querySelector(".nav-contact").classList.add("show-nav-contact");
});

document.querySelector(".nav-close-btn").addEventListener("click", () => {
  document
    .querySelector(".nav-close-btn")
    .classList.remove("show-close-nav-btn");
  document.querySelector(".nav-open-btn").classList.remove("hide-open-nav-btn");
  document.querySelector(".nav-lists").classList.remove("show-nav-lists");
  document.querySelector(".nav-contact").classList.remove("show-nav-contact");
});
