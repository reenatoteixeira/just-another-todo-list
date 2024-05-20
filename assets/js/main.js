function mobileMenuToggle() {
  const mobMenuOpen = document.getElementById("mobile-menu-open"),
    mobMenuClose = document.getElementById("mobile-menu-close"),
    mobMenu = document.getElementById("nav-menu"),
    navMenu = document.getElementById("nav-bar");

  mobMenuOpen.classList.toggle("hidden");
  mobMenuClose.classList.toggle("hidden");
  mobMenu.classList.toggle("hidden");
  navMenu.classList.toggle("rounded-b-lg");
}

function closeWarning() {
  const warningMsg = document.getElementById("warning-msg");

  warningMsg.classList.add("hidden");
}

function closeFlashMsg() {
  const flashMsg = document.getElementById("flash-msg");

  flashMsg.classList.add("hidden");
}

function openModal(button) {
  const modalId = button.getAttribute("modal-id"),
    modal = document.getElementById(modalId);

  if (modalId != "new-task-modal") {
    fillModal(button);
  }

  modal.showModal();
  closeOnOutsideClick(modal);
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId),
    form = modal.querySelector("form");

  form.reset();
  modal.close();
}

function closeOnOutsideClick(modal) {
  modal.addEventListener("click", (e) => {
    const dialogDimensions = modal.getBoundingClientRect(),
      form = modal.querySelector("form");
    if (
      e.clientX < dialogDimensions.left ||
      e.clientX > dialogDimensions.right ||
      e.clientY < dialogDimensions.top ||
      e.clientY > dialogDimensions.bottom
    ) {
      form.reset();
      modal.close();
    }
  });
}

function fillModal(button) {
  const taskId = button.getAttribute("task-id"),
    taskTitle = button.getAttribute("task-title"),
    taskDescription = button.getAttribute("task-description"),
    modalId = button.getAttribute("modal-id"),
    idField = document.getElementById(`${modalId}-task-id`),
    titleField = document.getElementById(`${modalId}-task-title`),
    descriptionField = document.getElementById(`${modalId}-task-description`);

  idField.value = taskId;

  if (modalId === "edit-task-modal") {
    titleField.value = taskTitle;
    descriptionField.value = taskDescription;
  }
}
