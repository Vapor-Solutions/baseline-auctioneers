@extends('layouts.front')


@section('content')
<x-front.page-header>
    <x-slot name="header">About Baseline</x-slot>
    <x-slot name="short">About</x-slot>
</x-front.page-header>
<x-front.about-details></x-front.about-details>
<x-front.counter-section></x-front.counter-section>
<x-front.what-we-do></x-front.what-we-do>
<x-front.testimonial-section></x-front.testimonial-section>
<x-front.cta-section></x-front.cta-section>
@endsection
