/** @format */

const toggle = document.querySelector(".toggle"); // tombol toggle sidebar
const body = document.body;
const sidebar = document.querySelector(".sidebar");
const modeToggle = document.getElementById("modeToggle");
const modeText = document.querySelector(".mode-text");

// Cek preferensi mode gelap dari localStorage
if (localStorage.getItem("darkMode") === "true") {
  body.classList.add("dark");
  modeToggle.checked = true;
  modeText.textContent = "Dark Mode";
}

// Mode gelap/terang toggle
modeToggle.addEventListener("change", () => {
  body.classList.toggle("dark");
  const isDark = body.classList.contains("dark");
  modeText.textContent = isDark ? "Dark Mode" : "Light Mode";
  localStorage.setItem("darkMode", isDark);
});

// Sidebar toggle
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});
