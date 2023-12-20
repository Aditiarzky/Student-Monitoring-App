<div class="mb-1 sm:hidden w-full text-slate-600 text-sm text-center font-medium font-sans flex justify-center items-center">©<p class="mr-1 tahun-sekarang"></p><a href="/" class="hover:underline mr-1">Sistem Monitoring Siswa.</a> All Rights Reserved. </div>

<div class="mb-1 hidden sm:flex w-full text-slate-600 text-lg text-center font-medium font-sans justify-center items-center">©<p class="mr-1 tahun-sekarang"></p><a href="/" class="hover:underline mr-1">Sistem Monitoring Siswa.</a> All Rights Reserved. </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tahunSekarang = new Date().getFullYear();

        const textTh= document.querySelectorAll('.tahun-sekarang');

        textTh.forEach((element) => {
            element.innerText = tahunSekarang + " ";
        });
    });
</script>
