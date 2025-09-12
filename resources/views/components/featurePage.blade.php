<div class="xl:container mx-auto md:h-[300px] h-auto bg-gray-100 mt-[-10px]">
    <div 
        x-data="{ activeTab: ('ai') }" 
        class="md:w-full max-w-4xl mx-[50px] pb-[10px] pt-[20px]"
    >
        <!-- Tab Menu -->
        <div class="flex space-x-8 pb-3 pt-6">
            <button
                @click="activeTab = 'ai'"
                class="md:text-lg transition-colors duration-300"
                :class="{ 'text-blue-600': activeTab === 'ai' }"
            >
                Yang baru di AI
            </button>

            <button
                @click="activeTab = 'dev'"
                class="md:text-lg transition-colors duration-300"
                :class="{ 'text-blue-600': activeTab === 'dev' }"
            >
                Developer
            </button>

            <button
                @click="activeTab = 'biz'"
                class="md:text-lg transition-colors duration-300"
                :class="{ 'text-blue-600': activeTab === 'biz' }"
            >
                Pemimpin bisnis
            </button>
        </div>

        <div
            class="lg:bottom-0 lg:h-0.5 bg-blue-600 transition-all duration-300"
            :style="{
                width: activeTab === 'ai' ? '120px' : activeTab === 'dev' ? '85px' : '135px',
                transform: activeTab === 'ai' ? 'translateX(0px)' : activeTab === 'dev' ? 'translateX(160px)' : 'translateX(280px)'
            }"
        ></div>

        <!-- Konten -->
        <div class="mt-[60px]">
            <!-- Tab AI -->
            <template x-if="activeTab === 'ai'">
                <div class="md:grid auto-cols-max md:grid-flow-col md:gap-2 mb-[20px]">
                <!-- Card 1 -->
                    <div class="flex-shrink-0 mb-2 col-span-2 md:w-[380px] md:h-[130px] bg-white shadow border flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Selami masa depan keamanan bertenaga AI di Google Cloud Security summit
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-1.gif') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="flex-shrink-0 mb-2 col-span-2 md:w-[380px] md:h-[130px] bg-white shadow border flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Bangun, terapkan dan berstrategi dengan agen AI di Google Cloud Technical Series
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-2.gif') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                   <div class="flex-shrink-0 mb-2 col-span-2 md:w-[380px] md:h-[130px] bg-white border shadow flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Roadmap Analitik Data
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-3.png') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </template>

            <!-- Tab Developer -->
            <template x-if="activeTab === 'dev'">
                <div class="md:grid auto-cols-max md:grid-flow-col gap-2 mb-[20px]">
                <!-- Card 1 -->
                    <div class="flex-shrink-0 mb-2 col-span-2 md:w-[380px] md:h-[130px] border bg-white shadow flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Pelajari cara memodernisasi aplikasi Anda untuk mendorong inovasi AI
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-4.png') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                   <div class="flex-shrink- mb-2 col-span-2 md:w-[380px] md:h-[130px] border bg-white shadow flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">           
                                Saksikan Google Cloud Weeklies dan bersiap memasuki dunia cloud
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('image.png') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                   <div class="flex-shrink-0 mb-2 col-span-2 md:w-[380px] md:h-[130px] border bg-white shadow flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Skilling</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Menjadi Pemimpin AI Gen yang bersertifikat Google Cloud
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-5.jpg') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </template>

            <!-- Tab Bisnis -->
            <template x-if="activeTab === 'biz'">
                <div class="md:grid auto-cols-max md:grid-flow-col gap-2 mb-[20px]">
                <!-- Card 1 -->
                    <div class="flex-shrink-0 mb-2 col-span-2 md:w-[380px] md:h-[130px] border bg-white shadow flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Pelajari cara memodernisasi aplikasi Anda untuk mendorong inovasi AI
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-6.jpg') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                   <div class="flex-shrink-0 mb-2 col-span-2 md:w-[380px] md:h-[130px] border bg-white shadow flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Pelajari cara memodernisasi aplikasi Anda untuk mendorong inovasi AI
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-3.png') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                   <div class="flex-shrink-0 col-span-2 md:w-[380px] md:h-[130px] border bg-white shadow flex">
                        <!-- Bagian kiri -->
                        <div class="flex-1 p-4">
                            <p class="text-sm text-gray-500 uppercase">Event</p>
                            <h3 class="text-sm font-semibold mt-2">
                                Pelajari cara memodernisasi aplikasi Anda untuk mendorong inovasi AI
                            </h3>
                        </div>

                        <!-- Bagian kanan (gambar) -->
                        <div class="w-1/3">
                            <img src="{{ asset('img/assets-7.png') }}"
                                alt="AI Event"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div> 
</div>