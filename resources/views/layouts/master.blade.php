<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>King David Academy</title>
    <link rel="shortcut icon" href="{{ asset('images/KDILogo.png') }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>


    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="body h-full  bg-gray-50 text-white" x-data="{shown:false}">
        <nav class="bg-gradient-to-t from-main  to-main1 border-b-2 lg:border-b-4 border-yellow-400  flex flex-col  md:px-32 lg:px-40 relative"
            x-intersect:leave="shown=true" x-intersect:enter="shown=false">
            <img src="{{ asset('images/KDIBackground.jpg') }}"
                class="absolute inset-0 z-0 w-full h-full object-cover opacity-10" alt="">
            <div class=" justify-between w-full pt-8 hidden lg:flex">
                <div class="logo relative flex items-center space-x-5">
                    <img src="{{ asset('images/KDILogo.png') }}" class="h-20" alt="">
                    <div class="title">
                        <h1 class="text-2xl font-sans font-extrabold">KING DAVID ACADEMY</h1>
                        <h1 class="leading-3">"A Partner in your Kids Success"</h1>
                    </div>
                </div>
                <div class="search relative flex flex-col justify-center">
                    <a href="{{ route('login') }}" class="flex ml-5 font-pop hover:text-gray-400 space-x-1 text-sm">
                        <span>Login as Administrator</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                    </a>
                    <div class="flex items-center font-pop">
                        <input type="text" class="h-10 rounded-l-full w-56 border-none text-sm text-gray-500"
                            placeholder="Search...">
                        <button class="bg-yellow-400 text-gray-800 rounded-r-full h-10 px-4 text-sm">Search</button>
                    </div>
                </div>
            </div>
            <div class="mobile mb-2 relative lg:hidden">
                <div class="logo w-full mt-5 flex space-x-2 items-center justify-center">
                    <img src="{{ asset('images/KDILogo.png') }}" class="h-20" alt="">
                    <div class="title">
                        <h1 class="text-xl font-sans font-extrabold">KING DAVID ACADEMY</h1>
                        <h1 class="leading-3">"A Partner in your Kids Success"</h1>
                    </div>
                </div>
                <div class="search relative mt-4 justify-center flex items-center">
                    <div class="flex items-center font-pop">
                        <input type="text" class="h-10 rounded-l-full w-56 border-none text-sm text-gray-500"
                            placeholder="Search...">
                        <button class="bg-yellow-400 text-gray-800 rounded-r-full h-10 px-4 text-sm">Search</button>
                    </div>
                </div>
            </div>
            <div class="mobile mt-3 mb-1 relative lg:hidden" x-data="{side:false}">

                <div class="fixed top-5 right-0  z-30">
                    <div @click="side = true"
                        class="bg-yellow-400 p-1  border-l-2 border-t-2 border-b-2 rounded-l-full border-main1 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-main1 pl-1 " viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div x-show="side" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-cloak
                    class="fixed inset-0 z-50 overflow-hidden" aria-labelledby="slide-over-title" role="dialog"
                    aria-modal="true">
                    <div class="absolute inset-0 overflow-hidden">
                        <!-- Background overlay, show/hide based on slide-over state. -->
                        <div class="absolute inset-0" aria-hidden="true">
                            <div class="fixed  inset-y-0 pl-16 max-w-full right-0 flex">
                                <!--
          Slide-over panel, show/hide based on slide-over state.

          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
                                <div class="w-screen max-w-md">
                                    <form class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                                        <div class="flex-1 h-0 overflow-y-auto">
                                            <div class="py-6 relative px-4 bg-main1 sm:px-6">
                                                <img src="{{ asset('images/KDIBackground.jpg') }}"
                                                    class="absolute inset-0 z-0 w-full h-full object-cover opacity-10"
                                                    alt="">
                                                <div class="flex items-center justify-between">
                                                    <h2 class="text-lg font-medium flex space-x-1 text-white"
                                                        id="slide-over-title">
                                                        MENU
                                                    </h2>
                                                    <div class="ml-3 h-7 flex items-center relative">
                                                        <button @click="side=false" type="button"
                                                            class="bg-indigo-700 rounded-md text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                                            <span class="sr-only">Close panel</span>
                                                            <!-- Heroicon name: outline/x -->
                                                            <svg class="h-6 w-6"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-1">

                                                </div>
                                            </div>
                                            <div class="flex-1 flex flex-col justify-between" x-data="{drop: ''}">
                                                <div class="px-4 divide-y divide-gray-200 text-main1 sm:px-6"
                                                    @click.outside="drop = ''">

                                                    <div class="space-y-1 mt-1 font-sans">
                                                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                                        <a href="{{ route('home') }}"
                                                            class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium"
                                                            aria-controls="sub-menu-1" aria-expanded="false">
                                                            <!-- Heroicon name: outline/users -->

                                                            <span class="flex-1 font-bold">
                                                                Home
                                                            </span>

                                                        </a>
                                                        <!-- Expandable link section, show/hide based on state. -->

                                                    </div>
                                                    <div class="space-y-1 mt-1">
                                                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                                        <a href="#" @click="drop = 'about'"
                                                            class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium"
                                                            aria-controls="sub-menu-1" aria-expanded="false">
                                                            <!-- Heroicon name: outline/users -->

                                                            <span class="flex-1 font-bold">
                                                                About KDI
                                                            </span>
                                                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                                                            <svg :class="drop=='about' ? 'rotate-90' : '' "
                                                                class="text-gray-600 ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150"
                                                                viewBox="0 0 20 20" aria-hidden="true">
                                                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                                                            </svg>
                                                        </a>
                                                        <!-- Expandable link section, show/hide based on state. -->
                                                        <div x-cloak x-show="drop == 'about'" x-collapse
                                                            class="space-y-1" id="sub-menu-1">
                                                            <a href="{{ route('school') }}"
                                                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                                The School
                                                            </a>

                                                            <a href="{{ route('message') }}"
                                                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                                Message from the Principal
                                                            </a>

                                                            <a href="{{ route('vm') }}"
                                                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                                Vision and Mission
                                                            </a>

                                                            <a href="{{ route('chart') }}"
                                                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                                Organizational Chart
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="space-y-1 mt-1">
                                                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                                        <a href="{{ route('academic') }}"
                                                            class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium"
                                                            aria-controls="sub-menu-1" aria-expanded="false">
                                                            <!-- Heroicon name: outline/users -->

                                                            <span class="flex-1 font-bold">
                                                                Academic
                                                            </span>

                                                        </a>

                                                    </div>
                                                    <div class="space-y-1 mt-1">
                                                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                                        <a href="#" @click="drop = 'policy'"
                                                            class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium"
                                                            aria-controls="sub-menu-1" aria-expanded="false">
                                                            <!-- Heroicon name: outline/users -->

                                                            <span class="flex-1 font-bold">
                                                                Policies
                                                            </span>
                                                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                                                            <svg :class="drop=='policy' ? 'rotate-90' : '' "
                                                                class="text-gray-600 ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150"
                                                                viewBox="0 0 20 20" aria-hidden="true">
                                                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                                                            </svg>
                                                        </a>
                                                        <!-- Expandable link section, show/hide based on state. -->
                                                        <div x-cloak x-show="drop == 'policy'" x-collapse
                                                            class="space-y-1" id="sub-menu-1">
                                                            <a href="{{ route('admission') }}"
                                                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                                Admission
                                                            </a>

                                                            <a href="{{ route('requirement') }}"
                                                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                                Requirements
                                                            </a>


                                                        </div>
                                                    </div>
                                                    <div class="space-y-1 mt-1">
                                                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                                        <a href="#" @click="drop = 'etools'"
                                                            class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium"
                                                            aria-controls="sub-menu-1" aria-expanded="false">
                                                            <!-- Heroicon name: outline/users -->

                                                            <span class="flex-1 font-bold">
                                                                e-Tools
                                                            </span>
                                                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->
                                                            <svg :class="drop=='etools' ? 'rotate-90' : '' "
                                                                class="text-gray-600 ml-3 flex-shrink-0 h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150"
                                                                viewBox="0 0 20 20" aria-hidden="true">
                                                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                                                            </svg>
                                                        </a>
                                                        <!-- Expandable link section, show/hide based on state. -->
                                                        <div x-cloak x-show="drop == 'etools'" x-collapse
                                                            class="space-y-1" id="sub-menu-1">
                                                            <a href="https://kingdavidisulan.com" target="_blank"
                                                                class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                                e-LMS
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="space-y-1 mt-1">
                                                        <!-- Current: "bg-gray-100 text-gray-900", Default: "bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                                                        <a href="#"
                                                            class="bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900 group w-full flex items-center pl-2 pr-1 py-2 text-left text-sm font-medium"
                                                            aria-controls="sub-menu-1" aria-expanded="false">
                                                            <!-- Heroicon name: outline/users -->

                                                            <span class="flex-1 font-bold">
                                                                Contact Us
                                                            </span>
                                                            <!-- Expanded: "text-gray-400 rotate-90", Collapsed: "text-gray-300" -->

                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t mt-5 pb-2 relative hidden lg:block ">
                <div class="border-t border-yellow-400 ">
                    <div class="flex font-nun justify-between mt-1" x-data="{ tab: ''}" @click.outside="tab = ''">

                        <div class="flex space-x-6 items-center">
                            <a href="{{ route('home') }}"
                                class="font-semibold text-white hover:bg-white px-1 hover:bg-opacity-20 rounded">Home</a>

                            <a href="" @mouseover="tab = 'about'"
                                class="font-semibold text-white flex space-x-1 items-center hover:bg-white px-1 hover:bg-opacity-20 rounded"><span>About
                                    KDI</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="{{ route('academic') }}"
                                class="font-semibold text-white hover:bg-white px-1 hover:bg-opacity-20 rounded">Academics</a>

                            <a href="" @mouseover="tab = 'policy'"
                                class="font-semibold text-white flex space-x-1 items-center hover:bg-white px-1 hover:bg-opacity-20 rounded"><span>Policies</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg></a>
                            <a href="" @mouseover="tab = 'etools'"
                                class="font-semibold text-white flex space-x-1 items-center hover:bg-white px-1 hover:bg-opacity-20 rounded"><span>e-Tools</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg></a>

                            <a href=""
                                class="font-semibold text-white hover:bg-white px-1 hover:bg-opacity-20 rounded">Contact
                                Us</a>
                        </div>
                        <div class="link flex ">
                            <div class="border-2 flex">
                                <div class="px-2 text-white">QUICK LINKS</div>
                                <button @click="tab = 'links'" class="bg-yellow-400 text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M15.707 4.293a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 011.414-1.414L10 8.586l4.293-4.293a1 1 0 011.414 0zm0 6a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 111.414-1.414L10 14.586l4.293-4.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                        </div>

                        <div x-cloak x-show="tab == 'about'" @mouseleave="tab = ''" x-collapse
                            class="absolute z-10  mt-8 transform w-64  left-20">
                            <div class="rounded-md shadow-lg border-2 border-white overflow-hidden">
                                <div class="bg-main1 bg-opacity-90 text-main1">
                                    <div class="p-2">
                                        <a href="{{ route('school') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">The School</span>
                                        </a>
                                        <a href="{{ route('message') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Message from the
                                                President</span>
                                        </a>
                                        <a href="{{ route('vm') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Vision and Mission</span>
                                        </a>
                                        <a href="{{ route('chart') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Organizational
                                                Chart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-cloak x-show="tab == 'academic'" @mouseleave="tab = ''" x-collapse
                            class="absolute z-10  mt-8 transform w-64  left-56">
                            <div class="rounded-md shadow-lg border-2 border-white overflow-hidden">
                                <div class="bg-main1 bg-opacity-90 text-main1">
                                    <div class="p-2">
                                        <div
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Nursery</span>
                                        </div>
                                        <div
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Kinder</span>
                                        </div>
                                        <div
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Grade I to VI</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-cloak x-show="tab == 'policy'" @mouseleave="tab = ''" x-collapse
                            class="absolute z-10  mt-8 transform w-64  left-80">
                            <div class="rounded-md shadow-lg border-2 border-white overflow-hidden">
                                <div class="bg-main1 bg-opacity-90 text-main1">
                                    <div class="p-2">
                                        <a href="{{ route('admission') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Admission</span>
                                        </a>
                                        <a href="{{ route('requirement') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Requirements</span>
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-cloak x-show="tab == 'etools'" @mouseleave="tab = ''" x-collapse
                            class="absolute z-10  mt-8 transform w-64 ml-16  left-96">
                            <div class="rounded-md shadow-lg border-2 border-white overflow-hidden">
                                <div class="bg-main1 bg-opacity-90 text-main1">
                                    <div class="p-2">
                                        <a href="https://kingdavidisulan.com" target="_blank"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">eLMS</span>
                                        </a>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-cloak x-show="tab == 'links'" @mouseleave="tab = ''" x-collapse
                            class="absolute z-10  mt-8 transform w-64  right-0">
                            <div class="rounded-md shadow-lg border-2 border-white overflow-hidden">
                                <div class="bg-main1 bg-opacity-90 text-main1">
                                    <div class="p-2">
                                        <a href="{{ route('school') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">About</span>
                                        </a>
                                        <a href="{{ route('message') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">The Principal</span>
                                        </a>
                                        <a href="{{ route('chart') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Organizational
                                                Chart</span>
                                        </a>
                                        <a href="{{ route('admission') }}"
                                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                            <span class="text-white font-semibold font-sans">Admission</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="bg-main  relative px-40 top-0 z-30 sticky hidden lg:block" x-show="shown" x-cloak x-collapse
            x-data="{ tabs: ''}">
            <img src="{{ asset('images/KDIBackground.jpg') }}"
                class="absolute inset-0 z-0 w-full h-full object-cover opacity-10" alt="">
            <div class="py-3" @click.outside="tabs = ''">
                <div class="flex justify-between relative">
                    <div class="flex space-x-6 items-center">
                        <a href="{{ route('home') }}"
                            class="font-semibold text-white hover:bg-white px-1 hover:bg-opacity-20 rounded">Home</a>

                        <a href="" @mouseover="tabs = 'about'"
                            class="font-semibold text-white flex space-x-1 items-center hover:bg-white px-1 hover:bg-opacity-20 rounded"><span>About
                                KDI</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="{{ route('academic') }}"
                            class="font-semibold text-white hover:bg-white px-1 hover:bg-opacity-20 rounded">Academics</a>


                        <a href="" @mouseover="tabs = 'policy'"
                            class="font-semibold text-white flex space-x-1 items-center hover:bg-white px-1 hover:bg-opacity-20 rounded"><span>Policies</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg></a>
                        <a href="" @mouseover="tabs = 'etools'"
                            class="font-semibold text-white flex space-x-1 items-center hover:bg-white px-1 hover:bg-opacity-20 rounded"><span>e-Tools</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg></a>

                        <a href=""
                            class="font-semibold text-white hover:bg-white px-1 hover:bg-opacity-20 rounded">Contact
                            Us</a>
                    </div>
                    <div class="link flex ">
                        <div class="border-2 flex">
                            <div class="px-2 text-white">QUICK LINKS</div>
                            <button @mouseover="tabs = 'links'" class="bg-yellow-400 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M15.707 4.293a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 011.414-1.414L10 8.586l4.293-4.293a1 1 0 011.414 0zm0 6a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 111.414-1.414L10 14.586l4.293-4.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                    </div>


                </div>

            </div>

            <div x-show="tabs == 'about'" @mouseleave="tabs = ''" x-cloak class="absolute z-50">
                <div class="fixed top-12 left-20  mx-40 bg-main1 rounded border-2 border-white  ">
                    <div class="p-2">
                        <a href="{{ route('school') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">The School</span>
                        </a>
                        <a href="{{ route('message') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">Message from the
                                Principal</span>
                        </a>
                        <a href="{{ route('vm') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">Vision and Mission</span>
                        </a>
                        <a href="{{ route('chart') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">Organizational Chart</span>
                        </a>
                    </div>
                </div>
            </div>

            <div x-show="tabs == 'policy'" @mouseleave="tabs = ''" x-cloak class="absolute z-50">
                <div class="fixed top-12 left-80  mx-40 bg-main1 rounded border-2 border-white  ">
                    <div class="p-2">
                        <a href="{{ route('admission') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">Admission</span>
                        </a>
                        <a href="{{ route('requirement') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">Requirements</span>
                        </a>


                    </div>
                </div>
            </div>
            <div x-show="tabs == 'etools'" @mouseleave="tabs = ''" x-cloak class="absolute z-50">
                <div class="fixed top-12   right-96 mr-96  w-40  bg-main1 rounded border-2 border-white  ">
                    <div class="p-2">
                        <a href="https://kingdavidisulan.com" target="_blank"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">eLMS</span>
                        </a>
                    </div>
                </div>
            </div>
            <div x-show="tabs == 'links'" @mouseleave="tabs = ''" x-cloak class="absolute z-50">
                <div class="fixed top-12   right-0 mx-40   bg-main1 rounded border-2 border-white  ">
                    <div class="p-2">
                        <a href="{{ route('school') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">About</span>
                        </a>
                        <a href="{{ route('message') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">The Principal</span>
                        </a>
                        <a href="{{ route('chart') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">Organizational
                                Chart</span>
                        </a>
                        <a href="{{ route('admission') }}"
                            class="flex py-1 items-center space-x-2 hover:bg-white rounded hover:bg-opacity-20 cursor-pointer my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                            <span class="text-white font-semibold font-sans">Admission</span>
                        </a>



                    </div>
                </div>
            </div>
        </div>



        <div class="main py-8 md:px-32 lg:px-40 hidden lg:block relative">
            <svg class="absolute top-0 left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                <defs>
                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
            </svg>
            <svg class="absolute bottom-0 left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                <defs>
                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
            </svg>
            <svg class="absolute bottom-0 right-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                <defs>
                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
            </svg>
            <svg class="absolute top-0 right-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                <defs>
                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
            </svg>
            <div class="flex space-x-6">
                <main class="flex-1 w-full ">
                    @yield('main')
                </main>
                <aside class="w-72">
                    @yield('side')

                    sdsdsd
                </aside>
            </div>
        </div>

        @yield('mobile')
        <div class="footer  w-full bottom-0 overflow-x-hidden ">
            <footer class="bg-gradient-to-t from-main1 to-main border-t-2 border-yellow-400 relative"
                aria-labelledby="footer-heading">
                <img src="{{ asset('images/KDILogo.png') }}"
                    class="absolute bottom-0 z-30 -right-36 opacity-20 h-96 " alt="">
                <img src="{{ asset('images/KDIBackground.jpg') }}"
                    class="absolute inset-0 z-0 w-full h-full object-fit opacity-5" alt="">
                <h2 id="footer-heading" class="sr-only">Footer</h2>
                <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6  lg:px-8">
                    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                        <div class="space-y-8 xl:col-span-1">
                            <img class="h-20" src="{{ asset('images/KDILogo.png') }}" alt="Company name">
                            <p class="text-white text-lg font-bold">
                                KING DAVID ACADEMY
                            </p>
                            <div class="flex space-x-6">
                                <a href="#" class="text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Facebook</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                            <div class="md:grid md:grid-cols-2 md:gap-8">
                                <div>
                                    <h3 class="text-sm font-semibold text-yellow-400 tracking-wider uppercase">
                                        VISITOR COUNTER
                                    </h3>
                                    <ul role="list" class="mt-4 space-y-4">
                                        <li>
                                            <div class="flex space-x-1 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3  text-yellow-400 mt-1" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p class="text-gray-100 font-nun">Today's Visitor: 100</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex space-x-1 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 w-3  text-yellow-400 mt-1" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p class="text-gray-100 font-nun">Total Visitors: 1,345</p>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                                <div class="mt-12 md:mt-0">
                                    <h3 class="text-sm font-semibold text-yellow-400 tracking-wider uppercase">
                                        VISION
                                    </h3>
                                    <div class="flex space-x-1 ">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-3 w-3 text-yellow-400  flex-shrink-0   mt-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-gray-100 text-sm text-justify font-nun">Lorem Ipsum is simply
                                            dummy
                                            text of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s, when an unknown printer
                                            took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="md:grid md:grid-cols-2 md:gap-8">
                                <div>
                                    <h3 class="text-sm font-semibold text-yellow-400 tracking-wider uppercase">
                                        Mission
                                    </h3>
                                    <div class="flex space-x-1 ">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-3 w-3 text-yellow-400  flex-shrink-0   mt-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-gray-100 text-sm text-justify font-nun">Lorem Ipsum is simply
                                            dummy
                                            text of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s, when an unknown printer
                                            took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                                <div class="mt-12 md:mt-0">
                                    <h3 class="text-sm font-semibold text-yellow-400 tracking-wider uppercase">
                                        Our Address
                                    </h3>
                                    <div class="flex space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 mt-1"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-gray-100 font-nun">Kalawag II, Isulan, 9805, Philippines</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 border-t uppercase border-gray-200 pt-8">
                        <p class="text-base text-white xl:text-center">
                            &copy; 2021 King David Academy, Isulan. All rights reserved.
                        </p>
                    </div>

                </div>

            </footer>

        </div>

    </div>

    @livewireScripts

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>

</body>

</html>
