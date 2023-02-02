<x-layout>
    <div class="container flex flex-col items-center px-6 pt-16 mx-auto justify-center">
        <h5 class="max-w-sm text-2xl font-bold text-center md:hover:text-bmw md:text-3xl md:text-left">
            {{ $blog->title }}
        </h5>
        {{-- <BiDotsVerticalRounded />  --}}
        <p class="mx-w-sm text-2xl text-center md:text-left">
            {{ $blog->published }}
        </p>
        <p class="border flex justify-center mr-64 bg-black text-white pb-1 mx-w-sm text-2xl text-center hover:bg-bmw md:text-left">
            {{ $blog->tags }}
        </p>
        <p class="border flex justify-center mr-64 bg-black text-white pb-1 mx-w-sm text-2xl text-center hover:bg-bmw md:text-left">
            {{ $blog->description }}
        </p>
    </div>
</x-layout>