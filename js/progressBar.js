let i = 0;
function move() {
  if (i == 0) {
    i = 1;
    let elem = document.querySelector(".myBar");
    let width = 0;
    let id = setInterval(frame, 10);
    function frame() {
      if (width >= 75) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width + "%";
      }
    }
  }
}
