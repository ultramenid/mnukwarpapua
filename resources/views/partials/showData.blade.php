<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400"  x-show="open" x-transition x-cloak style="display: none !important">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-100 dark:bg-newgray-900 opacity-50"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class=" px-4 inline-block align-bottom bg-newgray-900 dark:bg-gray-200 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full " role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <h1 class="text-left px-4 text-2xl pt-10 pb-10 text-gray-300 dark:text-newgray-900">{{$subject}}</h1>
            <div class="flex space-x-2 px-4 text-sm">
                <h2 class="text-gray-300 dark:text-newgray-900 ">{{$name}}</h2>
                <span class="text-gray-300 dark:text-newgray-900"> - </span>
                <h2 class="text-gray-300 dark:text-newgray-900 ">{{$email}}</h2>
            </div>
            <div class="bg-newgray-700 dark:bg-gray-400 py-2 px-4 mt-4 rounded">
                <p class="text-gray-300 dark:text-newgray-900 text-sm" style="white-space: pre-line">
                    {{$deskripsi}}
                </p>
            </div>

            <div class="py-3 sm:flex sm:flex-row-reverse">

                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

                    <button wire:loading.remove wire:click='closeDelete' type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Close
                    </button>
                    <button wire:loading wire:target='closeDelete' type="button" class=" px-6 inline-flex justify-center w-full rounded-md border border-gray-300  py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        <svg class="animate-spin mx-auto h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>
