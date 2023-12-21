<div class="w-full bg-slate-900 h-fit flex justify-center items-center">
    <div class="w-full animate-fade-in sm:max-w-md m-2 sm:m-0 px-2 py-3 overflow-hidden rounded-lg h-full">
        {{-- Main Bio --}}
        <section class="mt-4">
            <div class="flex items-center justify-between mt-2 mb-5">
                <div class="text-gray-200 text-lg font-medium">Biodata Siswa</div>
            </div>
            <!-- Biodata Siswa -->
            <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-pre-wrap break-words opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Nama</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">{{ $user->name }}</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-pre-wrap break-words opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Kelas</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">1A</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-pre-wrap break-words opacity-50 leading-16 mr-8 flex-none w-16 text-sm">NISN</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">0082437710</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-wrap opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Jenis Kelamin</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">Laki-laki</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-wrap opacity-50 leading-16 mr-8 flex-none w-16 text-sm">TTL</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">Jepara, 13 Agustus 2002</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-wrap opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Agama</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">Islam</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-wrap opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Alamat</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">Jl. Anggerk No.32</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-wrap opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Telepon</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">0897896754</dd>
                </div>
            </div>
            <div class="flex items-center justify-between mt-2 mb-2">
                <div class="text-gray-200 text-lg font-medium">Biodata Orang Tua</div>
            </div>
            <div class="w-full bg-gradient-to-br from-gray-800 to-gray-700 text-white rounded-lg p-4 border-1 border-white border-opacity-50 transition duration-300 ease-in-out transform flex flex-col justify-start items-start gap-1 mt-2 border">
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-wrap opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Nama Ayah</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">Ahmad</dd>
                </div>
                <div class="flex mb-4 last:mb-0">
                    <dt class="whitespace-wrap opacity-50 leading-16 mr-8 flex-none w-16 text-sm">Nama Ibu</dt>
                    <dd class="whitespace-pre-wrap break-words support-break-word s13-regular-white leading-16 flex-1 text-sm">Elie</dd>
                </div>
            </div>
        </section>
    </div>
</div>
