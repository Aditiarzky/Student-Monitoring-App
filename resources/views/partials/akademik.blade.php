<div class="w-full bg-slate-900 h-fit flex justify-center items-center">
    <div class="w-full animate-fade-in sm:max-w-md m-2 sm:m-0 px-2 py-3 overflow-hidden rounded-lg h-full ">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between mt-2 mb-2">
                <div class="text-gray-200 text-lg font-medium">Mata Pelajaran</div>
            </div>
            <select id="underline_select" class="cursor-pointer block py-2.5 px-0 w-fit text-gray-200 bg-transparent border-0 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option disabled>#Pilih Pelajaran</option>
                <option value="1" selected>B. indonesia</option>
                <option value="2">PPKn</option>
                <option value="3">Matematika</option>
                <option value="4">B. Inggris</option>
            </select>
        </div>
        {{-- Main Nilai --}}
        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans w-[100px]">Nilai Akhir Semester</div>
                    <div class="text-center text-[32px] font-semibold font-sans">0</div>
                    <div class="text-center text-[13px] font-light font-sans">update: </div>
                </div>
                <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans">Kehadiran</div>
                    <div class="text-center text-[32px] font-semibold font-sans">0x</div>
                    <div class="text-[13px] font-light font-sans mt-1">
                        <div class="text-green-400">Sakit: <span class="font-medium">0x</span></div>
                        <div class="text-yellow-400">Ijin: <span class="font-medium">0x</span></div>
                        <div class="text-red-400">Tanpa Alasan: <span class="font-medium">0x</span></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans w-[100px]">Nilai Tengah Semester</div>
                    <div class="text-center text-[32px] font-semibold font-sans">0</div>
                    <div class="text-center text-[13px] font-light font-sans">update: </div>
                </div>
                <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans">Nilai Sikap</div>
                    <div class="text-center text-[32px] font-semibold font-sans">N/A</div>
                    <div class="text-[13px] font-light font-sans mt-1">
                        <div class="text-green-400">Kedisiplinan: <span class="font-medium">0</span></div>
                        <div class="text-green-400">Kekatifan: <span class="font-medium">0</span></div>
                        <div class="text-green-400">Tanggung jawab: <span class="font-medium">0</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
            <div class="text-xl-1 font-semibold font-sans">Tugas yang dikerjakan</div>
            <div class="relative w-full h-4 bg-gray-600 rounded-full">
                <div id="progressBar" class="absolute background-animate top-0 left-0 h-full bg-gradient-to-r from-blue-500 to-blue-300 rounded-full"></div>
            </div>
            <div class="flex justify-between items-center mt-2">
                <div id="progressText" class="text-gray-200 text-sm font-medium font-sans mr-1">0%</div>dari<div></div>
                <div id="totalTugas" class="ml-1 text-gray-200 text-sm font-medium font-sans">Total Tugas: </div>
            </div>
        </div>

        <!-- Main Daftar Pertemuan -->
        <section class="mt-4">
            <div class="flex items-center justify-between mt-2 mb-2">
                <div class="text-gray-200 text-lg font-medium">Daftar Pertemuan</div>
            </div>

            <!-- Daftar Pertemuan 1 -->
            <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                <div class="text-xl-1 font-semibold font-sans">Pertemuan 1</div>
                <div class="text-[13px] font-light font-sans mt-1">
                    <div class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna non justo fermentum malesuada ac ac turpis.</div><br>
                    <div class="text-gray-200">Nilai Tugas: <span class="text-gray-300 font-semibold">0</span></div>
                    <div class="text-gray-200">Kehadiran: <span class="text-gray-300 font-semibold">Hadir</span></div>
                    <div class="text-gray-200">Catatan Guru: <span class="text-gray-300 font-semibold">Lorem ipsum catatan guru.</span></div>
                </div>
            </div>
        </section>
    </div>
</div>
