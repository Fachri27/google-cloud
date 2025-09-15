<div class="bg-black px-[50px] py-[50px]">
    <div class="md:grid grid-cols-2">
        <div class="flex justify-between text-white text-4xl font-bold text-left tracking-wide">
            <p>Membangun dan menskalakan aplikasi AI generatif dengan 
                <span class="text-yellow-400"><br>Vertex AI dan Gemini Code Assist</span>
            </p>
        </div>
        <div class="text-white text-lg text-left tracking-wide items-center">
            <p>
                Gunakan <a href="#" class="text-blue-500 underline">Vertex AI</a> untuk men-deploy dan mengelola aplikasi AI serta <a href="#" class="text-blue-500 underline">Gemini Code Assist untuk</a> bantuan tugas dan kode.
            </p>
            <button class="mt-[30px] bg-white text-blue-600 text-sm rounded-3xl p-[15px] w-[150px] text-bold w-[300px] ">
                Mulai secara gratis
            </button>
        </div>
    </div>
    <div 
        x-data="{ 
            selected: 'btn1', 
            showModal: false,
            videos: {
                btn1: 'https://www.youtube.com/embed/YfiLUpNejpE?si=Np5VtViTwWUUHjlA',
                btn2: 'https://www.youtube.com/embed/XX2XpqklUrE?si=o9T4Gsw3HWafbC84',
                btn3: 'https://www.youtube.com/embed/h41eoDraUzE?si=pTEXQC4veGIPi0pk',
                btn4: 'https://www.youtube.com/embed/WsXVGr0Q3C4?si=pGMH1kMqRcXcXBKr'
            } 
        }"
        class="text-white md:w-full my-[50px]"
    >
        <div class="md:flex items-center md:grid md:grid-cols-2 grid-cols-1">
            <div class="max-w-2xl w-full space-y-6">
                <div class="space-y-4">
                    <button 
                        @click="selected = 'btn1'"
                        :class="{ 'text-blue-400 bg-gray-900': selected === 'btn1' }"
                        class="w-full flex justify-between text-left hover:rounded-lg hover:bg-gray-900 hover:text-blue-400 p-3 transition"
                    >
                        <span>
                            <P class="text-xs font-semibold uppercase hidden md:block">PANDUAN DEVELOPER AI</P>
                            <P class="text-lg">Pengantar Gemini di Vertex AI</P>
                        </span>
                        <span :class="{'rotate-180': selected === 'btn1', 'md:hidden': selected }" class="transform transition-transform duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                    <template x-if="selected === 'btn1'">
                        <a href="#" @click.prevent="showModal = true" :class="{'md:hidden': selected}">
                            <img src="{{ asset('img/img1.png') }}" alt="AI Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>
                    <button 
                        @click="selected = 'btn2'"
                        :class="{ 'text-blue-400 bg-gray-900': selected === 'btn2' }"
                        class="w-full flex justify-between text-left hover:rounded-lg hover:bg-gray-900 hover:text-blue-400 p-3 transition"
                    >
                        <span>
                            <P class="text-xs font-semibold uppercase hidden md:block">PANDUAN DEVELOPER AI</P>
                            <P class="text-lg">Pengantar Gemini di Vertex AI</P>
                        </span>
                        <span :class="{'rotate-180': selected === 'btn2', 'md:hidden': selected }" class="transform transition-transform duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                    <template x-if="selected === 'btn2'">
                        <a href="#" @click.prevent="showModal = true" :class="{'md:hidden': selected}">
                            <img src="{{ asset('img/btn2.png') }}" alt="AI Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>
                    <button 
                        @click="selected = 'btn3'"
                        :class="{ 'text-blue-400 bg-gray-900': selected === 'btn3' }"
                        class="w-full flex justify-between text-left hover:rounded-lg hover:bg-gray-900 hover:text-blue-400 p-3 transition"
                    >
                        <span>
                            <P class="text-xs font-semibold uppercase hidden md:block">PANDUAN DEVELOPER AI</P>
                            <P class="text-lg">Pengantar Gemini di Vertex AI</P>
                        </span>
                        <span :class="{'rotate-180': selected === 'btn3', 'md:hidden': selected }" class="transform transition-transform duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                    <template x-if="selected === 'btn3'">
                        <a href="#" @click.prevent="showModal = true" :class="{'md:hidden': selected}">
                            <img src="{{ asset('img/btn3.png') }}" alt="AI Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>
                    <button 
                        @click="selected = 'btn4'"
                        :class="{ 'text-blue-400 bg-gray-900': selected === 'btn4'}"
                        class="w-full flex justify-between text-left hover:rounded-lg hover:bg-gray-900 hover:text-blue-400 p-3 transition"
                    >
                        <span>
                            <P class="text-xs font-semibold uppercase hidden md:block">PANDUAN DEVELOPER AI</P>
                            <P class="text-lg">Pengantar Gemini di Vertex AI</P>
                        </span>
                        <span :class="{'rotate-180': selected === 'btn4', 'md:hidden': selected }" class="transform transition-transform duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                    <template x-if="selected === 'btn4'">
                        <a href="#" @click.prevent="showModal = true" :class="{'md:hidden': selected}">
                            <img src="{{ asset('img/btn4.png') }}" alt="AI Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>
                </div>
            </div>
            <div class="md:flex md:justify-center pl-[20px]">
                <div class="md:mt-8">
                    <template x-if="selected === 'btn1'">
                        <a href="#" @click.prevent="showModal = true" :class="{'hidden': selected, 'md:block': selected, 'md:block': selected}">
                            <img src="{{ asset('img/img1.png') }}" alt="AI Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>

                    <template x-if="selected === 'btn2'">
                        <a href="#" @click.prevent="showModal = true" :class="{'hidden': selected, 'md:block': selected}">
                            <img src="{{ asset('img/btn2.png') }}" alt="Tugas Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>

                    <template x-if="selected === 'btn3'">
                        <a href="#" @click.prevent="showModal = true" :class="{'hidden': selected, 'md:block': selected}">
                            <img src="{{ asset('img/btn3.png') }}" alt="Kode Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>

                    <template x-if="selected === 'btn4'">
                        <a href="#" @click.prevent="showModal = true" :class="{'hidden': selected, 'md:block': selected}">
                            <img src="{{ asset('img/btn4.png') }}" alt="Kode Image" class="rounded-lg shadow-lg w-96">
                        </a>
                    </template>
                </div>
            </div>
        </div>
        <div 
            x-show="showModal" 
            x-transition 
            style="display: none"
            class="fixed inset-0 z-50 bg-black bg-opacity-75 flex items-center justify-center"
            @keydown.escape.window="showModal = false"
            @click.self="showModal = false"
        >
            <div class="bg-white lg:w-[900px] w-[450px] rounded-xl">
                <div class="aspect-w-16 aspect-h-9 my-[30px] mx-[50px] border-2">
                    <iframe class="lg:w-[800px] lg:h-[400px] w-[350px] h-[200px]" :src="videos[selected]" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
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
