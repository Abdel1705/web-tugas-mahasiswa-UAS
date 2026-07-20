document.addEventListener("DOMContentLoaded", function () {

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

    // =========================
    // SEARCH + FILTER TABLE
    // =========================
    const searchInput = document.getElementById("searchInput");
    const table = document.querySelector(".table-search");

    if (searchInput && table) {

        const rows = table.querySelectorAll("tbody tr");

        // Pengumpulan
        const filterStatus = document.getElementById("filterStatus");

        // Rekap
        const filterKelas = document.getElementById("filterKelas");
        const filterMatkul = document.getElementById("filterMatkul");

        function filterTable() {

            const keyword = searchInput.value.toLowerCase().trim();

            const status =
                filterStatus ? filterStatus.value.toLowerCase() : "";

            const kelas =
                filterKelas ? filterKelas.value.toLowerCase() : "";

            const matkul =
                filterMatkul ? filterMatkul.value.toLowerCase() : "";

            rows.forEach(row => {

                const cells = row.querySelectorAll("td");
                let tampil = true;

                // =========================
                // SEARCH
                // =========================
                if (keyword !== "") {
                    const text = row.textContent.toLowerCase();
                    if (!text.includes(keyword)) {
                        tampil = false;
                    }
                }

                // =========================
                // FILTER STATUS
                // Halaman Pengumpulan
                // =========================
                if (filterStatus && status !== "") {
                    const statusText = cells[5].textContent.toLowerCase().trim();

                    if (!statusText.includes(status)) {
                        tampil = false;
                    }
                }

                // =========================
                // FILTER KELAS
                // Halaman Rekap
                // =========================
                if (filterKelas && kelas !== "") {
                    const kelasText = cells[3].textContent.toLowerCase().trim();

                    if (kelasText !== kelas) {
                        tampil = false;
                    }
                }

                // =========================
                // FILTER MATA KULIAH
                // Halaman Rekap
                // =========================
                if (filterMatkul && matkul !== "") {
                    const matkulText = cells[2].textContent.toLowerCase().trim();

                    if (matkulText !== matkul) {
                        tampil = false;
                    }
                }

                row.style.display = tampil ? "" : "none";

            });
        }

        searchInput.addEventListener("input", filterTable);

        if (filterStatus) {
            filterStatus.addEventListener("change", filterTable);
        }

        if (filterKelas) {
            filterKelas.addEventListener("change", filterTable);
        }

        if (filterMatkul) {
            filterMatkul.addEventListener("change", filterTable);
        }

    }

});