<div>
  @foreach ($announce as $item)
       <div class="div relative text-main1 bg-white mb-5 rounded-lg  shadow-lg">
       <div class="news">
           <div class="header py-4 p-2 relative bg-gray-200 rounded-t-lg">
               <img src="{{ asset('storage/announcement/' . $item->image->url) }}"
                class="absolute inset-0 z-0 w-full h-full object-cover opacity-70  rounded-t-lg" alt="">
               <div class="title relative flex ">
               <div class="title bg-gray-800 bg-opacity-50 rounded-full ">
                   <h1 class="text-white text-lg font-semibold px-3 z-50   ">{{$item->title}}</h1>
               </div>
           </div>
           <div class="date flex space-x-1 items-center text-white relative">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg>
<span class=" text-sm">{{ $item->created_at->format('M d, Y') }}</span>
           </div>
           </div>

           <div class="py-2 relative text-gray-800 px-2">
               <p class="line-clamp-2">{{ $item->content }}</p>
               <a class="text-sm text-main1" href="{{route('view-news',['id' => $item->id])}}">Read More</a>
           </div> 
       </div>
   </div>
  @endforeach
</div>
<div class="new relative mt-8 flex space-x-2">
        <div class="bg-main1 w-1 h-20"></div>
        <div class="content  flex-1">
            <div class="flex flex-col">
                <div class="flex justify-between">
                    <div class="flex space-x-1 text-main1 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        <h1 class="text-xl font-bold  font-nun">Where to Find Us</h1>
                    </div>
                </div>
                <div class="mt-3 border-4 border-main1 relative shadow-lg">
                    <iframe class="w-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0762811539526!2d124.59830761456558!3d6.637449095200459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f80eaa7db3b7fd%3A0xb9fa5ba998575d7e!2sKing%20David%20Academy!5e0!3m2!1sen!2sph!4v1634974941414!5m2!1sen!2sph"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
        </div>
    </div>

@section('mobile')
   @foreach ($announce as $item)
       <div class="div relative text-main1 bg-white my-5 mx-1 lg:hidden rounded-lg  shadow-lg">
       <div class="news">
           <div class="header py-4 p-2 relative bg-gray-200 rounded-t-lg">
               <img src="{{ asset('storage/announcement/' . $item->image->url) }}"
                class="absolute inset-0 z-0 w-full h-full object-cover opacity-70  rounded-t-lg" alt="">
               <div class="title relative flex ">
               <div class="title bg-gray-800 bg-opacity-50 rounded-full ">
                   <h1 class="text-white text-lg font-semibold px-3 z-50  line-clamp-1  ">{{$item->title}}</h1>
               </div>
           </div>
           <div class="date flex space-x-1 items-center text-white relative">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg>
<span class=" text-sm">{{ $item->created_at->format('M d, Y') }}</span>
           </div>
           </div>

           <div class="py-2 relative text-gray-800 px-2">
               <p class="line-clamp-2">{{ $item->content }}</p>
               <a class="text-sm text-main1" href="{{route('view-news',['id' => $item->id])}}">Read More</a>
           </div> 
       </div>
   </div>
  @endforeach

  <div class="title mx-2 mt-5 text-main1 flex flex-col justify-center lg:hidden">
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
@endsection