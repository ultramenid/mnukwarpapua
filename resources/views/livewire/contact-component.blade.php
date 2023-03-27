<div class="max-w-2xl mx-auto px-4 py-12">
    @if (session('message'))
        <p class="mb-2 text-xl">{{ session('message') }}</p>
    @endif
    <form wire:submit.prevent="storeInbox">
        @csrf
        <div class="">
            <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name:</label>
            <input type="text" wire:model='name' required="" class=" text-sm w-full rounded py-2 px-5 text-gray-700 border border-black focus:outline-none" >
        </div>
        <div class="mt-6">
            <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email:</label>
            <input type="email" wire:model='email' required="" class=" text-sm w-full rounded py-2 px-5 text-gray-700 border border-black focus:outline-none" >
        </div>
        <div class="mt-6">
            <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Subject:</label>
            <input type="text" wire:model='subject' required="" class=" text-sm w-full rounded py-2 px-5 text-gray-700 border border-black focus:outline-none" >
        </div>
        <div class="mt-6 flex flex-col">
            <label class="text-newgray-900 dark:text-gray-300">Deskripsi:</label>
            <textarea wire:model='deskripsi' cols="80" required="" rows="7" class=" text-gray-500 text-sm w-full rounded  px-4 py-1 focus:outline-none border border-black" ></textarea>
        </div>

        <div class="mt-6" wire:ignore>
            {!! NoCaptcha::renderJS() !!}
            {!! NoCaptcha::display(['data-callback' => 'onCallback']) !!}
        </div>
        @error('recaptcha') <div><span class="text-red-500 text-sm">{{ $message }}</span></div>@enderror

        <button class="mt-4 px-8 py-2 text-gray-100 bg-black" >
            Submit
          </button>
    </form>




</div>

@section('js')
<script type="text/javascript">
    var onCallback = function(){
        @this.set('recaptcha', grecaptcha.getResponse());
        console.log('test');
    };
</script>
@endsection
