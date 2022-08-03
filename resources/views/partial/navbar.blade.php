<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"> 
    <div class="container w-full mx-auto">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-slate-500 block py-2">
                    <img src="{{ asset('img/logodivi.svg') }}" alt="Logo" class="w-20 h-12 object-fill">
                </a>

            </div>
          
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="lg:hidden block absolute right-4">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>

                <nav id="nav-menu" class="lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none  hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full">
                    <ul class="block lg:flex">
                        <li class="group" tabindex="0">
                            <a href="/" class="text-base text-black py-2 mx-8 flex group-hover:text-slate-500 {{ ($title == "Home") ? 'text-slate-400' : '' }}">Home</a>
                        </li>
                        <li class="group">
                            <a href="/about" class="text-base text-black py-2 mx-8 flex group-hover:text-slate-500 {{ ($title == "About") ? 'text-slate-400' : '' }}">About</a>
                        </li>
                        <li class="group">
                            <a href="/blog" class="text-base text-black py-2 mx-8 flex group-hover:text-slate-500  {{ ($title == "All Post" ) ? 'text-slate-400' : '' }}">Blog</a>
                        </li>
                        @auth
                        <div class="relative group">
                            <button class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 focus:outline-none font-montserrat">
                                <span>Welcome, {{ auth()->user()->name }}</span>
                            </button>
                            <div class="absolute z-10 hidden bg-grey-200 group-hover:block">
                                
                                <div class="px-2 pt-2 pb-4 shadow-lg text-center bg-white">
                                  <div class="grid gap-2">
                                    <a href="/dashboard">My Dashboard</a>
                                    <hr width="100%">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="font-semibold text-lg ">LOG-OUT</button>
                                    </form>
                                  </div>
                                </div>
                            </div>
                        </div>  
                        
                        

                        @else
                        <li class="group">
                            <a href="/login" class="text-base text-white bg-sky-500 rounded-md py-2 px-2 mx-8 flex group-hover:text-neutral-300 group-hover:bg-sky-600 ">Login</a>
                        </li>
                        @endauth
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
 </header>