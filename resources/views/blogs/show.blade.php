<x-layout>
    <a href="/" class="inline-block text-black ml-56 pt-10 pr-2 pl-28 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="container flex flex-col items-center px-6 pt-16 mx-auto justify-center">
        <h5 class="max-w-sm text-2xl font-bold text-center md:hover:text-bmw md:text-3xl md:text-left">
            {{ $blog->title }}
        </h5>
        {{-- <BiDotsVerticalRounded />  --}}
        <div class="flex mx-w-sm text-2xl text-center md:text-left">
            <span class="ml-64 pr-2 bg-white">Model Type:</span>
            <p class="border justify-center mr-64 bg-black text-white pb-1 mx-w-sm text-2xl text-center hover:bg-bmw md:text-left">
                {{ $blog->tags }}
            </p> 
        </div>
        <div class="flex mx-w-sm mb-8 text-2xl text-center md:text-left">
            <span class="ml-64 pr-2 bg-white">Date Published:</span>
            <p class="border justify-center mr-64 bg-black text-white pb-1 mx-w-sm text-2xl text-center hover:bg-bmw md:text-left">
                {{ $blog->published }}
            </p>
        </div>
        <div>
            {{ $blog->cover }}
        </div>
        <p class="flex justify-center mx-64 pb-1 mx-w-sm text-2xl text-center md:text-left">
            {{ $blog->description }}
        </p>
    </div>
</x-layout>