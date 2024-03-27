function navMenuToggle() {
  const navMenu = document.getElementById("navMenu"),
    navToggle = document.getElementById("navToggle"),
    navClose = document.getElementById("navClose");

  if (navToggle) {
    navToggle.addEventListener("click", () => {
      navToggle.classList.add("hidden");
      navClose.classList.remove("hidden");
      navMenu.classList.remove("max-[767px]:-top-full");
      navMenu.classList.add("top-0");
    });

    if (navClose) {
      navClose.addEventListener("click", () => {
        navClose.classList.add("hidden");
        navToggle.classList.remove("hidden");
        navMenu.classList.remove("top-0");
        navMenu.classList.add("max-[767px]:-top-full");
      });
    }
  }
}

function main() {
  navMenuToggle();
}

main();
