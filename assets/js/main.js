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

function closeWarning() {
  const warningMsg = document.getElementById("warning-msg");

  if (warningMsg) {
    warningMsg.classList.add("hidden");
  }
}

function openNewTaskModal() {
  const newTaskModal = document.getElementById("create-task-modal");
  newTaskModal.showModal();
}

function closeNewTaskModal() {
  const newTaskModal = document.getElementById("create-task-modal");
  newTaskModal.close();
}

function closeNewTaskModalOnClick() {
  const newTaskModal = document.getElementById("create-task-modal");
  newTaskModal.addEventListener("click", (e) => {
    const dialogDimensions = newTaskModal.getBoundingClientRect();
    if (
      e.clientX < dialogDimensions.left ||
      e.clientX > dialogDimensions.right ||
      e.clientY < dialogDimensions.top ||
      e.clientY > dialogDimensions.bottom
    ) {
      newTaskModal.close();
    }
  });
}

function main() {
  mobileMenuToggle();
  closeNewTaskModalOnClick();
}

main();
