<x-layout>

    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                        <header class="text-center">
                            <h2 class="text-2xl font-bold uppercase mb-1">
                                Edit a Job
                            </h2>
                            <p class="mb-4">Edit : {{$item->title}}</p>
                        </header>
    
                        <form method="POST"action="{{route('jobs.update',['id'=>$item->id])}}"    class="form " enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <div class="mb-6">
                                <label
                                    for="company"
                                    class="inline-block text-lg mb-2"
                                    >Company Name</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="company"
                                    id="company"
                                    value="{{$item->company}}"
                                />
                                    @error('company')
                                    <div class="text-red-500 text-xs mt-1">
                                    {{$message}}   
                                    </div>
                                
                                    @enderror
                            </div>
    
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
                                    value="{{$item->title}}"
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
                                    value="{{$item->location}}"
                                    placeholder="Example: Remote,  Hamburg Gr, etc"
                                    
    
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
                                    value="{{$item->email}}"
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
                                    value="{{$item->website}}"
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
                                    value="{{$item->tags}}"
                                />
                                @error('tags')
                                    <div class="text-red-500 text-xs mt-1">
                                    {{$message}}   
                                    </div>
                         
                                    @enderror
                            </div>
    
                            <div class="mb-6">
                                <label for="logo" class="inline-block text-lg mb-2">
                                    Company Logo
                                </label>
                                <input
                                    type="file"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="logo"
                                    {{-- value="{{$item->logo}}" --}}
                                />
                                <img
                                class="w-48 mr-6 mb-6"
            
                                src="{{asset($item->logo)}}"
                                alt=""
                                        />
                                @error('logo')
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
                                    name="description"
                                    id="description"
                                    rows="10"
                                    placeholder="Include tasks, requirements, salary, etc"
                                    
                                >{{$item->description}}</textarea>
                                @error('description')
                                    <div class="text-red-500 text-xs mt-1">
                                    {{$message}}   
                                    </div>
                         
                                    @enderror
                            </div>
    
                            <div class="mb-6">
                                
                                <button type="submit"  class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"> Edit Job</button>
    
                                <a href="/" class="text-black ml-4"> Back </a>
                            </div>
                        </form>
                    </div>
                </x-layout>