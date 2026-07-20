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

    let jumlahTampil = 0;

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
        // =========================
        if (filterStatus && status !== "") {
            const statusText = cells[5].textContent.toLowerCase().trim();

            if (!statusText.includes(status)) {
                tampil = false;
            }
        }

        // =========================
        // FILTER KELAS
        // =========================
        if (filterKelas && kelas !== "") {
            const kelasText = cells[3].textContent.toLowerCase().trim();

            if (kelasText !== kelas) {
                tampil = false;
            }
        }

        // =========================
        // FILTER MATA KULIAH
        // =========================
        if (filterMatkul && matkul !== "") {
            const matkulText = cells[2].textContent.toLowerCase().trim();

            if (matkulText !== matkul) {
                tampil = false;
            }
        }

        row.style.display = tampil ? "" : "none";

        if (tampil) {
            jumlahTampil++;
        }

    });

    // =========================
    // LIVE COUNTER
    // =========================
    const dataCounter = document.getElementById("dataCounter");

    if (dataCounter) {
        dataCounter.textContent =
            `Menampilkan ${jumlahTampil} dari ${rows.length} data`;
    }

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
        filterTable();

    }

});
// =========================
// SORT TABLE
// =========================

const sortableHeaders = document.querySelectorAll(".sortable");

sortableHeaders.forEach((header) => {

    header.style.cursor = "pointer";

    header.addEventListener("click", function () {

        const table = header.closest("table");
        const tbody = table.querySelector("tbody");

        const rows = Array.from(tbody.querySelectorAll("tr"));

        const column = Array.from(header.parentNode.children).indexOf(header);

        const asc = !header.classList.contains("asc");

        sortableHeaders.forEach(h => {
            h.classList.remove("asc", "desc");
        });

        header.classList.add(asc ? "asc" : "desc");

        rows.sort((a, b) => {

            let x = a.cells[column].innerText.trim();
            let y = b.cells[column].innerText.trim();

            // jika angka
            if (!isNaN(x) && !isNaN(y)) {
                return asc
                    ? Number(x) - Number(y)
                    : Number(y) - Number(x);
            }

            // jika teks
            return asc
                ? x.localeCompare(y)
                : y.localeCompare(x);

        });

        rows.forEach(row => tbody.appendChild(row));

    });

});