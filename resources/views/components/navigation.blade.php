<nav x-data="{ open: false, search: false}" class="sticky top-0 bg-white z-50">
    <div class="flex items-center md:justify-between px-6 py-3">
         {{-- Mobile menu --}}
        
        <div class="flex items-center">
            <button @click="open = true" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div :class="{'hidden': search, 'flex': !search}" class="md:flex items-center">
            <img src="{{ asset('logo.png')}}" alt="" class="w-[150px]">
        </div>
        <div x-show="!search" class="flex items-center">
            <div class="hidden md:flex text-sm text-[#5F6368] space-x-6 px-9">
                <a href="" class="hover:text-black">Ringkasan</a>
                <a href="" class="hover:text-black">Solusi</a>
                <a href="" class="hover:text-black">Produk</a>
                <a href="" class="hover:text-black">Harga</a>
                <a href="" class="hover:text-black">Resource</a>
            </div>
        </div>
        <div class="flex items-center space-x-6 text-sm text-[#5F6368] ml-auto">
            <div class=" top-14 left-0 bg-white shadow-md rounded-md">
                <input 
                x-show="search" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                @click.away="search = false" 
                class="flex-grow flex w-64 items-center focus:outline-none border-none md:w-[800px] w-[220px]"
                type="text" 
                placeholder="Search"
            >
            </div>
            <button @click="search = !search" x-show="!search" class="flex items-center px-6 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
            <div class="hidden md:flex items-center space-x-6">
                <a href="#" class="hover:text-black">Dokumen</a>
                <a href="#" class="hover:text-black">Dukungan</a>
            </div>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium items-center space-x-6 ">Login</a>
        </div>
    </div>

    {{-- overlay --}}
    <div
    x-show="open"
    x-transitio.opacity
    @click="open = false"
    class="fixed inset-0 bg-black bg-opacity-50 z-40"
    ></div>
   
    {{-- Menu Mobile --}}
    <div 
    x-show="open"
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition transform duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="flex flex-col md:hidden fixed top-0 left-0 h-screen w-1/2 bg-white shadow-lg z-50 p-6"
    >
        <div class="flex items-center justify-between mb-6">
            <button @click="open = false" class="text-gray-600 hover:text-black text-2xl">
                ✕
            </button>
            <img src="{{ asset('logo.png')}}" alt="" class="w-[150px]">
        </div>
        <nav class="text-[#5F6368] space-y-5 text-sm">
            <a href="#" class="block hover:text-black">Ringkasan</a>
            <a href="#" class="block hover:text-black">Solusi</a>
            <a href="#" class="block hover:text-black">Produk</a>
            <a href="#" class="block hover:text-black">Harga</a>
            <a href="#" class="block hover:text-black">Resource</a>
            <a href="#" class="block hover:text-black">Dokumen</a>
            <a href="#" class="block hover:text-black">Dukungan</a>
        </nav>
    </div>
    <div class="py-2 border-t-2">
        <div class="flex items-center mx-auto justify-end space-x-4 pr-7 shadow-md w-full pb-2">
            <button class="border-2 rounded-full outline-blue-500 bg-white h-auto py-1 hover:shadow">
                <a href="" class="px-5 text-sm text-[#0B57D0] ">Hubungi Kami</a>
            </button>
            <button class="rounded-full outline-blue-500 bg-[#0B57D0] h-auto py-1 hover:bg-blue-600">
                <a href="" class="px-5 text-sm text-white ">Mulai Gratis</a>
            </button>
        </div>
    </div>
</nav>
