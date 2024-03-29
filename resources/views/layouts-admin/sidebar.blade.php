<aside class="bg-colorNav  text-white w-64 h-screen fixed top-0 border-r left-0 flex flex-col border-colarNavRed ">
    <!-- Sidebar header -->
    <div class="flex items-center justify-left h-16 border-b border-colarNavRed">
    <img class="ml-4 h-8 w-8" src="image/logo.png" alt="Your Company">
        <div class="px-4">Hello, <span class="font-bold text-danger-600"> Admin</span>
            
        </div>
    </div>
    
    <!-- Sidebar content -->
    <div class="flex-1 overflow-y-auto">
        <!-- Sidebar items -->
        <ul class="py-4">

                <li class="px-6 py-2 hover:bg-danger-700">
            <a href="{{ route('logout') }}" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
               class="block text-sm font-semibold leading-6 white hover:text-white">
                Add User</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </li>
                  
            <li class="px-6 py-2 hover:bg-danger-700">
    <a href="{{ route('logout') }}" 
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
       class="block text-sm font-semibold leading-6 text-danger-600 hover:text-white">
        Logout <span aria-hidden="true">&rarr;</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</li>

        </ul>
    </div>
    
    <!-- Sidebar footer -->
    <div class="py-4">
        <div class=" text-center text-xs text-gray-500 text-opacity-30 font-semibold py-1">
            Project Created by Espinosa & Jimenea
        </div>
    </div>
</aside>
