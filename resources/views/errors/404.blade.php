@extends('layouts.master')

@section('content')
    <section class="w-full px-4 lg:px-0 pt-6 text-center">
        <div>
            <img src="{{ asset('img/sorry.png') }}" alt="Sorry" width="300">
        </div>
        <div class="mt-8">
            <p>
                {!! __('home.404') !!}
            </p>
        </div>

    </section>
@endsection
