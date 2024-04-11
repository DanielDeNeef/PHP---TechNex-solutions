// Get the modal
const modal = document.querySelector("#myModal");

// Get the button that opens the modal
const btn = document.querySelector("#modalBtn");

// Get the <span> element that closes the modal
const span = document.querySelector(".close");

// When the user clicks the button, open the modal
btn.addEventListener("click", () => {
  modal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal
span.addEventListener("click", () => {
  modal.style.display = "none";
});
