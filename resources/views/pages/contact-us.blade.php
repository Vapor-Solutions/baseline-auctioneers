@extends('layouts.front')


@section('content')
    <x-front.page-header>
        <x-slot name="header">Contact Us</x-slot>
        <x-slot name="short">Services</x-slot>
    </x-front.page-header>
    {{-- <x-front.contact-section></x-front.contact-section>
     --}}

    @livewire('contact-section')
    <x-front.contact-info></x-front.contact-info>
@endsection
