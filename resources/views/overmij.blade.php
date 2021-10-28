@extends('layouts/main')

@section('page_title')
    Users Page
@endsection

@section('content')
    @isset($person)
        <li class="px-y">Name: {{$person->name}}</li>
    @else
        <ul>
            @foreach($persons as $person)
                <li class="px-y">Name: {{$person->name}}</li>
            @endforeach
        </ul>
    @endisset
@endsection
