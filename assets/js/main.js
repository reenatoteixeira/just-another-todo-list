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

  warningMsg.classList.add("hidden");
}

function openModal(button) {
  const modalId = button.getAttribute("modal-id"),
    modal = document.getElementById(modalId);

  if (modalId === "edit-task-modal") {
    fillEditTaskModal(button);
  }

  modal.showModal();
  closeOnOutsideClick(modal);
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  modal.close();
}

function closeOnOutsideClick(modal) {
  modal.addEventListener("click", (e) => {
    const dialogDimensions = modal.getBoundingClientRect();
    if (
      e.clientX < dialogDimensions.left ||
      e.clientX > dialogDimensions.right ||
      e.clientY < dialogDimensions.top ||
      e.clientY > dialogDimensions.bottom
    ) {
      modal.close();
    }
  });
}

function fillEditTaskModal(button) {
  const taskTitle = button.getAttribute("task-title"),
    taskDescription = button.getAttribute("task-description"),
    taskId = button.getAttribute("task-id"),
    editId = document.getElementById("edit-id"),
    editTitle = document.getElementById("edit-title"),
    editDescription = document.getElementById("edit-description");

  editId.value = taskId;
  editTitle.value = taskTitle;
  editDescription.value = taskDescription;
}
