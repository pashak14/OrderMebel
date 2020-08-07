$(window).on("load", function () {
  setTimeout(function () {
    let preloader = document.getElementById("page-preloader");
    if (!preloader.classList.contains("done")) {
      preloader.classList.add("done");
    }
  }, 300);

  let anchors = document.querySelectorAll('a[href*="#fourty__screen"]');

  for (anchor of anchors) {
    if (anchor) {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();
        anchorId = this.getAttribute("href");
        document.querySelector(anchorId).scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      });
    }
  }

  var menu = document.querySelector(".menu__burger");
  var openMenu = document.querySelector("header");
  var opens = document.querySelector(".menush");

  menu.addEventListener("click", function () {
    openMenu.classList.toggle("openclose");
    opens.classList.toggle("d-flex");
  });
});
