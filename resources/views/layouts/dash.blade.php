<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Pressure Management System</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet"> 
    @livewireStyles
</head>


<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <!--Nav-->
    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center">
                <h1 class="px-6 mt-3 text-center text-3xl font-extrabold text-blue-600">
                    SAFE
                </h1>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                </span>
            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> </span> Hi, {{auth()->user()->name}}
                                <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <livewire:logout/>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="/" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white hover:border-pink-500 @if(Route::is('dashboard')) border-b-2  border-blue-600 @endif">
                            <i class="fas fa-chart-area pr-0 md:pr-3 @if(Route::is('dashboard')) text-blue-600 @endif"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/observations" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500 @if(Route::is('observations'))border-b-2  border-blue-600 @endif">
                            <i class="fas fa-chart-area pr-0 md:pr-3 @if(Route::is('observations')) text-blue-600 @endif"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Observations</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/patients" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500 @if(Route::is('patients'))border-b-2  border-blue-600 @endif">
                            <i class="fas fa-users pr-0 md:pr-3 @if(Route::is('patients')) text-blue-600 @endif"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Patients</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/staff" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500 @if(Route::is('staff'))border-b-2  border-blue-600 @endif">
                            <i class="fa fa-wallet pr-0 md:pr-3 @if(Route::is('staff')) text-blue-600 @endif"></i>
                            <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Staff</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
            @yield('content')
        </div>

    @livewireScripts
    <script src="{{asset('/js/app.js')}}"></script>
</body>

</html>