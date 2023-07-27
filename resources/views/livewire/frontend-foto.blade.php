<div>
    <div class=" max-w-6xl mx-auto py-6 ">
        <div class="flex flex-wrap sm:flex-row flex-col sm:space-x-10 space-x-0 sm:space-y-0 space-y-10 justify-center  sm:px-0 px-4"
        x-data
        x-init = "
         GLightbox({
            touchNavigation: true,
         });
        "
        >
            @if ($foto)
                @foreach ($foto as $item)

                    <div class="bg-gray-100 pb-6 sm:w-3/12 w-full">
                        {{-- <img class="w-full h-60 object-cover object-center mb-6" src="{{ asset('storage/files/photos/'.$item->foto) }}" alt="{{$item->title}}" /> --}}
                        <a href="{{ asset('storage/files/photos/'.$item->foto) }}" class="glightbox "
                            data-title="<a class='font-bold'>{{$item->title}}</a>"
                            data-description="
                            @php
                            $date = \Carbon\Carbon::parse($item->publishdate)->locale('id');
                            $date->settings(['formatFunction' => 'translatedFormat']);
                            echo "<a class='font-bold'>".$date->format('d F Y')."</a> |";
                            @endphp
                            {{$item->deskripsi}}"
                            >
                            <img src="{{ asset('storage/files/photos/'.$item->foto) }}" alt="image"  class="w-full h-48 object-cover object-center mb-6"/>
                          </a>
                        <div class="px-4 mt-4">
                            <a  class=" md:text-2xl text-xl font-bold mt-6">{{$item->title}}</a>

                            <div class="mt-4">
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
        @if ($foto)
            {{ $foto->links('livewire.pagination') }}
        @endif

    </div>
</div>


