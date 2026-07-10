const searchInput = document.getElementById("searchInput");
const table = document.querySelector(".table-search");

if (searchInput && table) {

    const rows = table.querySelectorAll("tbody tr");

    searchInput.addEventListener("keyup", function () {

        const keyword = this.value.toLowerCase();

        rows.forEach(function(row){

            const isi = row.textContent.toLowerCase();

            row.style.display = isi.includes(keyword) ? "" : "none";

        });

    });

}