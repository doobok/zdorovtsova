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

  {{-- @include('layouts.partials.mainpage.firstscreen')

  @include('layouts.partials.mainpage.introduce')
  @include('layouts.partials.mainpage.subjects')
  @include('layouts.partials.mainpage.advantages')
  @include('layouts.partials.mainpage.tutors')
  @include('layouts.partials.mainpage.reviews')
  @include('layouts.partials.mainpage.universe')
  @include('layouts.partials.mainpage.pricing')
  @include('layouts.partials.mainpage.todo-block') --}}



@endsection
