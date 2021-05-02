@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a developer?
            </h1>
            <a href="/blog" class="text-center bg-gray-100 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://images.pexels.com/photos/3861961/pexels-photo-3861961.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="cpver image" width="700">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600 leading-8">
            Struggling a better web developer?
        </h2>

        <p class="py-8 text-gray-500 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit !
        </p>

        <P class="font-extrabold text-gray-600 text-l pb-9 leading-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vel tempora, sequi tempore et
            accusantium, explicabo expedita sit cupiditate repellat labore qui quidem cumque asperiores fugit ad, quod
            natus dignissimos neque.
        </P>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm in expert in .....
    </h2>

    <span class="font-extrabold block text-4xl py-1">
        Frontend Development
    </span>
    <span class="font-extrabold block text-4xl py-1">
        UI/UX Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Wordpress Development
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Full Stack Laravel Development
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-xl text-gray-500">
        Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500 leading-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis expedita vitae, ab doloremque beatae itaque
        non magni, rem optio ipsam, delectus laboriosam! Alias magnam aperiam beatae earum, est eos debitis cum,
        perferendis itaque adipisci et ipsam? Mollitia molestias necessitatibus architecto quos laudantium laboriosam,
        vitae debitis!
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                PHP
            </span>

            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nam, perspiciatis provident eius
                nobis minima eaque sunt quidem consequuntur, incidunt saepe nihil velit! Eligendi fugit commodi in a
                laudantium facilis.
            </h3>

            <a href="#"
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div>
        <img src="https://images.pexels.com/photos/3861961/pexels-photo-3861961.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
            alt="cpver image" width="700">
    </div>
</div>
@endsection