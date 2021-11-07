@extends('layouts.master')
@section('main')
   @livewire('view-news',[
       'id' => $id,
   ])
@endsection
@section('side')
    @livewire('side')
@endsection

