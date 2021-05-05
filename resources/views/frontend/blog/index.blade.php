@extends('layouts.app')


@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b bg-gray-100">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (Auth::check())
<div class="pt-15 w-4/5 m-auto">
    <a href="/blog/create/"
        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Create Posts
    </a>
</div>
@endif

@foreach ($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b bg-gray-100">
    <div>
        <img src="{{ $post->post_image }}" alt="cpver image" width="700">
    </div>

    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on
            {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>

        <a href="/blog/{{ $post->slug }}"
            class="uppercase bg-blue-500 text-gray-100 text-lg font-bold py-3 px-8 rounded-3xl">
            Keep reading
        </a>
    </div>
</div>
@endforeach

@endsection