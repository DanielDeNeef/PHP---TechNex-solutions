const close = document.querySelectorAll(".closeAlert");

close.forEach((btn) => {
  btn.onclick = () => {
    const div = btn.parentElement;
    div.style.opacity = "0";
    setTimeout(() => {
      div.style.display = "none";
    }, 600);
  };
});
