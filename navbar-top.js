const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector("nav ul");
  const logo = document.querySelector(".nav-logo-responsive");

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
    burger.classList.toggle("toggle");

    if (logo.style.display === "none") {
      logo.style.display = "block";
    } else {
      logo.style.display = "none";
    }
  });
};

navSlide();
