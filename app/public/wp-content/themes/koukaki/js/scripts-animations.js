/*******Animation du buger menu*******/

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

/*********Animations des sections*********/
// Observer pour #studio
const studioObserver = new IntersectionObserver(
  (entries) => {
    for (const entry of entries) {
      if (entry.isIntersecting && entry.intersectionRatio >= 0.2) {
        entry.target.classList.add("titleEffectDown"); // Ajoute l'animation fadeInDown
        storyObserver.unobserve(entry.target);
      }
    }
  },
  { threshold: 0.2 }
);

// Observer pour #story
const storyObserver = new IntersectionObserver(
  (entries) => {
    for (const entry of entries) {
      if (entry.isIntersecting && entry.intersectionRatio >= 0.2) {
        entry.target.classList.add("titleEffectUp"); // Ajoute l'animation fadeInUp
        storyObserver.unobserve(entry.target);
      }
    }
  },
  { threshold: 0.2 }
);

// Applique l'observation aux éléments
studioObserver.observe(document.querySelector("#studio"));
storyObserver.observe(document.querySelector("#story"));

/******* Animations des nuages **********/

function nuages_mouvements() {
  const containerPlace = document.querySelector(".story #place");
  const grosNuage = document.createElement("img");
  grosNuage.src = "../assets/images/big_cloud.png"; // Chemin vers l'image
  grosNuage.className = "gros_nuage";
  containerPlace.appendChild(grosNuage);

  const petitNuage = document.createElement("img");
  petitNuage.src = "../assets/images/little_cloud.png"; // Chemin vers l'image
  petitNuage.className = "petit_nuage";
  containerPlace.appendChild(petitNuage);
}
