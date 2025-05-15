

@props(['tagsD'])
@php
    $tags=explode(',',$tagsD);
@endphp

<ul class="flex">
    @foreach ($tags as $tag_item)
        <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/findjob/?tag={{$tag_item}}">{{$tag_item}}</a>
    </li>
    @endforeach
    
    
</ul>