<x-layout-admin>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
          <h1 class="title">
            Jobs
          </h1>
          
        </div>
      </section>
    
    {{-- dashboard --}}
    
    
    <section class="section main-section">
        {{-- number admin --}}
    
        
    
        {{-- number admin --}}
    
        
    
        <div class="notification blue">
          <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
            <div>
              <span class="icon"><i class="mdi mdi-buffer"></i></span>
              <b>Users table</b>
            </div>
           
          </div>
        </div>
    
        <div class="card has-table">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
              Users
            </p>
            {{-- reload the page  --}}
            <a href="#" class="card-header-icon">
              <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
          </header>
          <div class="card-content">
            <table>
              <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>email</th>
                <th>password</th>
                
                
                <th></th>
              </tr>
              </thead>
              <tbody>
              @foreach ($persons as $item)
                  
              
                <tr>
                  {{-- class="image-cell"--}}
                 
                  <td >
                    <div class="">
                      <img src="{{asset('img\person.png')}}"class="rounded-full" style="width: 32px; height: 32px;">
                    </div>
                  </td>
                  <td data-label="Company">{{$item->name}}</td>
                  <td data-label="email">{{$item->email}}</td>
                  <td data-label="pasword">{{bcrypt($item->password)}}</td>
                  <td class="actions-cell">
                    <div class="buttons right nowrap">
                      {{-- <button class="button small"   type="button">
                        <span class="icon"><i class="mdi mdi-pencil"></i></span>
                      </button> --}}
                      <form  action="{{route('_admin.delete_person',$item->id)}}" method="POST"      >
                                      @csrf
                                      @method('DELETE')
                      <button class="button small red "  >
                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                      </button></form>
                    </div>
                  </td>
                </tr>
    
    
                
              
              @endforeach
              
              
              
              </tbody>{{$persons->links()}}
            </table>
            
            <div class="mt-6 p-4">
             
          </div>
            
            <div class="table-pagination">
              <div class="flex items-center justify-between">
                
                
              </div>
            </div>
          </div>
        </div>
      </section>
    
    
    </x-layout-admin>