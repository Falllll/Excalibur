
@include('ui_developer.component.header')

<body class="bg-gray-900 font-family-karla flex">

    @include('ui_developer.component.sidebar')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        
        @include('ui_developer.component.navbar')
    
        <div class="w-full overflow-x-hidden border-t sm:border-none flex flex-col">
            <main class="w-full flex-grow flex justify-between p-6">
                <h1 class="text-3xl text-white">
                    @yield('title')
                </h1>

                <span class="text-white">
                    Home / @yield('title')
                </span>
            </main>

            @yield('content')
    
        @include('ui_developer.component.footer')
            
</body>
</html>