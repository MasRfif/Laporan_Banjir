document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("formLapor");
    var pesan = document.getElementById("pesanValidasi");

    if (!form) return;

    form.addEventListener("submit", function (e) {
        var tinggi = document.getElementById("tinggi").value;

        if (tinggi !== "" && Number(tinggi) < 0) {
            e.preventDefault();
            pesan.textContent =
                "Tinggi genangan air tidak boleh bernilai negatif.";
            return;
        }

        pesan.textContent = "";
    });
});
