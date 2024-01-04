
<footer class="text-center text-xs flex justify-center items-center text-gray-500 mt-8 mb-3">
    ©<p class="mr-1 tahun-sekarang"></p><a href="/" class="hover:underline mr-1">Sistem Monitoring Siswa.</a> All Rights Reserved. </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tahunSekarang = new Date().getFullYear();

        const textTh= document.querySelectorAll('.tahun-sekarang');

        textTh.forEach((element) => {
            element.innerText = tahunSekarang + " ";
        });
    });
</script>
