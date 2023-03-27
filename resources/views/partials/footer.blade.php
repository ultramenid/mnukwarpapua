 {{-- footer --}}
 <footer class="bg-footer py-6 w-full">
    <div class="max-w-6xl mx-auto flex sm:flex-row flex-col justify-between sm:space-x-6 space-x-0 sm:space-y-0 space-y-6 px-4 py-2">
        <div class="flex flex-col space-y-3 text-white sm:w-5/12 w-full">
            <h2 class="font-semibold">About us</h2>
            <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus doloribus officiis distinctio voluptate quo eius cupiditate quos odio quod, facere quibusdam fugit totam eos, optio corrupti sunt labore deleniti a.</p>
            <p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia iste voluptatibus et! Quo, doloremque assumenda, explicabo quae earum quia iure modi esse debitis nam error ea nihil eius delectus voluptas?</p>
        </div>
        <div class="flex flex-col space-y-3  sm:w-4/12 w-full">
            <h2 class="text-white font-semibold">Connect with us</h2>
            <div class="flex flex-col space-y-2 text-white">
                <div class="flex space-x-2 text-xs items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                    </svg>
                    <a class="text-mnukwar">
                        Contact us
                    </a>
                </div>
                <div class="flex space-x-2 text-xs items-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                      </svg>
                    <a class="text-mnukwar">
                        info@mnukwarpapua.id
                    </a>
                </div>
                <div class="flex space-x-2 text-xs items-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                      </svg>


                    <a class="text-mnukwar">
                        +62 0000000000
                    </a>
                </div>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="h-8 w-8 rounded-full border border-white flex justify-center items-center">
                    <img src="{{ asset('img/facebook.svg') }}" alt="Mnukwar Papua" class="h-4 w-4">
                </a>

                <a href="#" class="h-8 w-8 rounded-full border border-white flex justify-center items-center">
                    <img src="{{ asset('img/twitter.svg') }}" alt="Mnukwar Papua" class="h-4 w-4">
                </a>

                <a href="#" class="h-8 w-8 rounded-full border border-white flex justify-center items-center">
                    <img src="{{ asset('img/ig.png') }}" alt="Mnukwar Papua" class="h-4 w-4">
                </a>
            </div>
        </div>
    </div>
</footer>
