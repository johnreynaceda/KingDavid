<div x-data="{add:false}">
    {{-- <div class="py-4">
        <div class="flex mb-5">
            <button @click="add=true" class="bg-main1 px-4 py-1 text-white rounded-lg ">
                Add New
            </button>
        </div>
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="-my-5 divide-y divide-gray-200">
                @foreach ($announce as $item)
                    <li class="py-5 px-2 mt-2 flex hover:bg-gray-50 cursor-pointer">
                        <img class="h-10 w-10 rounded-full"
                            src="{{ asset('storage/announcement/' . $item->image->url) }}" alt="">
                        <div class="relative py-3 px-2 focus-within:ring-2 focus-within:ring-indigo-500">
                            <h3 class="text-sm font-semibold text-gray-800">
                                <a href="#" class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{ $item->created_at->format('M d, Y ') }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-600 
                                 line-clamp-2">
                                {{ $item->content }}
                            </p>
                        </div>
                    </li>
                @endforeach


            </ul>
        </div>
    </div> --}}
    <div class=" flex mt-5 space-x-5">
        <main class="w-96 px-2 border-r-2 border-main1">
            @if ($isEdit == false)
                <div class="header px-2 text-bold text-lg text-main1">
                    <h1>Add News</h1>
                </div>
                <div class="mt-2">
                    <label
                        class="border-2 border-dashed h-40 relative hover:font-bold z-50 bg-white border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center  rounded-md">
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
                    <div class="mt-2">
                        <input type="text" wire:model="title" class="rounded-lg w-full" placeholder="title ">
                        <textarea wire:model="content" name="" id="" class="w-full mt-1 rounded-lg" cols="30"
                            placeholder="content here..." rows="10"></textarea>
                    </div>
                    <div class="flex-shrink-0 px-4 py-4 flex justify-end">

                        <button wire:click="save"
                            class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            @else
                <div class="header px-2 text-bold text-lg text-main1">
                    <h1>Update News</h1>
                </div>
                <div class="mt-2">
                    <label
                        class="border-2 border-dashed h-40 relative hover:font-bold z-50 bg-white border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center  rounded-md">
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
                            <img src="{{ asset('storage/announcement/' . $lastphoto) }}"
                                class="absolute inset-0 z-0 w-full h-full object-cover opacity-80" alt="">
                        @else
                            <img src="{{ $photo->temporaryUrl() }}"
                                class="absolute inset-0 z-0 w-full h-full object-cover opacity-80" alt="">
                        @endif
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model="title" class="rounded-lg w-full" placeholder="title ">
                        <textarea wire:model="content" name="" id="" class="w-full mt-1 rounded-lg" cols="30"
                            placeholder="content here..." rows="10"></textarea>
                    </div>
                    <div class="flex-shrink-0 px-4 py-4 flex justify-end">

                        <button wire:click="cancel"
                            class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-red-400 bg-gray-300  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button wire:click="delete"
                            class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Delete
                        </button>
                        <button wire:click="editsave"
                            class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-main1 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Update
                        </button>
                    </div>
                </div>
            @endif
        </main>
        <aside class="flex-1">
            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul role="list" class="-my-5 divide-y divide-gray-200">
                    @foreach ($news as $item)
                        <li class="py-5 px-2 mt-2 flex hover:bg-gray-50 cursor-pointer"
                            wire:click="edit({{ $item->id }})">
                            <img class="h-10 w-10 rounded-full"
                                src="{{ asset('storage/announcement/' . $item->image->url) }}" alt="">
                            <div class="relative py-3 px-2 ">
                                <h3 class="text-sm font-semibold text-gray-800">
                                    <a href="#" class="focus:outline-none">
                                        <!-- Extend touch target to entire panel -->
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        {{ $item->created_at->format('M d, Y ') }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 
                                 line-clamp-2">
                                    {{ $item->content }}
                                </p>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>
        </aside>
    </div>
    <div x-show="add" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
        class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div class="absolute inset-0 overflow-hidden">
            <!-- Background overlay, show/hide based on slide-over state. -->
            <div class="absolute bg-main1 bg-opacity-50 inset-0" aria-hidden="true">
                <div class="fixed  inset-y-0 right-0 pl-10 max-w-full flex">
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
                        <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                            <div class="min-h-0 flex-1 flex flex-col py-6 overflow-y-scroll">
                                <div class="px-4 sm:px-6">
                                    <div class="flex items-start justify-between">
                                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                            Add New Announcement
                                        </h2>
                                        <div class="ml-3 h-7 flex items-center">
                                            <button type="button"
                                                class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                <span class="sr-only">Close panel</span>
                                                <!-- Heroicon name: outline/x -->
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 relative flex-1 px-4 sm:px-6">
                                    <!-- Replace with your content -->
                                    <div class="h-full  border-gray-200" aria-hidden="true">
                                        <label
                                            class="border-2 border-dashed h-40 relative hover:font-bold z-50 border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center  rounded-md">
                                            <div
                                                class="flex bg-gray-700 bg-opacity-50 rounded-lg text-gray-50 px-2 relative z-50">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span class="">Upload Image</span>

                                                <input type="file" name="" id="" wire:model="photo"
                                                    class="hidden">
                                            </div>
                                            @if ($photo)
                                                <img src="{{ $photo->temporaryUrl() }}"
                                                    class="absolute inset-0 z-0 w-full h-full object-cover opacity-80"
                                                    alt="">
                                            @endif
                                        </label>
                                        <div class="mt-2">
                                            <input type="text" wire:model="title" class="rounded-lg w-full">
                                            <div x-data="{add:false}">

                                                <div class=" flex mt-5 space-x-5">
                                                    <main class="w-96 px-2 border-r-2 border-main1">
                                                        @if ($isEdit == false)
                                                            <div class="header px-2 text-bold text-lg text-main1">
                                                                <h1>Add New News asdasd</h1>
                                                            </div>
                                                            <div class="mt-2">
                                                                <label
                                                                    class="border-2 border-dashed h-40 relative hover:font-bold z-50 bg-white border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center  rounded-md">
                                                                    <div
                                                                        class="flex bg-gray-700 bg-opacity-50 rounded-lg text-gray-50 px-2 relative z-50">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-6 w-6" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                        </svg>
                                                                        <span class="">Upload Image</span>

                                                                        <input type="file" name="" id=""
                                                                            wire:model="photo" class="hidden">
                                                                    </div>
                                                                    @if ($photo)
                                                                        <img src="{{ $photo->temporaryUrl() }}"
                                                                            class="absolute inset-0 z-0 w-full h-full object-cover opacity-80"
                                                                            alt="">
                                                                    @endif
                                                                </label>
                                                                <div class="mt-2">
                                                                    <input type="text" wire:model="title"
                                                                        class="rounded-lg w-full" placeholder="title ">
                                                                    <textarea wire:model="content" name="" id=""
                                                                        class="w-full mt-1 rounded-lg" cols="30"
                                                                        placeholder="content here..."
                                                                        rows="10"></textarea>
                                                                </div>
                                                                <div class="flex-shrink-0 px-4 py-4 flex justify-end">

                                                                    <button wire:click="save"
                                                                        class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        Save
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="header px-2 text-bold text-lg text-main1">
                                                                <h1>Add New News</h1>
                                                            </div>
                                                            <div class="mt-2">
                                                                <label
                                                                    class="border-2 border-dashed h-40 relative hover:font-bold z-50 bg-white border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center  rounded-md">
                                                                    <div
                                                                        class="flex bg-gray-700 bg-opacity-50 rounded-lg text-gray-50 px-2 relative z-50">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-6 w-6" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                        </svg>
                                                                        <span class="">Upload Image</span>

                                                                        <input type="file" name="" id=""
                                                                            wire:model="photo" class="hidden">
                                                                    </div>
                                                                    @if ($photo == null)
                                                                        <img src="{{ asset('storage/announcement/' . $lastphoto) }}"
                                                                            class="absolute inset-0 z-0 w-full h-full object-cover opacity-80"
                                                                            alt="">
                                                                    @else
                                                                        <img src="{{ $photo->temporaryUrl() }}"
                                                                            class="absolute inset-0 z-0 w-full h-full object-cover opacity-80"
                                                                            alt="">
                                                                    @endif
                                                                </label>
                                                                <div class="mt-2">
                                                                    <input type="text" wire:model="title"
                                                                        class="rounded-lg w-full" placeholder="title ">
                                                                    <textarea wire:model="content" name="" id=""
                                                                        class="w-full mt-1 rounded-lg" cols="30"
                                                                        placeholder="content here..."
                                                                        rows="10"></textarea>
                                                                </div>
                                                                <div class="flex-shrink-0 px-4 py-4 flex justify-end">

                                                                    <button wire:click="cancel"
                                                                        class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-red-400 bg-gray-300  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        Cancel
                                                                    </button>
                                                                    <button wire:click="delete"
                                                                        class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        Delete
                                                                    </button>
                                                                    <button wire:click="editsave"
                                                                        class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-main1 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        Update
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </main>
                                                    <aside class="flex-1">
                                                        <div class="bg-white shadow overflow-hidden sm:rounded-md">
                                                            <ul role="list" class="-my-5 divide-y divide-gray-200">
                                                                @foreach ($news as $item)
                                                                    <li class="py-5 px-2 mt-2 flex hover:bg-gray-50 cursor-pointer"
                                                                        wire:click="edit({{ $item->id }})">
                                                                        <img class="h-10 w-10 rounded-full"
                                                                            src="{{ asset('storage/announcement/' . $item->image->url) }}"
                                                                            alt="">
                                                                        <div class="relative py-3 px-2 ">
                                                                            <h3
                                                                                class="text-sm font-semibold text-gray-800">
                                                                                <a href="#" class="focus:outline-none">
                                                                                    <!-- Extend touch target to entire panel -->
                                                                                    <span class="absolute inset-0"
                                                                                        aria-hidden="true"></span>
                                                                                    {{ $item->created_at->format('M d, Y ') }}
                                                                                </a>
                                                                            </h3>
                                                                            <p
                                                                                class="mt-1 text-sm text-gray-600 
                                 line-clamp-2">
                                                                                {{ $item->content }}
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                @endforeach


                                                            </ul>
                                                        </div>
                                                    </aside>
                                                </div>
                                                <div x-show="add"
                                                    x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                                    x-transition:enter-start="translate-x-full"
                                                    x-transition:enter-end="translate-x-0"
                                                    x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                                    x-transition:leave-start="translate-x-0"
                                                    x-transition:leave-end="translate-x-full"
                                                    class="fixed inset-0 overflow-hidden"
                                                    aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
                                                    <div class="absolute inset-0 overflow-hidden">
                                                        <!-- Background overlay, show/hide based on slide-over state. -->
                                                        <div class="absolute bg-main1 bg-opacity-50 inset-0"
                                                            aria-hidden="true">
                                                            <div
                                                                class="fixed  inset-y-0 right-0 pl-10 max-w-full flex">
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
                                                                    <div
                                                                        class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                                                                        <div
                                                                            class="min-h-0 flex-1 flex flex-col py-6 overflow-y-scroll">
                                                                            <div class="px-4 sm:px-6">
                                                                                <div
                                                                                    class="flex items-start justify-between">
                                                                                    <h2 class="text-lg font-medium text-gray-900"
                                                                                        id="slide-over-title">
                                                                                        Add New Announcement
                                                                                    </h2>
                                                                                    <div
                                                                                        class="ml-3 h-7 flex items-center">
                                                                                        <button type="button"
                                                                                            class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                                                            <span
                                                                                                class="sr-only">Close
                                                                                                panel</span>
                                                                                            <!-- Heroicon name: outline/x -->
                                                                                            <svg class="h-6 w-6"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 24 24"
                                                                                                stroke="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M6 18L18 6M6 6l12 12" />
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mt-6 relative flex-1 px-4 sm:px-6">
                                                                                <!-- Replace with your content -->
                                                                                <div class="h-full  border-gray-200"
                                                                                    aria-hidden="true">
                                                                                    <label
                                                                                        class="border-2 border-dashed h-40 relative hover:font-bold z-50 border-gray-700 cursor-pointer hover:bg-gray-50 flex justify-center items-center  rounded-md">
                                                                                        <div
                                                                                            class="flex bg-gray-700 bg-opacity-50 rounded-lg text-gray-50 px-2 relative z-50">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                class="h-6 w-6"
                                                                                                fill="none"
                                                                                                viewBox="0 0 24 24"
                                                                                                stroke="currentColor">
                                                                                                <path
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                                            </svg>
                                                                                            <span
                                                                                                class="">Upload
                                                                                                Image</span>

                                                                                            <input type="file" name=""
                                                                                                id="" wire:model="photo"
                                                                                                class="hidden">
                                                                                        </div>
                                                                                        @if ($photo)
                                                                                            <img src="{{ $photo->temporaryUrl() }}"
                                                                                                class="absolute inset-0 z-0 w-full h-full object-cover opacity-80"
                                                                                                alt="">
                                                                                        @endif
                                                                                    </label>
                                                                                    <div class="mt-2">
                                                                                        <input type="text"
                                                                                            wire:model="title"
                                                                                            class="rounded-lg w-full"
                                                                                            placeholder="title ">
                                                                                        <textarea wire:model="content"
                                                                                            name="" id=""
                                                                                            class="w-full mt-1 rounded-lg"
                                                                                            cols="30"
                                                                                            placeholder="content here..."
                                                                                            rows="10"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /End replace -->
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="flex-shrink-0 px-4 py-4 flex justify-end">
                                                                            <button type="button"
                                                                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                                Cancel
                                                                            </button>
                                                                            <button wire:click="save"
                                                                                class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                                Save
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            placeholder="title ">
                                            <textarea wire:model="content" name="" id="" class="w-full mt-1 rounded-lg"
                                                cols="30" placeholder="content here..." rows="10"></textarea>
                                        </div>
                                    </div>
                                    <!-- /End replace -->
                                </div>
                            </div>
                            <div class="flex-shrink-0 px-4 py-4 flex justify-end">
                                <button type="button"
                                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cancel
                                </button>
                                <button wire:click="save"
                                    class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
