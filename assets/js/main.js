function mobileMenuToggle() {
  const mobileMenu = document.getElementById("mobile-menu"),
    mobMenuOpen = document.getElementById("mobile-menu-open"),
    mobMenuClose = document.getElementById("mobile-menu-close");
  
  if (mobMenuOpen) {
    mobMenuOpen.addEventListener("click", () => {
      mobMenuClose.classList.remove("hidden");
      mobMenuOpen.classList.add("hidden");
      mobileMenu.classList.remove("hidden");
    })
  }
  
  if (mobMenuClose) {
    mobMenuClose.addEventListener("click", () => {
      mobMenuOpen.classList.remove("hidden");
      mobMenuClose.classList.add("hidden");
      mobileMenu.classList.add("hidden");
    })
  }
}

function main() {
  mobileMenuToggle();
}

main();
