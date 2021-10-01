
@include('ui_admin.component.header')

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    @include('ui_admin.component.navbar')

    <div class="flex flex-col md:flex-row">

        @include('ui_admin.component.sidebar')

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2">

            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl flex items-center justify-between bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">@yield('title')</h3>
                    <p class="text-sm pt-3 pr-10">
                        Home / @yield('title')
                    </p>
                </div>
            </div>

            @yield('content')

            {{-- Footer --}}
            {{-- <div class="hidden md:block bg-gray-800">
                <div class="rounded-bl-3xl flex items-center justify-end bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <span class="">Excalibur, 2021</span>
                </div>
            </div> --}}
            
        </div>
    </div>


    @include('ui_admin.component.footer')


</body>

</html>