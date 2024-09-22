//Animation du buger menu

const burgerMenuButton = document.querySelector(".burgerMenu");
const burgerMenuButtonIcon = document.querySelector(".burgerMenu i");
const burgerMenu = document.querySelector(".burger-menu");

burgerMenuButton.onclick = function () {
  burgerMenu.classList.toggle("open");
  const isOpen = burgerMenu.classList.contains("open");
  burgerMenuButtonIcon.classList = isOpen
    ? "fa-solid fa-xmark"
    : "fa-solid fa-bars";
};

//Animations des sections

