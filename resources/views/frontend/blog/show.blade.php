@extends('layouts.app')


@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15 border-b bg-gray-100">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>


<div class="w-4/5 m-auto pt-20">
    <div class="w-full mb-5">
        <img src="{{ asset('/post_images/'.$post->post_image) }}" alt="{{ $post->title }}">
    </div>

    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">
            {{ $post->user->name }}
        </span>, Created on
        {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection