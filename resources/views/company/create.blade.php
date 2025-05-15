<x-layout-company>


    
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Job
        </h2>
        <p class="mb-4">Post a Job to find a Candidate</p>
    </header>

    <form method="POST"action="{{route('company.jobstore')}}"    class="form " enctype="multipart/form-data">
        @csrf
        {{-- @method('POST') --}}
        

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Job Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                id="title"
                placeholder="Example: Senior Java Developer"
                value="{{old('title')}}"
            />
            @error('title')
                <div class="text-red-500 text-xs mt-1">
                {{$message}}   
                </div>
        
                @enderror
        </div>

        <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg mb-2"
                >Job Location</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="location"
                id="location"
                placeholder="Example:  Agadir Ma, Hamburg Gr, etc"
                value="{{old('location')}}"

            />
            @error('location')
                <div class="text-red-500 text-xs mt-1">
                {{$message}}   
                </div>
     
                @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Contact Email</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                id="email"
                value="{{old('email')}}"
            />
            @error('email')
                <div class="text-red-500 text-xs mt-1">
                {{$message}}   
                </div>
     
                @enderror
        </div>

        <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg mb-2"
            >
                Website/Application URL
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="website"
                id="website"
                value="{{old('website')}}"
            />
            @error('website')
                <div class="text-red-500 text-xs mt-1">
                {{$message}}   
                </div>
     
                @enderror
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                id="tags"
                placeholder="Example: Laravel, Backend, Postgres, etc"
                value="{{old('tags')}}"
            />
            @error('tags')
                <div class="text-red-500 text-xs mt-1">
                {{$message}}   
                </div>
     
                @enderror
        </div>

        

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Job Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description_job"
                id="description_job"
                rows="10"
                placeholder="Include tasks, requirements, salary, etc"
                value="{{old('description_job')}}"
            ></textarea>
            @error('description_job')
                <div class="text-red-500 text-xs mt-1">
                {{$message}}   
                </div>
     
                @enderror
        </div>

        <div class="mb-6">
            
            <button type="submit"  class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"> Create Job</button>

            <a href="{{route('company.index')}}" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div>







</x-layout-company>