@extends('layouts.admin')
@section('content')
    <div class="py-6 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-bold text-main1 font-sans  ">NEWS MANAGEMENT</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            @livewire('news')
            <!-- /End replace -->
        </div>
    </div>
@endsection
