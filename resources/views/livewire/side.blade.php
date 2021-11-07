<div>
    <div class="announce">
        <div class=" relative shadow-lg">
            <h1 class="px-2 bg-main1 border-b-2 border-yellow-400 text-white">Announcement</h1>
            <div class="body bg-white border-b px-2 py-1 font-sans border-main">
                @foreach ($announce as $item)
                    <div class="my-3 flex space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 text-yellow-400  flex-shrink-0"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                        <a href="" class=" hover:text-gray-600 font-nun text-sm text-justify text-main1">
                            <p class="break-all">{{ $item->title }}</p>
                            </p>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="mt-10 relative">
        <div class="header bg-main1 border-t-2 border-yellow-400 text-white px-2">
            <h1 class="font-bold text-lg">ELMS</h1>
        </div>
        <div class="flex space-x-1">
            <div class="bg-main1 w-1 h-auto"></div>
            <div class="mt-1 w-full">
                <a href="https://kingdavidisulan.com/login" class="bg-blue-400 shadow-lg">
                    <img src="{{ asset('images/elms1.png') }}" class=" w-full rounded-lg shadow-lg" alt="">
                </a>
            </div>
        </div>
        <div class="header mt-8 bg-main1 border-t-2 border-yellow-400 text-white px-2">
            <h1 class="font-bold text-lg">CoVID-19 Updates</h1>
        </div>
        <div class="flex space-x-1">
            <div class="bg-main1 w-1 h-auto"></div>
            <div class="mt-1 w-full">
                <a href="https://kingdavidisulan.com/login" class="bg-blue-400 shadow-lg">
                    <img src="{{ asset('images/covid19.png') }}" class=" w-full rounded-lg shadow-lg" alt="">
                </a>
            </div>
        </div>

    </div>
</div>
