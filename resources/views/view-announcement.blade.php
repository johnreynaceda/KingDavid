@extends('layouts.master')
@section('main')
   @livewire('view-announcement',[
       'id' => $id,
   ])
@endsection
@section('side')
    @livewire('side')
@endsection

