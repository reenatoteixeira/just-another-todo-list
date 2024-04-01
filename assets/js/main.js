function mobileMenuToggle() {
  const mobMenuOpen = document.getElementById("mobile-menu-open"),
    mobMenuClose = document.getElementById("mobile-menu-close"),
    mobMenu = document.getElementById("mobile-menu"),
    navMenu = document.getElementById("nav-menu");

  mobMenuOpen.classList.toggle("hidden");
  mobMenuClose.classList.toggle("hidden");
  mobMenu.classList.toggle("hidden");
  navMenu.classList.toggle("rounded-b-lg");
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
  closeNewTaskModalOnClick();
}

main();
