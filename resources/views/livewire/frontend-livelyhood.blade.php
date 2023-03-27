<div class=" max-w-6xl mx-auto py-6 ">
    <div class=" grid grid-flow-row md:grid-cols-3 grid-cols-1 gap-4  ">
        @if ($livelyhood)
            @foreach ($livelyhood as $item)

                <div class="bg-gray-100 pb-6 w-full">
                    <img class="w-96 h-52 object-cover object-center" src="{{ asset('storage/files/photos/'.$item->img) }}" alt="{{$item->title}}" />
                    <h1 class="mt-6 md:text-2xl text-xl font-bold  text-auriga-biru px-4">{{$item->title}}</h1>
                    <div class="flex space-x-1 items-center mt-6 px-4">
                        <h5 class="font-bold ">
                            @php
                                $date = \Carbon\Carbon::now('Asia/Jakarta')->locale('id');
                                $date->settings(['formatFunction' => 'translatedFormat']);
                                echo $date->format('F Y');
                            @endphp
                        </h5><span> | </span><h5>{{$item->deskripsi}}</h5>
                    </div>
                </div>

            @endforeach

        @endif
    </div>
    @if ($livelyhood)
        {{ $livelyhood->links('livewire.pagination') }}
    @endif
</div>

