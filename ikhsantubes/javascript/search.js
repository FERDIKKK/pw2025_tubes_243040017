function searchMenu() {
  let input = document.getElementById("searchInput").value.toLowerCase();
  let items = document.querySelectorAll(".menu-item");

  items.forEach(function(item) {
    let title = item.querySelector("h3").textContent.toLowerCase();
    let desc = item.querySelector("p").textContent.toLowerCase();
    if (title.includes(input) || desc.includes(input)) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}
