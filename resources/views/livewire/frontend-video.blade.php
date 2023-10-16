<div class=" max-w-6xl mx-auto py-6 ">
    <div class=" grid grid-flow-row md:grid-cols-3 grid-cols-1 gap-4  sm:px-0 px-4">
        @if ($video)
            @foreach ($video as $item)

                <div class="bg-gray-100 pb-6 w-full">
                    <div class="aspect-w-16 aspect-h-9 mb-4">
                        <iframe src="{{$item->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h1 class="mt-6 md:text-2xl text-xl font-bold  text-auriga-biru px-4">{{$item->title}}</h1>
                        <div class="px-4 mt-4">
                            <h1 class="sm:text-base text-sm">
                            <span class="font-bold ">
                                @php
                                $date = \Carbon\Carbon::parse($item->publishdate)->locale('id');
                                $date->settings(['formatFunction' => 'translatedFormat']);
                                echo $date->format('F Y');
                                @endphp
                            </span>
                            <span> | </span>
                            {{$item->deskripsi}}
                            </h1>

                        </div>
                </div>


            @endforeach

        @endif
    </div>
    @if ($video)
        {{ $video->links('livewire.pagination') }}
    @endif
</div>

