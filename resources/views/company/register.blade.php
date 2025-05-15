<x-layout-company>

    <div class="mx-4">
        <div
            class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Register
                </h2>
                <p class="mb-4">Create an account to post Job</p>
            </header>

            <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">
                        Name Company :
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        value="{{old('name')}}"
                    />
                    @error('name')
                                <div class="text-red-500 text-xs mt-1">
                                {{$message}}   
                                </div>
                            
                                @enderror
                </div>
                
                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2"
                        >Email</label
                    >
                    <input
                        type="email"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
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
                        for="password"
                        class="inline-block text-lg mb-2"
                    >
                        Password
                    </label>
                    <input
                        type="password"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="password"
                        value="{{old('password')}}"
                    />
                    @error('password')
                                <div class="text-red-500 text-xs mt-1">
                                {{$message}}   
                                </div>
                            
                                @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="password_conformation"
                        class="inline-block text-lg mb-2"
                    >
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="password_conformation"
                    />
                    @error('password_conformation')
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
                        id="logo"
                    />
                    @error('logo')
                        <div class="text-red-500 text-xs mt-1">
                        {{$message}}   
                        </div>
             
                        @enderror
                </div>
                <div class="mb-6">
                    <label
                        for="location"
                        class="inline-block text-lg mb-2"
                        >Company Location</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="location"
                        id="location"
                        placeholder="Example: Hamburg Gr, etc"
                        value="{{old('location')}}"

                    />
                    @error('location')
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
                        Website
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
                    <label
                        for="description_company"
                        class="inline-block text-lg mb-2"
                    >
                        Company Information
                    </label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description_company"
                        id="description_company"
                        rows="10"
                        placeholder="Include tasks, requirements, salary, etc"
                        value="{{old('description_company')}}"
                    >{{old('description_company')}}</textarea>
                    @error('description_company')
                        <div class="text-red-500 text-xs mt-1">
                        {{$message}}   
                        </div>
             
                        @enderror
                </div>

                <div class="mb-6">
                    <button
                        type="submit"
                        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Sign Up
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Already have an account?
                        <a href="{{route('company.login')}}" class="text-laravel"
                            >Login</a
                        >
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout-company>