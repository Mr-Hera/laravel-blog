<x-layout>
    @include('partials._search')
    <div class="container flex flex-col items-center px-6 pt-16 mx-auto justify-center">
        
        <div class="container flex flex-col justify-center pt-6 mx-auto mt-10 space-y-12 md:space-y-0 md:space-x-10 md:flex-row">
            {{-- removed md:hover:border-blue-800 and replaced with  md:shadow-2xl --}}
            @unless (count($blogs) == 0)
                @foreach ($blogs as $blog)
                    <a href="/blogs/{{ $blog->id }}" class="flex flex-col items-left p-6 space-y-6 border md:w-1/4 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 md:hover:shadow-2xl duration-300 ...">
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
                        <button class="mx-w-sm pt-6 text-center md:text-center">
                            View
                        </button>
                    </a>
                @endforeach
                
            @endunless
        </div>
    </div>
</x-layout>