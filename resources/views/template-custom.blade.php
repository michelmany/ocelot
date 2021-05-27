{{--
  Template Name: Interior Pages Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts())
    {!! the_post() !!}
    @include('partials.content-page')
  @endwhile
@endsection
