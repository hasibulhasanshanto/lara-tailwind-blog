@extends('layouts.app')


@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b bg-gray-100">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b bg-gray-100">
    <div>
        <img src="https://images.pexels.com/photos/3861961/pexels-photo-3861961.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="cpver image" width="700">
    </div>

    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            Learn how to write laravel code
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">Code with Shanto</span>, 1 day ago
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate sit at voluptas sapiente quae ratione
            iure dolorem, id veniam debitis maxime fuga. Sapiente non, harum architecto obcaecati totam vel aut, porro
            culpa illum a quaerat magnam odit consequuntur numquam cupiditate id, dicta quasi? Error quae velit, natus
            unde a inventore.
        </p>

        <a href="#" class="uppercase bg-blue-500 text-gray-100 text-lg font-bold py-3 px-8 rounded-3xl">
            Keep reading
        </a>
    </div>
</div>
@endsection