<div>
    <div class="py-4  ">
        <div class="">
            <div class="carousels mx-56 bg-white">
                <div class="bg-blue-300 h-72">
                    <div class="carousel shadow-lg w-full">
                        <div wire:ignore
                            data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": true, "autoPlay": 5000, "fade": true}'
                            class="  main-carousel flickity-enabled is-draggable">

                            @forelse ($carousels as $item)
                                 <div class="carousel-cell bg-blue-400 shadow-md relative w-full h-72">

                                    @if ($item->image->url == null)
                                        <img src="" class="h-72 w-full shadow-md" alt="">
                                    @else
                                        <img src="{{ asset('storage/carousel/' . $item->image->url) }}"
                                            class="h-72 w-full shadow-md" alt="">
                                    @endif


                                    <div
                                        class="absolute bottom-3 left-3 bg-side text-white bg-main rounded-tr-full border-r-4 border-yellow-400 bg-opacity-60 p-2 px-3">
                                        <h1 class="font-medium">{{ $item->type }}</h1>
                                    </div>
                                </div>
                            @empty
                                <div class="carousel-cell bg-blue-400 shadow-md relative w-full h-72">

                                   
                                        <img src="{{ asset('images/Carousel.png') }}"
                                            class="h-72 w-full shadow-md" alt="">
                                   


                                    <div
                                        class="absolute bottom-3 left-3 bg-side text-white bg-main rounded-tr-full border-r-4 border-yellow-400 bg-opacity-60 p-2 px-3">
                                        <h1 class="font-medium"></h1>
                                    </div>
                                </div>
                            @endforelse


                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 px-2  flex space-x-5 w-full">
                <div class="w-80">
                    <ul role="list"
                        class="divide-y px-2 bg-white h-80 overflow-y-auto shadow-xl rounded-lg divide-gray-200">
                        @forelse ($carousels as $carousel)
                            <li class="py-4 flex cursor-pointer hover:bg-gray-50"
                                wire:click="edit({{ $carousel->id }})">
                                <img class="h-10 w-10 rounded-full"
                                    src="{{ asset('storage/carousel/' . $carousel->image->url) }}" alt="">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">{{ $carousel->title }}</p>
                                    <p class="text-sm text-gray-500">{{ $carousel->type }}</p>
                                </div>
                            </li>
                        @empty

                        @endforelse


                    </ul>

                </div>
                <div class=" px-2 flex-1">
                    <div class="bg-white relative rounded-lg shadow-lg py-2">
                        <label
                            class="border-2 border-dashed h-40 relative hover:font-bold z-50 border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center mx-40 rounded-md">
                            <div class="flex bg-gray-700 bg-opacity-50 rounded-lg text-gray-50 px-2 relative z-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="">Upload Image</span>

                                <input type="file" name="" id="" wire:model="photo" class="hidden">
                            </div>
                            @if ($photo)
                                <img src="{{ $photo->temporaryUrl() }}"
                                    class="absolute inset-0 z-0 w-full h-full object-cover opacity-80" alt="">
                            @endif
                        </label>
                        <div class="mt-2 mx-40">
                            <select wire:model="type" name="" id="" class="rounded-lg">
                                <option value="Announcement">Announcement</option>
                                <option value="News">News</option>
                            </select>

                            <input wire:model="title" type="text" name="" id="" class="rounded-lg"
                                placeholder="Title ">
                        </div>
                        <div class="mt-2 mx-40">
                            <button wire:click="save" class="bg-main1 text-white px-10 py-1 rounded-lg">
                                Save
                            </button>
                        </div>
                        <div
                            class="{{ $isEdit == false ? 'hidden' : 'block' }} absolute py-2  top-0 w-full h-full transition bg-gray-50 rounded-lg z-50">
                            <label
                                class="border-2 border-dashed h-40 relative hover:font-bold z-50 border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center mx-40 rounded-md">
                                <div class="flex bg-gray-700 bg-opacity-50 rounded-lg text-gray-50 px-2 relative z-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="">Upload Image</span>

                                    <input type="file" name="" id="" wire:model="photo" class="hidden">
                                </div>
                                @if ($photo == null)
                                    <img src="{{ asset('storage/carousel/' . $lastphoto) }}"
                                        class="absolute inset-0 z-0 w-full h-full object-cover opacity-80" alt="">
                                @else
                                    <img src="{{ $photo->temporaryUrl() }}"
                                        class="absolute inset-0 z-0 w-full h-full object-cover opacity-80" alt="">
                                @endif
                            </label>
                            <div class="mt-2 mx-40">
                                <select wire:model="type" name="" id="" class="rounded-lg">
                                    <option value="Announcement">Announcement</option>
                                    <option value="News">News</option>
                                </select>

                                <input wire:model="title" type="text" name="" id="" class="rounded-lg"
                                    placeholder="Title ">
                            </div>
                            <div class="mt-2 flex space-x-2 mx-40">
                                <button wire:click="editsave" class="bg-main1 text-white px-10 py-1 rounded-lg">
                                    Update
                                </button>
                                <button wire:click="delete" class="bg-red-600 text-white px-10 py-1 rounded-lg">
                                    Delete
                                </button>
                                <button wire:click="cancel" class="bg-gray-200 text-red-600 px-10 py-1 rounded-lg">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
