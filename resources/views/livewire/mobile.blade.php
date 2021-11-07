<div class="w-full">
    <div class="lg:hidden mobile main mt-2">
        <div class="carousel">
            <div class="carousel shadow-lg w-full">
                <div data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "autoPlay": 5000, "fade": true}'
                    class="  main-carousel flickity-enabled is-draggable">

                    @forelse ($carousels as $item)
                       <div class="carousel-cell bg-blue-400 shadow-md relative w-full h-48">

                            <img src="{{ asset('storage/carousel/' . $item->image->url) }}"
                                class="h-48 w-full shadow-md" alt="">

                            <div
                                class="absolute bottom-3 left-3 bg-side text-white bg-main rounded-tr-full border-r-4 border-yellow-400 bg-opacity-60 p-2 px-3">
                                <h1 class="font-medium">{{ $item->type }}</h1>
                            </div>
                        </div>  
                    @empty
                        <div class="carousel-cell bg-blue-400 shadow-md relative w-full h-48">

                            <img src="{{ asset('images/Carousel.png') }}"
                                class="h-48 w-full shadow-md" alt="">

                            <div
                                class="absolute bottom-3 left-3 bg-side text-white bg-main rounded-tr-full border-r-4 border-yellow-400 bg-opacity-60 p-2 px-3">
                                <h1 class="font-medium"></h1>
                            </div>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
        <div class="mt-5 mx-2">
            <div class="title text-main1 flex flex-col justify-center">
                <h1 class="text-lg flex items-center space-x-1 font-bold"> <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg><span>NEWS AND UPDATES</span></h1>

            </div>
            <div class="mt-2 mb-2 mx-10 flex flex-col items-center">
                <div class="grid grid-cols-1 gap-3">
                   @forelse ($news as $item)
                       <div class="h-96 w-69   rounded-xl bg-blue-400 ">
                            <div class="flex flex-col h-full ">
                                <div class="img h-32 bg-main1 rounded-t-xl">
                                    <img src="{{ asset('storage/announcement/' . $item->image->url) }}"
                                        class="object-fit h-full w-full opacity-80 rounded-t-xl" alt="">
                                </div>
                                <div class=" flex-1 bg-white border-l border-r border-main1 p-1 px-2 ">
                                    <div class="title">
                                        <p class="uppercase font-bold text-sm font-nun text-main">
                                            {{ $item->title }}
                                        </p>
                                        <p class="text-xs space-x-1 font-semibold flex items-center text-main1 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg><span>{{ $item->created_at->format('M d, Y') }}</span>
                                        </p>
                                    </div>
                                    <div class="content mt-3">
                                        <p class="line-clamp-3 text-justify font-sans text-main1 ">
                                            {{ $item->content }}
                                        </p>
                                    </div>
                                </div>
                                <div class="img h-16 rounded-b-xl">
                                    <a href="{{route('view-news',['id' => $item->id])}}"
                                        class="bg-main hover:underline flex items-center justify-center w-full text-white hover h-full rounded-b-xl">
                                        <span class="text-lg font-bold ">
                                            READ
                                            MORE</span></a>
                                </div>
                            </div>
                        </div>
                   @empty
                       <div class="h-96 w-69   rounded-xl  ">
                            <div class="img h-96 w-69  bg-main1 rounded-xl">
                                    <img src="{{ asset('images/News.png') }}"
                                        class="object-fit h-full w-full opacity-80 rounded-xl" alt="">
                                </div>
                        </div>
                   @endforelse

                </div>

                <a href="{{route('newss')}}" class="border-2 px-2 mt-3 text-main1 border-main1 font-bold">SEE MORE NEWS AND
                    UPDATES</a>
            </div>
        </div>
        <div class="mt-5 mx-2">
            <div class="title text-main1 flex flex-col justify-center">
                <h1 class="text-lg flex items-center space-x-1 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                    <span>ANNOUNCEMENTS</span>
                </h1>

            </div>
            <div class="mt-2 mb-2 mx-10 flex flex-col items-center">
                <div class="grid grid-cols-1 gap-3">
                   @forelse ($announce as $item)
                       <div class="h-96 w-69   rounded-xl bg-blue-400 ">
                            <div class="flex flex-col h-full ">
                                <div class="img h-32 bg-main1 rounded-t-xl">
                                    <img src="{{ asset('storage/announcement/' . $item->image->url) }}"
                                        class="object-fit w-full h-full opacity-80 rounded-t-xl" alt="">
                                </div>
                                <div class=" flex-1 bg-white border-l border-r border-main1 p-1 px-2 ">
                                    <div class="title">
                                        <p class="uppercase font-bold text-sm font-nun text-main">
                                            {{ $item->title }}
                                        </p>
                                        <p class="text-xs space-x-1 font-semibold flex items-center text-main1 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg><span>{{ $item->created_at->format('M d, Y') }}</span>
                                        </p>
                                    </div>
                                    <div class="content mt-3">
                                        <p class="line-clamp-3  font-sans text-main1 ">
                                            {{ $item->content }}
                                        </p>
                                    </div>
                                </div>
                                <div class="img h-16 rounded-b-xl">
                                    <a href="{{route('view-announce',['id' => $item->id])}}"
                                        class="bg-main hover:underline flex items-center justify-center w-full text-white hover h-full rounded-b-xl">
                                        <span class="text-lg font-bold ">
                                            READ
                                            MORE</span></a>
                                </div>
                            </div>
                        </div>
                   @empty
                        <div class="h-96 w-69   rounded-xl  ">
                            <div class="img h-96 w-69  bg-main1 rounded-xl">
                                    <img src="{{ asset('images/announce.png') }}"
                                        class="object-fit h-full w-full opacity-80 rounded-xl" alt="">
                                </div>
                        </div>
                   @endforelse

                </div>

                <a href="{{route('announce')}}" class="border-2 px-2 mt-3 text-main1 border-main1 font-bold">SEE MORE
                    ANNOUNCEMENTS</a>
            </div>
        </div>

        <div class="title mx-2 mt-5 text-main1 flex flex-col justify-center">
            <h1 class="text-lg flex items-center space-x-1 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                <span>Where to Find Us</span>
            </h1>

        </div>
        <div class="mt-2 border-4 border-main1 mx-2 relative shadow-lg lg:hidden">
            <iframe class="w-full "
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0762811539526!2d124.59830761456558!3d6.637449095200459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f80eaa7db3b7fd%3A0xb9fa5ba998575d7e!2sKing%20David%20Academy!5e0!3m2!1sen!2sph!4v1634974941414!5m2!1sen!2sph"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

</div>
