<x-layout-company>
    {{-- @include('partials._search') --}}
    
    <a href="{{route('company.index')}}" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                
                src="{{asset($item->logo)}}"
                alt=""
            />
    
            <h2 class="text-2xl mb-2">{{$item->name}}</h2>
            <h3 class="text-2xl mb-2">{{$item->title}}</h3>
            {{-- <div class="text-xl font-bold mb-4">{{$item->company}}</div> --}}
            <x-tags-card :tagsD='$item->tags'/>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{$item->location}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Job Description
                </h3>
                <div class="text-lg space-y-6">
                    {{$item->description_job}}
    
                    <a
                        href="mailto:{{$item->email}}"
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact Employer</a
                    >
    
                    <a
                        href="{{$item->website}}"
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                        Website</a
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 border border-gray-200 p-2 rounded-full mt-4 flex space-x-6 w-20">
        <a href="/company/index/{{{$item->id}}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
    </a>
    
    </div>
    
    <div class="bg-gray-50 border border-gray-200 p-2  rounded-full mt-4 flex  space-x-6 w-20 ">
    <form  action="{{route('company.destroy',$item->id)}}" method="POST"  class=""
        >
                        @csrf
                        @method('DELETE')
                    <button class="text-red-500"> <i class="fa-solid fa-trash"></i> Delete</button>
                </form>
            </div>
        
    
    </div>
    </x-layout>