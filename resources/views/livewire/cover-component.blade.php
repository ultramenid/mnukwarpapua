<div>
    <livewire:toastr />
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded">
        <h1 class="text-2xl font-semibold px-6 py-6 text-newbg-newgray-900 dark:text-gray-300">Cover Image</h1>
        <div class="flex py-6 items-center justify-center  border-gray-400 rounded w-full px-4" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
            <label class="cursor-pointer w-full">
                @if ($uphoto)
                    @if ($photo)
                        <img src="{{$photo->temporaryUrl()}}" alt="" class="w-full h-96 object-center object-cover">
                    @else
                        <img src="{{ asset('/storage/files/photos/'.$uphoto)  }}" alt="" class="w-full h-96 object-center object-cover">
                    @endif
                @else
                    @if ($photo)
                        <img src="{{$photo->temporaryUrl()}}" alt="" class="w-full h-96 object-center object-cover">
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                    @endif

                @endif
                <input type='file' class="hidden" wire:model='photo' accept="image/*" />
                <p wire:loading.remove wire:target="photo" class="text-xs text-center text-gray-400 mt-2">Clik to upload image</p>
                <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded flex justify-center">
                    <span class="text-xs text-black dark:text-white" x-text="'Uploading ' + progress + '%'"></span>
                </div>
            </label>
        </div>
    </div>
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded mt-4" x-data="{count:{{ strlen($title)}}}">
        <h1 class="text-2xl font-semibold px-6 py-6 text-newbg-newgray-900 dark:text-gray-300">Cover Title</h1>
        <div class="px-4 py-4">
            <input maxlength="60" x-ref="countme" x-on:keyup="count = $refs.countme.value.length" type="text" class="bg-gray-100 rounded dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20"  wire:model.defer='title' placeholder="Title. . . ">
            <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs mt-2">
                <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
              </div>
        </div>


    </div>
    <div class="w-full border border-gray-300 dark:border-opacity-20 rounded mt-4" x-data="{count:{{ strlen($deskripsi)}}}">
        <h1 class="text-2xl font-semibold px-6 py-6 text-newbg-newgray-900 dark:text-gray-300">Cover Description</h1>
        <div class="px-4 py-4">
            <textarea maxlength="160" x-ref="countme" x-on:keyup="count = $refs.countme.value.length"  rows="6"  wire:model.defer='deskripsi' required class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-2 px-4 focus:outline-none border-gray-300 dark:border-opacity-20" placeholder="Description. . ."></textarea>
            <div class="flex justify-end text-newgray-700 dark:text-gray-500  italic text-xs">
                <span x-html="count"></span> / <span  x-html="$refs.countme.maxLength"></span>
            </div>
        </div>

    </div>
    <div class=" flex justify-end mt-2 mb-12">
        <div class="z-30">
            <button wire:loading.remove wire:target='storeCover'  wire:click='storeCover' id="btnStore" class="inline-flex sm:px-12 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                Submit
            </button>
            <button wire:loading wire:target='storeCover' id="btnStore" class="inline-flex sm:px-12 px-8 sm:py-2 py-1 rounded dark:hover:bg-newgray-900 dark:hover:border-gray-200 dark:hover:text-gray-200 hover:bg-white hover:text-newgray-900 border hover:border-newgray-900 bg-newgray-900 dark:bg-gray-100 text-newgray-100 dark:text-newgray-900">
                <svg class="animate-spin mx-auto h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

