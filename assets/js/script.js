document.addEventListener("DOMContentLoaded", function () {

    // =========================
    // SEARCH + FILTER STATUS
    // =========================

    const searchInput = document.getElementById("searchInput");
    const filterStatus = document.getElementById("filterStatus");
    const rows = document.querySelectorAll(".table-search tbody tr");

    if (searchInput && filterStatus) {

        function filterData() {
            const keyword = searchInput.value.toLowerCase();
            const statusDipilih = filterStatus.value.toLowerCase();

            rows.forEach(function(row) {

                const isiBaris = row.innerText.toLowerCase();
                const status = row.cells[5].innerText.trim().toLowerCase();

                if (
                    isiBaris.includes(keyword) &&
                    (statusDipilih === "" || status === statusDipilih)
                ) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        searchInput.addEventListener("keyup", filterData);
        filterStatus.addEventListener("change", filterData);
    }


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