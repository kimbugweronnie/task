@extends('layouts.dashboard')
@section('content')

@include('messages.flash')

<livewire:edit-task :id="$id" />

@endsection