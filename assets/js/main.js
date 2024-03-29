function mobileMenuToggle() {
  const navMenu = document.getElementById("nav-menu"),
    mobileMenu = document.getElementById("mobile-menu"),
    mobMenuOpen = document.getElementById("mobile-menu-open"),
    mobMenuClose = document.getElementById("mobile-menu-close");

  if (mobMenuOpen) {
    mobMenuOpen.addEventListener("click", () => {
      mobMenuClose.classList.remove("hidden");
      mobMenuOpen.classList.add("hidden");
      mobileMenu.classList.remove("hidden");
      navMenu.classList.add("rounded-b-lg");
    });
  }

  if (mobMenuClose) {
    mobMenuClose.addEventListener("click", () => {
      mobMenuOpen.classList.remove("hidden");
      mobMenuClose.classList.add("hidden");
      mobileMenu.classList.add("hidden");
      navMenu.classList.remove("rounded-b-lg");
    });
  }
}

function main() {
  mobileMenuToggle();
}

main();
