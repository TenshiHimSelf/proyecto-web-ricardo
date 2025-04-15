function showForm(fromId) {
  document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
  document.getElementById(fromId).classList.add("active");
}