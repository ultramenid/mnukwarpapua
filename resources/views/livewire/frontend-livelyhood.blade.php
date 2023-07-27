<div class=" max-w-6xl mx-auto py-6 ">
    <div class=" flex sm:flex-row flex-col sm:space-x-10 space-x-0 sm:space-y-0 space-y-10   sm:px-0 px-4">
        @if ($livelyhood)
            @foreach ($livelyhood as $item)

                <div class="bg-gray-100 pb-6 sm:w-4/12">
                    <img class="w-full h-60 object-cover object-center mb-6" src="{{ asset('storage/files/photos/'.$item->img) }}" alt="{{$item->title}}" />
                    <div class="px-4">
                        <a href="{{ url('livelihood', [$item->id, $item->slug]) }}" class=" md:text-2xl text-xl font-bold mt-6">{{$item->title}}</a>
                        <div class="mt-6">
                            <h1 class="sm:text-base text-sm">
                            <span class="font-bold ">
                                @php
                                $date = \Carbon\Carbon::parse($item->publishdate)->locale('id');
                                $date->settings(['formatFunction' => 'translatedFormat']);
                                echo $date->format('d F Y');
                                @endphp
                            </span>
                            <span> | </span>
                            {{$item->deskripsi}}
                            </h1>

                        </div>
                    </div>

                </div>









            @endforeach

        @endif
    </div>
    @if ($livelyhood)
        {{ $livelyhood->links('livewire.pagination') }}
    @endif
</div>

