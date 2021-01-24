@extends('errors::illustrated-layout')

@section('code', '404')

@section('title', ('Page Not Found'))

@section('image')

<div style="background-image: url('/images/bos-404-bg.jpg');" class="absolute pin bg-no-repeat bg-blue-500 md:bg-left lg:bg-center ">
</div>

@endsection

@section('message', ('Sorry, we are unable to find your page.'))
