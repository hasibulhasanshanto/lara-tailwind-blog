<footer class="bg-gray-800 py-20 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 pl-20 m-auto border-b-2 border-gray-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400 leading-5">
                <li class="pb-1">
                    <a href="/">Home</a>
                </li>
                <li class="pb-1">
                    <a href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li class="pb-1">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="pb-1">
                    <a href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Find Us
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400 leading-5">
                <li class="pb-1">
                    <a href="#">What we do?</a>
                </li>
                <li class="pb-1">
                    <a href="#">Address</a>
                </li>
                <li class="pb-1">
                    <a href="#">Phone</a>
                </li>
                <li class="pb-1">
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Latest Post
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400 leading-5">
                <li class="pb-1">
                    <a href="#">Why we love tech</a>
                </li>
                <li class="pb-1">
                    <a href="#">Why we love design</a>
                </li>
                <li class="pb-1">
                    <a href="#">Why to use Laravel</a>
                </li>
                <li class="pb-1">
                    <a href="#">Why PHP is the best</a>
                </li>
            </ul>
        </div>
    </div>

    <p class="w-25 w-4/5 m-auto text-center text-sm text-gray-100 pt-6">
        Copyright 2015 - <?= date('Y'); ?> &copy; <a href="https://github.com/hasibulhasanshanto">Shantos Blackbox</a> .
        All Rights Reserved.
    </p>
</footer>