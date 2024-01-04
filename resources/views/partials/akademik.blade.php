<div class="w-full bg-white h-fit flex justify-center items-center">
    <div class="w-full animate-fade-in sm:max-w-md m-2 sm:m-0 px-2 py-3 overflow-hidden rounded-lg h-full ">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between mt-2 mb-2">
                <div class="text-slate-800 text-lg font-medium">Mata Pelajaran</div>
            </div>
            <select id="underline_select" class="cursor-pointer block py-2.5 px-0 w-fit text-slate-800 bg-transparent border-0 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
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
                <div class="w-full  bg-sky-200  text-slate-800 rounded-lg p-4 border-1 border-gray-200 border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans w-[100px]">Nilai Akhir Semester</div>
                    <div class="text-center text-[32px] font-semibold font-sans">0</div>
                    <div class="text-center text-[13px] font-light font-sans">update: </div>
                </div>
                <div class="w-full  bg-sky-200  text-slate-800 rounded-lg p-4 border-1 border-gray-200 border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans">Kehadiran</div>
                    <div class="text-center text-[32px] font-semibold font-sans">0x</div>
                    <div class="text-[13px] font-light font-sans mt-1">
                        <div class="text-green-900">Sakit: <span class="font-medium">0x</span></div>
                        <div class="text-yellow-900">Ijin: <span class="font-medium">0x</span></div>
                        <div class="text-red-900">Tanpa Alasan: <span class="font-medium">0x</span></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="w-full  bg-sky-200  text-slate-800 rounded-lg p-4 border-1 border-gray-200 border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans w-[100px]">Nilai Tengah Semester</div>
                    <div class="text-center text-[32px] font-semibold font-sans">0</div>
                    <div class="text-center text-[13px] font-light font-sans">update: </div>
                </div>
                <div class="w-full  bg-sky-200  text-slate-800 rounded-lg p-4 border-1 border-gray-200 border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                    <div class="text-xl-1 font-semibold font-sans">Nilai Sikap</div>
                    <div class="text-center text-[32px] font-semibold font-sans">N/A</div>
                    <div class="text-[13px] font-light font-sans mt-1">
                        <div class="text-green-900">Kedisiplinan: <span class="font-medium">0</span></div>
                        <div class="text-green-900">Kekatifan: <span class="font-medium">0</span></div>
                        <div class="text-green-900">Tanggung jawab: <span class="font-medium">0</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full  bg-sky-200  text-slate-800 rounded-lg p-4 border-1 border-gray-200 border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
            <div class="text-xl-1 font-semibold font-sans">Tugas yang dikerjakan</div>
            <div class="relative w-full h-4 bg-gray-200 rounded-full">
                <div id="progressBar" class="absolute background-animate top-0 left-0 h-full bg-gradient-to-r from-emerald-400 to-emerald-300 rounded-full"></div>
            </div>
            <div class="flex justify-between items-center mt-2">
                <div id="progressText" class="text-slate-800 text-sm font-medium font-sans mr-1">0%</div>dari<div></div>
                <div id="totalTugas" class="ml-1 text-slate-800 text-sm font-medium font-sans">Total Tugas: </div>
            </div>
        </div>

        <!-- Main Daftar Pertemuan -->
        <section class="mt-4">
            <div class="flex items-center justify-between mt-2 mb-2">
                <div class="text-slate-800 text-lg font-medium">Update Harian</div>
            </div>

            <!-- Daftar Pertemuan 1 -->
            <div class="w-full  bg-sky-200  text-slate-800 rounded-lg p-4 border-1 border-gray-200 border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                <div class="text-xl-1 font-semibold font-sans">Update 1 Desember 2023</div>
                <div class="text-[13px] font-light font-sans mt-2">
                    <div class="text-xl-1 font-semibold font-sans">Tugas 1</div>
                    <div class="text-slate-800 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna non justo fermentum malesuada ac ac turpis.</div>
                    <div class="text-slate-800  mt-1">Nilai Tugas: <span class="text-slate-800  font-semibold">0</span></div>
                </div>
                <div class="text-[13px] font-light font-sans mt-2">
                <div class="text-xl-1 font-semibold font-sans mb-1">Kehadiran & Catatan</div>
                <div class="text-slate-800 ">Kehadiran: <span class="text-slate-800  font-semibold">Hadir</span></div>
                <div class="text-slate-800 ">Catatan Guru: <span class="text-slate-800  font-semibold">Lorem ipsum catatan guru.</span></div>
                </div>
            </div>
        </section>
    </div>
</div>
