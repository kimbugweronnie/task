@extends('layouts.dashboard')

@section('content')

@include('messages.flash')

<livewire:show-task :id="$id" />

@endsection