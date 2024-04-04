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

function openNewTaskModal() {
  const newTaskModal = document.getElementById("create-task-modal");
  newTaskModal.showModal();
}

function closeNewTaskModal() {
  const newTaskModal = document.getElementById("create-task-modal");
  newTaskModal.close();
}

function openEditTaskModal(button) {
  const editTaskModal = document.getElementById("edit-task-modal"),
    taskTitle = button.getAttribute("task-title"),
    taskDescription = button.getAttribute("task-description"),
    taskId = button.getAttribute("task-id"),
    editId = document.getElementById("edit-id"),
    editTitle = document.getElementById("edit-title"),
    editDescription = document.getElementById("edit-description");

  editTaskModal.showModal();
  editId.value = taskId;
  editTitle.value = taskTitle;
  editDescription.value = taskDescription;
}

function closeEditTaskModal() {
  const editTaskModal = document.getElementById("edit-task-modal");
  editTaskModal.close();
}

function closeModalOnOutsideClick() {
  const newTaskModal = document.getElementById("create-task-modal");
  const editTaskModal = document.getElementById("edit-task-modal");

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

  editTaskModal.addEventListener("click", (e) => {
    const dialogDimensions = editTaskModal.getBoundingClientRect();
    if (
      e.clientX < dialogDimensions.left ||
      e.clientX > dialogDimensions.right ||
      e.clientY < dialogDimensions.top ||
      e.clientY > dialogDimensions.bottom
    ) {
      editTaskModal.close();
    }
  });
}

function main() {
  closeModalOnOutsideClick();
}

main();
