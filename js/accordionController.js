const acc = document.querySelectorAll(".accordion");

acc.forEach((accordion) => {
  accordion.addEventListener("click", function () {
    // Toggle between adding and removing the "active" class,
    // to highlight the button that controls the panel
    this.classList.toggle("active");

    // Toggle between hiding and showing the active panel
    const panel = this.nextElementSibling;
    panel.style.display = panel.style.display === "block" ? "none" : "block";
  });
});
