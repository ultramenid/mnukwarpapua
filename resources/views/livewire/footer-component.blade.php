<div>
    <livewire:toastr />

    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded mt-4" x-data="{count:{{ strlen($deskripsi)}}}">
        <h1 class="text-2xl font-semibold px-6 py-6 text-newbg-newgray-900 dark:text-gray-300">Footer Description</h1>
        <div class="px-4 py-4">
            <textarea maxlength="255" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='deskripsi' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
            <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
                <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
            </div>
        </div>
    </div>

    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded mt-4" >
        <div x-data="{count:{{ strlen($email)}}}">
            <h1 class="text-2xl font-semibold px-4 py-4 text-newbg-newgray-900 dark:text-gray-300">Usefull contact</h1>
            <div class="px-4">
                <h1 class="text-base font-semibold  py-2 text-newbg-newgray-900 dark:text-gray-300">Email</h1>
                <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 rounded dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='email' placeholder="email@email.com ">
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                  </div>
            </div>
        </div>
        <div x-data="{count:{{ strlen($phone)}}}">
            <div class="px-4">
                <h1 class="text-base font-semibold  text-newbg-newgray-900 dark:text-gray-300">Phone Number</h1>
                <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 rounded dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='phone' placeholder="0 ">
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                </div>
            </div>
        </div>
        <div x-data="{count:{{ strlen($facebook)}}}">
            <div class="px-4">
                <h1 class="text-base font-semibold  text-newbg-newgray-900 dark:text-gray-300">Facebook</h1>
                <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 rounded dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='facebook' placeholder="facebook.com/name ">
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                </div>
            </div>
        </div>
        <div x-data="{count:{{ strlen($twitter)}}}">
            <div class="px-4">
                <h1 class="text-base font-semibold  text-newbg-newgray-900 dark:text-gray-300">Twitter</h1>
                <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 rounded dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='twitter' placeholder="twitter.com/name ">
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                </div>
            </div>
        </div>
        <div x-data="{count:{{ strlen($instagram)}}}">
            <div class="px-4 mb-4">
                <h1 class="text-base font-semibold  text-newbg-newgray-900 dark:text-gray-300">Instagram</h1>
                <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 rounded dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='instagram' placeholder="instagram.com/name/ ">
                <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                    <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
                </div>
            </div>
        </div>


    </div>
    <div class=" flex justify-end mt-2 mb-12">
        <div class="z-30">
            <button wire:loading.remove wire:target='storeFooter'  wire:click='storeFooter' id="btnStore" class="inline-flex sm:px-12 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                Submit
            </button>
            <button wire:loading wire:target='storeFooter' id="btnStore" class="inline-flex sm:px-12 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

