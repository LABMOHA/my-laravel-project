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
                <a href="{{route('company.show',
                ['id'=>$item['id']])}}">
                {{$item->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$item->title}}</div>
            <x-tags-card-company :tagsD='$item->tags'/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$item->location}}
            </div>
        </div>
    </div>
</div>