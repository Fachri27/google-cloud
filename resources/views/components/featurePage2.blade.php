<div class="md:flex justify-between container mx-auto">
    <div class="md:grid grid-cols-2 mx-[50px] my-[50px]">
        <div class="sticky top-0 z-0 tracking-wide">
            <div class="md:text-4xl text-2xl font-bold my-[30px]">
                Bangun dengan platform cloud
                <span class="text-blue-500">yang dirancang<br> untuk developer dan AI</span>
            </div>
            <div class="antialiased text-gray-600 text-justify">
                Coba Google Cloud dengan menggunakan lebih dari 20 produk secara gratis. Selain itu, pelanggan baru akan mendapatkan kredit gratis senilai $300 saat mendafta
            </div>
            <div class="md:flex gap-3 justify-between my-[30px]">
                <button class="rounded-full md:w-[200px] w-[300px] outline-blue-500 bg-[#0B57D0] h-[45px] py-1 hover:bg-blue-600">
                    <a href="" class="px-5 text-sm text-white ">Mulai Gratis</a>
                </button>
                <button class="rounded-full w-[300px] bg-transparent h-[45px] py-1 hover:bg-blue-100">
                    <a href="" class="px-5 text-sm font-semibold text-[#0B57D0]">Lihat semua produk (150+)</a>
                </button>
            </div>
        </div>
        <div class="md:mx-[50px] md:my-[20px] space-y-4">
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-data="{ expanded: false }" class="border-b-2 rounded-lg">
                 <button
                    @click="expanded= !expanded" class="w-full flex justify-between items-center p-4 font-semibold text-lg" 
                 >
                 <span>AI dan machine learning</span>
                 <span :class="{'rotate-180': expanded}" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                 </span>
                </button>
                <div x-show="expanded">
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="text-green-500 w-[50px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg> 
                            <span class="text-gray-500 text-sm">
                                Bangun agen AI dan deploy aplikasi yang ditingkatkan AI generatif dengan platform AI kami yang terkelola sepenuhnya, Vertex AI—yang ditingkatkan oleh Gemini dan lebih dari 130 model dasar
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>