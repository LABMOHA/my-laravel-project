@props(['item'])
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset($item->logo)}}"
            alt=""
        />
        
        <div>
            <h3 class="text-2xl">
                <a href="{{route('person.sehen',
                ['id'=>$item['id']])}}">
                {{$item->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$item->title}}</div>
            <div class="text-xl font-bold mb-4  fa-solid fa-building"> {{$item->name}}</div>
            <x-tags-card :tagsD='$item->tags'/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$item->location}}
            </div>
        </div>
        <div class="ml-auto">
            @if (auth('person')->check())
            <button class="  rounded-full p-2 hover:bg-laravel transition duration-300">
                
                <img class="h-10 w-10" src="{{asset('images/unsaved.png')}}" alt="">
                
                
            </button>
            @else
                
            @endif
            
        </div>
    </div>
</div>