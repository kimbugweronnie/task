@extends('layouts.dashboard')

@section('content')

@include('messages.flash')

<livewire:create-task />

@endsection