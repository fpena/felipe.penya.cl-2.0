@extends('layouts.master')

@section('content')
    <section class="w-full px-4 lg:px-0 pt-6 text-center">
        <div>
            <img src="{{ asset('img/sorry.png') }}" alt="Sorry" width="300">
        </div>
        <div class="mt-8">
            <p>I still haven't built this page. Let's start going back <a class="text-white" href="{{ url('') }}">home</a></p>
        </div>

    </section>
@endsection
