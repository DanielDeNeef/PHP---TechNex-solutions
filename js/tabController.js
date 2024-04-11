function openBranche(evt, cityName) {
    
  // Get all elements with class="tabcontent" and hide them
  const tabcontent = document.querySelectorAll(".tabcontent");
  tabcontent.forEach((tab) => {
    tab.style.display = "none";
  });

  // Get all elements with class="tablinks" and remove the class "active"
  const tablinks = document.querySelectorAll(".tablinks");
  tablinks.forEach((tab) => {
    tab.classList.remove("active");
  });

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("active");
}
