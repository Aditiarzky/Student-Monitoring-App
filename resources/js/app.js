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

    function togglePassword(inputId, buttonId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const toggleButton = document.getElementById(buttonId);
        const toggleIcon = document.getElementById(iconId);

        toggleButton.addEventListener("click", function () {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            }
        });
    }

    togglePassword(
        "password-lama",
        "toggle-button-password-lama",
        "toggle-icon-password-lama"
    );
    togglePassword(
        "password-baru",
        "toggle-button-password-baru",
        "toggle-icon-password-baru"
    );

    const originalValues = {};
    const readonlyInputs = document.querySelectorAll("input[readonly]");

    readonlyInputs.forEach(function (input) {
        originalValues[input.id] = input.value;

        input.addEventListener("input", function () {
            document
                .querySelectorAll(".alert-message")
                .forEach(function (alert) {
                    alert.classList.remove("hidden");
                });

            setTimeout(function () {
                input.value = originalValues[input.id];
                document
                    .querySelectorAll(".alert-message")
                    .forEach(function (alert) {
                        alert.classList.add("hidden");
                    });
            }, 3000);
        });
    });
} catch (error) {
    console.log("error javascript dashortu: " + error);
}
