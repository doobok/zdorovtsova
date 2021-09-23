@extends('app')

@section('head')
@component('components.meta')

  @slot('title') Title @endslot
  @slot('description') Desc @endslot
  @slot('image') /main.jpg @endslot
  @slot('date') @endslot

@endcomponent
@endsection

@section('main')

@include('layouts.partials.nav')

@include('layouts.partials.mainpage.firstscreen')
@include('layouts.partials.mainpage.categories')
@include('layouts.partials.mainpage.numbers')
@include('layouts.partials.mainpage.services')
@include('layouts.partials.mainpage.steps')
@include('layouts.partials.mainpage.reviews')


{{-- @include('layouts.partials.mainpage.others') --}}


@include('layouts.partials.mainpage.trust')
@include('layouts.partials.mainpage.endscreen')

@endsection
