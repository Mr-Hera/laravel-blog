<x-layout>
    <a href="/" class="inline-block text-black ml-56 pt-10 pr-2 pl-28 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="pb-40">
        <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Blog</h2>
            <h2 class="text-2xl bg-black text-white mx-44 mb-4">
                Edit: {{ $blog->title }} 
            </h2>
        </header>
    
        <form method="POST" action="/blogs/{{ $blog->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Blog Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                value="{{ $blog->title }}" />
    
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">Tags</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Example: sport, electric, sedan, suv" value="{{ $blog->tags }}" />
    
            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6">
            <label for="published" class="inline-block text-lg mb-2">Date Published</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="published"
                placeholder="Example: 2023_01_23 etc" value="{{ $blog->published }}" />
    
            @error('published')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6">
            <label for="cover" class="inline-block text-lg mb-2">
                Cover Image
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="cover" />
            <img src="{{ $blog->cover ? asset('storage/' .$blog->cover) : asset('/images/no-image.png' .$blog->cover) }}" alt="" class="w-48 mr-6 mb-6" />
    
            @error('cover')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Blog Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                placeholder="Include blog article here...">{{ $blog->description }}</textarea>
    
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6 flex justify-center ">
                <button class="bg-black text-white py-2 px-4 hover:bg-bmw">
                    Update Blog
                </button>
            </div>
        </form>
        </x-card>
    </div>
</x-layout>  