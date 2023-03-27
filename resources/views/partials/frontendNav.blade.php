 {{-- nav PC --}}
 <div class="sticky top-0 z-40 bg-white sm:block hidden">
    <div class=" px-4 py-4 max-w-6xl mx-auto flex sm:flex-row flex-col justify-between items-center">
        <div class="flex  space-x-6 items-center font-semibold">
            <img src="{{ asset('img/logo.png') }}" alt="Mnukwar Papua" class="w-14 sm:mr-4 mr-0">
            <a href="#" class="sm:text-base text-xs">Home</a>
            <div @click.away="open = false" class="relative py-2" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full ">
                    <a href="#" class="text-gray-500 sm:text-base text-xs">About us</a>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 items-center mt-1 ml-1 transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" style="display: none !important;" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full mt-2 origin-top-right  shadow-lg md:w-52 z-20">
                  <div class=" bg-white shadow dark-mode:bg-gray-800">
                    <a class=" block px-4 py-2  text-sm font-semibold bg-transparent  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus: dark-mode:hover: dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Visi dan Misi</a>
                  </div>
                  <div class="  bg-white shadow dark-mode:bg-gray-800">
                    <a class=" block px-4 py-2  text-sm font-semibold bg-transparent  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus: dark-mode:hover: dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Staff</a>
                  </div>
                </div>

            </div>
            <div @click.away="open = false" class="relative py-2" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full ">
                    <a href="#" class="text-gray-500 sm:text-base text-xs">Programs</a>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 items-center mt-1 ml-1 transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" style="display: none !important;" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full mt-2 origin-top-right  shadow-lg md:w-52 z-20">
                  <div class=" bg-white shadow dark-mode:bg-gray-800">
                    <a class=" block px-4 py-2  text-sm font-semibold bg-transparent  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus: dark-mode:hover: dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Riset dan Kajian</a>
                  </div>
                  <div class="  bg-white shadow dark-mode:bg-gray-800">
                    <a class=" block px-4 py-2  text-sm font-semibold bg-transparent  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus: dark-mode:hover: dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Livelyhood</a>
                  </div>
                </div>

            </div>
            <div @click.away="open = false" class="relative py-2" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full ">
                    <a href="#" class="text-gray-500 sm:text-base text-xs">Galeri</a>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 items-center mt-1 ml-1 transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" style="display: none !important;" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute left-0 w-full mt-2 origin-top-right  shadow-lg md:w-52 z-20">
                  <div class=" bg-white shadow dark-mode:bg-gray-800">
                    <a class=" block px-4 py-2  text-sm font-semibold bg-transparent  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus: dark-mode:hover: dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Foto</a>
                  </div>
                  <div class="  bg-white shadow dark-mode:bg-gray-800">
                    <a class=" block px-4 py-2  text-sm font-semibold bg-transparent  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus: dark-mode:hover: dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Video</a>
                  </div>
                </div>

            </div>
        </div>

        <a class="px-4 py-3 rounded bg-mnukwar text-white sm:text-base text-xs">Contact Us</a>
    </div>
</div>

{{-- nav mobile --}}
<header class="bg-black sticky top-0 z-50">
    <div x-data="{ open: false }" class="px-6 py-4 bg-ed z-10 sm:hidden block">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white " viewBox="0 0 20 20" fill="currentColor" @click="open = true">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>

        <div class="fixed w-3/4 h-screen z-50 bg-black inset-0 overflow-y-auto " x-show="open"
        x-transition:enter="transition-all transform ease-out"
        x-transition:enter-start="-translate-x-1/2 opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition-all transform ease-in"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="-translate-x-1/2 opacity-0"
        @click.outside="open = false"
        x-cloak style="display: none !important">
            <button class="absolute px-6 py-4 focus:outline-none text-white" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="white" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </button>

            <div class="mt-16 space-y-3">
                <div class=" px-6">
                    <a href="#"  class="mb-4 px-4 inline-block  leading-5 text-white  ">Home<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6" x-data="{open1: false}">
                    <div class="flex items-center py-1   px-4 mb-2" @click=" open1 =! open1">
                        <a class=" leading-5 text-white  ">About us</a>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open1, 'rotate-0': !open1}" class="inline w-6 h-6 text-white items-center mt-1 ml-1 transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="bg-white px-4 py-3 mb-4 flex flex-col space-y-2 rounded" x-show="open1" style="display: none !important;">
                            <a href="#" class=" mr-6 ">Visi dan Misi</a>
                            <hr>
                            <a href="#" class=" mr-6 ">Staff</a>
                    </div>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6" x-data="{open1: false}">
                    <div class="flex items-center py-1   px-4 mb-2" @click=" open1 =! open1">
                        <a class=" leading-5 text-white  ">Programs </a>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open1, 'rotate-0': !open1}" class="inline w-6 h-6 text-white items-center mt-1 ml-1 transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="bg-white px-4 py-3 mb-4 flex flex-col space-y-2 rounded" x-show="open1" style="display: none !important;">
                            <a href="#" class=" mr-6 ">Riset dan Kajian</a>
                            <hr>
                            <a href="#" class=" mr-6 ">Livelyhood</a>

                    </div>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-6" x-data="{open1: false}">
                    <div class="flex items-center py-1   px-4 mb-2" @click=" open1 =! open1">
                        <a class=" leading-5 text-white  ">Galery </a>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open1, 'rotate-0': !open1}" class="inline w-6 h-6 text-white items-center mt-1 ml-1 transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="bg-white px-4 py-3 mb-4 flex flex-col space-y-2 rounded" x-show="open1" style="display: none !important;">
                            <a href="#" class=" mr-6 ">Foto</a>
                            <hr>
                            <a href="#" class=" mr-6 ">Video</a>
                    </div>
                    <p class="border-b border-gray-300"></p>
                </div>

                <div class=" px-6">
                    <a href="#"  class="mb-4 px-4 inline-block  leading-5 text-white  ">Contact us<a>
                    <p class="border-b border-gray-300"></p>
                </div>



            </div>
        </div>
    </div>
</header>
