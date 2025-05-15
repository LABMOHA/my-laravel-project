<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#1C77BE",
                            
                        },
                    },
                },
            };
        </script>
        <title>JobFinder Post | Find IT Jobs </title>
        <style>
            .under:hover, .under:focus {
                text-decoration: underline;
                text-decoration-color: blue;
            }
            .navi a {
                font-size: 20px;
            }


            .acti{
                align-items: center;
                padding: 0.5rem 1rem;
                border-radius: 9999px; /* Rounded corners to make it circular */
                transition: background-color 0.3s, color 0.3s;
                background-color: #1C77BE; /* Blue background color for the active link */
                color: white;
            }
        </style>
    </head>
    <body class="mb-48 bg-gray-200">
        <nav class="flex justify-between items-center ">
            {{-- mb-4 --}}
            <a  @if(auth('company')->id())
                href="{{route('company.index')}}"
                @else
                
            href="{{route('company.home')}}"
            @endif
                ><img class="h-20 w-20 rounded-tr rounded-br " src="{{asset('images/_job_post.png')}}" alt="" class="logo"
            /></a>
            {{-- rounded-xl --}}
            {{-- test --}}
            @if(auth('company')->id())
                
            @else
            <div class=" navi hidden sm:flex space-x-6 text-lg">
                <a href="{{route('company.home')}}"
                    class=" {{ request()->is('company/home') ? 'bg-laravel text-white transition duration-300' : '' }}
                    fa-solid fa-home  px-4 py-2 
                rounded-full hover:bg-laravel hover:text-white transition duration-300"> Home</a>
                <a href="{{route('company.about')}}" class="{{ request()->is('company/about') ? 'bg-laravel text-white transition duration-300' : '' }}
                fa-solid fa-info-circle  px-4 py-2 
                rounded-full hover:bg-laravel hover:text-white transition duration-300"> About</a>
                <a href="{{route('company.contact')}}" class="{{ request()->is('company/contact') ? 'bg-laravel text-white transition duration-300' : '' }}
                fa-solid fa-envelope  px-4 py-2 
                rounded-full hover:bg-laravel hover:text-white transition duration-300"> Contact</a>
            </div> 
           @endif
{{-- test --}}
            <ul class="flex space-x-6 mr-6 text-lg">
               @if(auth('company')->id())
                    
                
    {{-- Company ID: {{ auth()->guard('company')->user()->id }} --}}

                
                    
                
                <li>
                    <span class="font-bold uppercase">
                    welcome {{ auth('company')->user()->name }}

                    </span>
                </li>
                <li>
                    <a href="" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        Manage </a
                    >
                </li>
                <li>
                    
                    <form action="{{route('company.logout')}}" method="post" class="inline">
                    @csrf
                    <button type="submit" ><i class="fa-solid fa-door-closed"></i> logout</button>
                </form>
                </li>

                @else

                <li>
                    
                    <a href="{{route('company.register')}}" class="hover:text-laravel "
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    
                    <a href="{{route('company.login')}}" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endif
            </ul>
        </nav>
        <main>
            {{-- @yield('content') --}}
            {{$slot}}
        </main>
    
    
        <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
    >
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

        <a
        
        @auth('company')
        href="{{route('company.create')}}"
                @else
                
            href="{{route('company.home')}}"
            @endauth
            
            class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
            >Post Job</a
        >
    </footer> 
    
    
    {{-- <x-flash-message /> --}}
</body>
</html>
