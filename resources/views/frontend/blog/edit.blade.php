@extends('layouts.app')


@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15 border-b bg-gray-100">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="{{ route('blog.update', $post->slug) }}" method="POST" enctype="multipart/form-data"
        class="border-blue-300 border-2 py-5 px-8 rounded-xl">
        @csrf
        @method('PUT')

        <div class="form-group mb-5 border-red-300 border-2 py-2 px-4 rounded-xl">
            <label for="title">Title</label>
            <input type="text" name="title"
                class="bg-transparent block border-b-2 w-full h-10 text-2xl mt-1 outline-none" id="title"
                value="{{ $post->title }}">
        </div>

        <div class="form-group mb-5 border-red-300 border-2 py-2 px-4 rounded-xl">
            <label for="description">Description</label>
            <textarea name="description" id="description"
                class=" bg-transparent block border-b-2 w-full h-40 text-xl mt-1 outline-none">{{ $post->description }}</textarea>
        </div>

        <div class="bg-grey-lighter pt-5">
            <label
                class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="post_image" class="hidden">
            </label>
        </div>

        <button type="submit"
            class="uppercase mt-7 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl outline-none">
            Update Post
        </button>
    </form>
</div>

@endsection