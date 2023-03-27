<div class="px-2">
    <div x-data="{ open: @entangle('show') }">
        @include('partials.showData')
    </div>
    <div class="flex justify-start mb-6">
        <h1 class="sm:text-3xl text-xl text-newgray-900 dark:text-newgray-300 font-semibold ">Inbox</h1>
    </div>


    <div class="text-left lg:w-1/4 w-full">
        <label class="text-gray-600 dark:text-gray-300 mr-2 text-sm" >Search </label>
        <input placeholder="subject.." type="text" class="bg-gray-100 dark:bg-newgray-700 text-newgray-700 dark:text-gray-300 rounded w-full border  py-3 px-4 focus:outline-none border-gray-300 dark:border-opacity-20 text-sm"  wire:model.debounce.300ms="search">
    </div>
    <div class="flex flex-col py-5">
        <div class="-my-2  sm:-mx-6 lg:-mx-8 ">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8 ">
                <div class="shadow  border-b border-gray-200 dark:border-gray-800 sm:rounded-lg dark:bg-opacity-10  dark:text-white " >
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-800 rounded-lg  ">
                    <thead >
                        <tr >
                            <th wire:click='sortingField("title")' class="px-6 py-4 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer sm:w-5/12 w-full">
                               <div class="flex space-x-1">
                                   <a>Subject</a>
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="px-4 py-3 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider  sm:w-3/12 w-0">
                                <a class="hidden sm:block">Name</a>
                            </th>
                            <th class="px-4 py-3 bg-gray-50 dark:bg-opacity-10  dark:text-white text-left text-xs font-medium text-gray-500 uppercase tracking-wider  sm:w-3/12 w-0">
                                <a class="hidden sm:block">email</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-opacity-20 dark:text-white divide-y divide-gray-200 dark:divide-gray-900">
                        @forelse ($inbox as $item)
                        <tr>
                            <td class="px-6 py-4 break-words text-sm font-bold text-newgray-700 dark:text-gray-300">
                                <a class="cursor-pointer" wire:click='showData({{$item->id}})'>{{ $item->subject }}</a>
                            </td>


                            <td class=" py-4 break-words text-sm font-bold text-newgray-700 dark:text-gray-300  ">
                                <div class="px-4 items-center flex ">
                                    <a >{{ $item->name }}</a>
                                </div>

                            </td>
                            <td class="px-6 py-4 break-words text-sm font-bold text-newgray-700 dark:text-gray-300">
                                <a>{{ $item->email }}</a>
                            </td>


                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="whitespace-nowrap text-sm text-gray-500 px-6 py-3">
                                No data found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if ($inbox)
    {{ $inbox->links('livewire.pagination') }}
    @endif
</div>
