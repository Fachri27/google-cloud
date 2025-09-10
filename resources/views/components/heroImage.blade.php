<div class="xl:container lg:grid lg:grid-cols-2 mx-auto">
    <div class="flex flex-col mt-10">
        <div class="flex justify-between bg-blue-100 px-5 py-4 lg:mx-[50px] mx-[35px] text-sm text-blue-700 rounded">
            <p>
                <span class="text-[#0B57D0] font-bold">Dapatkan $300</span> dalam bentuk kredit gratis dan penggunaan 20+ produk secara gratis
            </p>
            <div class="pl-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <div class="flex justify-between space-x-1 lg:mx-[50px] mx-[35px] my-6 leading-tight tracking-wide">
            <div class="lg:text-[50px] text-[35px] font-bold bg-gradient-to-b from-blue-600 to-green-500 inline bg-clip-text text-transparent font-roboto">
                Cara baru bekerja di cloud dimulai dari sini
            </div>
        </div>
        <div class="flex justify-between lg:mx-[50px] mx-[35px] tracking-tight">
            Bangun dengan AI generatif, deploy aplikasi dengan cepat, dan analisis data dalam hitungan detik—semuanya dengan keamanan berkualitas Google.
        </div>
        <div class="flex lg:mx-[50px] py-[30px] mx-[35px] space-x-5">
            <button class="rounded-full w-[200px] outline-blue-500 bg-[#0B57D0] h-auto py-1 hover:bg-blue-600">
                <a href="" class="px-5 text-sm text-white ">Mulai Gratis</a>
            </button>
            <button class="border-2 w-[200px] rounded-full outline-blue-500 bg-white h-auto py-1 hover:shadow">
                <a href="" class="px-5 text-sm text-[#0B57D0] ">Hubungi Kami</a>
            </button>
        </div>
    </div>
    <div x-data="{ showModal: false }" class="flex mt-10 mb-0">
        <div class="flex justify-between mx-auto">
            <a @click.prevent="showModal = true" href="#">
                <img src="{{ asset('modul.png') }}" alt="" class="z-10 md:w-[450px] w-[350px] rounded-3xl hover:rounded-none">
            </a>
            <div
            x-show="showModal"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            style="display: none;"
            >
                <div class="fixed inset-0 z-50 bg-black bg-opacity-75 flex items-center justify-center transition-opacity m">
                    <div @click.away="showModal = false" @keydown.escape.window="showModal = false" class="bg-white lg:w-[900px] w-[450px] rounded-xl">
                        <div class="aspect-w-16 aspect-h-9 my-[30px] mx-[50px] border-2">
                            <iframe class="lg:w-[800px] lg:h-[400px] w-[350px] h-[200px]" src="https://www.youtube.com/embed/dwgmfSOZNoQ?si=84uoomDD9BQE0FOt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="lg:flex justify-between my-[50px] mx-[50px] lg:space-x-4">
                            <div class="text-gray-500">
                                Coba produk Google Cloud dan bangun bukti konsep dengan kredit gratis
                                senilai $300.
                            </div>
                           <button class="bg-[#0B57D0] text-white rounded-3xl lg:p-3 text-xs p-3 mt-6">Mulai secara gratis</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>