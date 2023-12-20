import "./bootstrap";
import Alpine from "alpinejs";
window.Alpine = Alpine;
try {
    Alpine.start();
} catch (error) {
    console.log("Error alpine JS");
}

try {
    const jumlahTugasDikerjakan = 1;
    const totalTugas = 2;

    const presentaseProgres = (jumlahTugasDikerjakan / totalTugas) * 100;

    const progressBar = document.getElementById("progressBar");
    const progressText = document.getElementById("progressText");
    const totalTugasElement = document.getElementById("totalTugas");

    progressBar.style.width = `${presentaseProgres}%`;
    progressText.textContent = `${presentaseProgres.toFixed(2)}%`;
    totalTugasElement.textContent = `Total Tugas: ${totalTugas}`;

    function showPartial(id) {
        document.getElementById("akademik").classList.add("hidden");
        document.getElementById("bio").classList.add("hidden");
        document.getElementById("pengumuman").classList.add("hidden");
        document.getElementById("akun").classList.add("hidden");

        document.getElementById(id).classList.remove("hidden");
    }

    function changePartial(id) {
        showPartial(id);
        const navigationItems = document.querySelectorAll(".nav-item");
        navigationItems.forEach((item) => {
            item.classList.add("text-opacity-70");
            item.classList.remove("underline");
        });
        document
            .getElementById(id + "-nav")
            .classList.remove("text-opacity-70");
        document.getElementById(id + "-nav").classList.add("underline");
    }

    document
        .getElementById("akademik-nav")
        .addEventListener("click", function () {
            changePartial("akademik");
        });

    document.getElementById("bio-nav").addEventListener("click", function () {
        changePartial("bio");
    });
    document
        .getElementById("pengumuman-nav")
        .addEventListener("click", function () {
            changePartial("pengumuman");
        });
    document.getElementById("akun-nav").addEventListener("click", function () {
        changePartial("akun");
    });

    showPartial("akademik");
} catch (error) {
    console.log("error javascript dashortu: " + error);
}
