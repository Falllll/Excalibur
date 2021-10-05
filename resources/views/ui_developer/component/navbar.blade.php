
        <!-- Desktop Header -->
        <header class="w-full bg-gray-800 items-center py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-full items-center space-x-3 flex justify-end">
                <span class="text-white">
                    Welcome, Developer
                </span>
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-white hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img 
                        class="object-cover object-center w-full h-10" 
                        src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=785&q=80"
                    >
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-28">
                    <a href="#profile" class="block hover:bg-gray-800 hover:text-white px-4 py-2 ">Profile</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full  py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Developer</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="/developer" class="flex hover:bg-white hover:text-black items-center text-white py-2 pl-4 ">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="#template" class="flex hover:bg-white hover:text-black items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 ">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Template
                </a>
                <a href="#bank" class="flex hover:bg-white hover:text-black items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 ">
                    <i class="fas fa-coins mr-3"></i>
                    Bank
                </a>
                <a href="#transaction" class="flex hover:bg-white hover:text-black items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 ">
                    <i class="far fa-handshake mr-3"></i>
                    Transaction
                </a>
                <a href="#log" class="flex hover:bg-white hover:text-black items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 ">
                    <i class="fas fa-clipboard-list mr-3"></i>
                    Log
                </a>
                <a href="#profile" class="flex hover:bg-white hover:text-black items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 ">
                    <i class="fas fa-user mr-3"></i>
                    Profile
                </a>
                <a href="#signout" class="flex hover:bg-white hover:text-black items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 ">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
            </nav>
        </header>