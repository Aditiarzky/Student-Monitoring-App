<div class="w-full min-h-screen bg-white h-fit flex justify-center items-start">
    <div class="w-full animate-fade-in sm:max-w-md m-2 sm:m-0 px-2 py-3 overflow-hidden rounded-lg">
        {{-- Main Bio --}}
        <section class="mt-4">
            <!-- Biodata Siswa -->
            <div class="flex items-center justify-between mb-5">
                <div class="text-slate-800 text-lg font-medium">Pengumuman</div>
            </div>
            <div class="w-full bg-sky-200  text-slate-800 rounded-lg p-4 border border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2">
                <details>
                    <summary class="cursor-pointer outline-none flex">
                        <div class="flex mb-4 last:mb-0">
                            <dt class="whitespace-pre-wrap break-words opacity-70 leading-6 mr-4 flex-none w-28 text-sm">Dec, 12 Agustus 2023</dt>
                            <dd class="whitespace-pre-wrap break-words leading-6 flex-1 text-xl-1">Pengumuman Libur tahun baru 2024</dd>
                        </div>
                    </summary>
                    <p class="text-xs mt-2 mb-3 text-gray-900">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore dolores corporis aut dolorem totam molestias, impedit, neque recusandae veniam, ipsa id debitis atque voluptatibus velit iste odit est consequuntur consequatur!
                    </p>
                    <div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1XYAl7BnQjS818pHmg7UHBQmt3WaM0Nh5FmxRTpvFWd9HAZ_AvJx8Bba2GZKTJYJk7jc&usqp=CAU" alt="foto_pengumuman" class="rounded-lg border border-none" onclick="openModal()">
                    </div>
                </details>
            </div>

            <!-- Modal -->
            <div id="myModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content" id="modalImg">
            </div>
        </section>
    </div>
</div>
<script>
    // JavaScript for the modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
    document.getElementById("modalImg").src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1XYAl7BnQjS818pHmg7UHBQmt3WaM0Nh5FmxRTpvFWd9HAZ_AvJx8Bba2GZKTJYJk7jc&usqp=CAU";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

</script>
