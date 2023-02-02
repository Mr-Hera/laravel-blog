<x-layout>
    <div class="pb-40">
        <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Create a Blog</h2>
            <p class="mb-4">
                Post a blog to find a <span class="font-bold text-bsouth">/</span><span class="font-bold text-bmw">/</span><span class="font-bold text-red-700">/</span><span class="font-bold">M</span> fan
            </p>
        </header>
    
        <form method="POST" action="/blogs" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Blog Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                value="{{old('title')}}" />
    
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">Tags</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Example: sport, electric, sedan, suv" value="{{old('tags')}}" />
    
            @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6">
            <label for="published" class="inline-block text-lg mb-2">Date Published</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="published"
                placeholder="Example: 2023_01_23 etc" value="{{old('published')}}" />
    
            @error('published')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            {{-- <div class="mb-6">
            <label for="cover" class="inline-block text-lg mb-2">
                Blog Cover
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="cover" />
    
            @error('cover')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div> --}}
    
            <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Blog Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                placeholder="Include blog article here...">{{old('description')}}</textarea>
    
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            </div>
    
            <div class="mb-6 flex justify-center ">
                <button class="bg-black text-white py-2 px-4 hover:bg-bmw">
                    Create Blog
                </button>
            </div>
        </form>
        </x-card>
    </div>
</x-layout>  