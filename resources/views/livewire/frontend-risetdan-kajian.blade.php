<div class=" max-w-6xl mx-auto py-6 ">
    <div class=" grid grid-flow-row md:grid-cols-3 grid-cols-1 gap-4  sm:px-0 px-4">
        @if ($risetdankajian)
            @foreach ($risetdankajian as $item)

                <div class="bg-gray-100 pb-6 w-full">
                    <img class="w-full h-60 object-cover object-center" src="{{ asset('storage/files/photos/'.$item->img) }}" alt="{{$item->title}}" />
                    <a href="{{ url('risetdankajian', [$item->id, $item->slug]) }}" class="mt-6 md:text-2xl text-xl font-bold  text-auriga-biru px-4">{{$item->title}}</a>
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
    @if ($risetdankajian)
        {{ $risetdankajian->links('livewire.pagination') }}
    @endif
</div>

