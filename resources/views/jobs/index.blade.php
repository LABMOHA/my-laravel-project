

<x-layout>
@include('partials._hero')
@include('partials._search')

<div  class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless (count($listings)==0)
    

@foreach ($listings as $item)

<x-item-card  :item='$item'  />
{{-- <h1>{{$item['id']}}</h1>
    <a href="/listing/{{$item['id']}}"><h2>{{$item['title']}}</h2></a>
    <p>{{$item['desc']}}</p> --}}
    
@endforeach

    
@else
    <p>No Jobs found</p>

@endunless

</div>
<div class="mt-6 p-4">
    {{$listings->links()}}
</div>
</x-layout>
