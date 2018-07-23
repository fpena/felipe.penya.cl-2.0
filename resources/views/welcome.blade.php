@extends('layouts.master')

@section('content')
<section class="w-full px-4 lg:px-0 pt-12 text-center">
    <h1 class="mb-12">
        <img src="{{ asset('img/felipe.png') }}" width="200" height="200" alt="Felipe Peña">
    </h1>
    <ul class="text-2xl md:text-3xl list-reset">
        <li class="mb-6">
            <div class="flex justify-center flex-col md:flex-row items-center">
                @emojione(':art:')
                <div class="ml-0 md:ml-6 mt-6 md:mt-0">
                    <p class="mb-4 md:mb-1">I'm a software architect and developer</p>
                    <p class="text-base">(currently living in beautiful Vancouver, BC)</p>
                </div>

            </div>
        </li>
        <li class="mb-6">
            <div class="flex justify-center flex-col md:flex-row items-center">
                @emojione(':rocket:')
                <span class="ml-0 md:ml-6 mt-6 md:mt-0">I organize a <a target="_blank" class="text-white" href="http://www.9punto5.cl">remote work conference</a></span>
            </div>
        </li>
        <li class="mb-6">
            <div class="flex justify-center flex-col md:flex-row items-center">
                @emojione(':iphone:')
                <span class="ml-0 md:ml-6 mt-6 md:mt-0">I have <a target="_blank" class="text-white" href="https://itunes.apple.com/ca/app/earwizard/id599466971?mt=8">one educational app</a> in the App Store</span>
            </div>
        </li>
        <li class="mb-6">
            <div class="flex justify-center flex-col md:flex-row items-center">
                @emojione(':book:')
                <span class="ml-0 md:ml-6 mt-6 md:mt-0">I like to <a target="_blank" class="text-white" href="https://www.goodreads.com/user/show/31677851-felipe-pe-a">read</a></span>
            </div>
        </li>
    </ul>
</section>
@endsection
