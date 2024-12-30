@extends('layout')

@section('content')

<div class="mx-auto bg-gray-100">
    <iframe class="w-full h-screen" src="{{ asset('/prototypes/' . $project->slug . '/index.html#/screens/browse') }}"></iframe>
</div>

@endsection

@section('title')
{{ $project->name }}
@endsection
