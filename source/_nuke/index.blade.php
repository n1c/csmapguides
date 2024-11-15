@extends('_layouts.main')

@section('body')
<section class="container px-6 py-10 mx-auto space-y-4 max-w-xl text-lg md:py-12">
    <h1 class="mb-4 text-4xl">Nuke Map Guides<h1>

    <ul>
        @foreach ($nuke as $guide)
            <li><a href="{{ $guide->link }}" class="link">{{ $guide->title }}</a></li>
        @endforeach
    </ul>
</section>
@endsection
