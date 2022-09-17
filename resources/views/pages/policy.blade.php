@extends('app')

@section('head')
    @component('components.meta')

        @slot('title')
            {{__('site.policy')}} | {{__('site.name')}}
        @endslot
        @slot('description')
            {{__('policy.desc')}}
        @endslot
        @slot('image') @endslot
        @slot('date') @endslot

    @endcomponent
@endsection

@section('main')

    @include('layouts.partials.nav')

    <div class="bg-center bg-cover bg-no-repeat relative py-8">
        <div
            class="bg-center bg-cover bg-no-repeat absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to"></div>
        <div class="h-1 md:h-8 lg:h-12"></div>
    </div>

    <div class="bg-grey-60">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

            <h1 class="mb-7 text-2xl lg:text-4xl font-extrabold leading-none">
                {{__('site.policy')}}
            </h1>
            <article class="mb-6 text-gray-900">
                {!! __('policy.body', [
                    'domain' => $domain
                ]) !!}
            </article>

        </div>

    </div>

@endsection
