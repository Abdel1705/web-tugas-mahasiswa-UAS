  document.addEventListener("DOMContentLoaded", function () {

    // =========================
    // SEARCH + FILTER STATUS
    // =========================

    const searchInput = document.getElementById("searchInput");
    const table = document.querySelector(".table-search");

    if (!searchInput || !table) return;

    const rows = table.querySelectorAll("tbody tr");

    searchInput.addEventListener("input", function () {
        const keyword = this.value.toLowerCase().trim();

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(keyword) ? "" : "none";
        });
    });

// =========================
// SHOW / HIDE PASSWORD
// =========================

const passwordField = document.getElementById("password");
const toggleBtn = document.getElementById("togglePassword");

if (passwordField && toggleBtn) {
    toggleBtn.addEventListener("click", function (e) {
        e.preventDefault();

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleBtn.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
        } else {
            passwordField.type = "password";
            toggleBtn.innerHTML = '<i class="bi bi-eye-fill"></i>';
        }
    });
}

});