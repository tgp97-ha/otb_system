const dropdownNavbarLink = document.getElementById("dropdownNavbarLink");
const dropdownNavbar = document.getElementById("dropdownNavbar");

dropdownNavbarLink.addEventListener("click", () => {
    dropdownNavbar.classList.toggle("hidden");
});
