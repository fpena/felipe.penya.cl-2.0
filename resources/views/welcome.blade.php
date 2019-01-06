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
                    <p class="mb-4 md:mb-1">{{ __('home.title_1') }}</p>
                    <p class="text-base">{{ __('home.subtitle_1') }}</p>
                </div>

            </div>
        </li>
        <li class="mb-6">
            <div class="flex justify-center flex-col md:flex-row items-center">
                @emojione(':rocket:')
                <span class="ml-0 md:ml-6 mt-6 md:mt-0">
                    <p class="mb-4 md:mb-1">
                        {!! __('home.title_2') !!}
                    </p>
                </span>
            </div>
        </li>
        <li class="mb-6">
            <div class="flex justify-center flex-col md:flex-row items-center">
                @emojione(':iphone:')
                <span class="ml-0 md:ml-6 mt-6 md:mt-0">
                    {!! __('home.title_3') !!}
                </span>
            </div>
        </li>
        <li class="mb-6">
            <div class="flex justify-center flex-col md:flex-row items-center">
                @emojione(':book:')
                <span class="ml-0 md:ml-6 mt-6 md:mt-0">
                    {!! __('home.title_4') !!}
                </span>
            </div>
        </li>
    </ul>
</section>
@endsection
