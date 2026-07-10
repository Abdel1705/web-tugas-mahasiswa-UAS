const searchInput = document.getElementById("searchInput");
const table = document.getElementById("tabelTugas");

if (searchInput && table) {
    const rows = table.getElementsByTagName("tr");

    searchInput.addEventListener("keyup", function () {
        const keyword = searchInput.value.toLowerCase();

        for (let i = 1; i < rows.length; i++) {
            const text = rows[i].textContent.toLowerCase();

            if (text.includes(keyword)) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    });
}