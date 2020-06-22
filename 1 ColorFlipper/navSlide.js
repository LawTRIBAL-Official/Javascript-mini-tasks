/*
document.getElementById("home").onclick = function () {
    location.href = "http://xalp03.skp-dp.sde.dk/CraftyVerse";
};

document.getElementById("about").onclick = function () {
    location.href = "http://xalp03.skp-dp.sde.dk/CraftyVerse/pages/about.php";
};

document.getElementById("cv").onclick = function () {
    location.href = "http://xalp03.skp-dp.sde.dk/CraftyVerse/pages/cv.php";
};

document.getElementById("hof").onclick = function () {
    location.href = "http://xalp03.skp-dp.sde.dk/CraftyVerse/pages/hof.php";
};

document.getElementById("shop").onclick = function () {
    location.href = "http://xalp03.skp-dp.sde.dk/CraftyVerse/pages/hof.php";
};

document.getElementById("0559").onclick = function () {
    location.href = "http://xalp03.skp-dp.sde.dk/CraftyVerse/pages/0559.php";
};
*/

const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  navLinks.forEach((link, index) => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      burger.classList.toggle('toggle');
      nav.classList.toggle('nav-active');
      navLinks.forEach(setStyleLink)
    })
  });

  burger.addEventListener('click', () => {
    // Toggle Nav
    nav.classList.toggle('nav-active');
    // animate navlinks
    navLinks.forEach(setStyleLink);
    // burger animation
    burger.classList.toggle('toggle');
  });
}

function setStyleLink(el, index) {
  if (el.style.animation) {
    el.style.animation = ''
  } else {
    el.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +0.5}s`;
  }
}
navSlide();
