<x-layout-company>



    
        @include('partials._hero')
        @include('partials.company_search')
        
        <div  class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        
        @if (!$jobs->isEmpty())
            
        
        @foreach ($jobs as $item)
        
        <x-item-card-company  :item='$item'  />
       
            {{-- test --}}
        @endforeach
        
            
        @else
        <h1 class="text-2xl text-gray-600 font-semibold mt-4">No Jobs</h1>
        <p class="text-gray-400 mt-5">Click "Post Jobs" to add jobs.</p>
        
        
        @endif
         {{-- <h1>{{$item['id']}}</h1>
            <a href="/listing/{{$item['id']}}"><h2>{{$item['title']}}</h2></a>
            <p>{{$item['desc']}}</p> --}}
        </div>
        <div class="mt-6 p-4">
            {{$jobs->links()}}
        </div>
        
        




</x-layout-company>