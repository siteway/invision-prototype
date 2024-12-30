@extends('layout')

@section('content')

<div class="mx-auto mt-32 max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
        @foreach ($projects as $project)
            <a href="/projects/{{ $project->slug }}" class="relative overflow-hidden transition-all duration-200 bg-white border border-gray-200 divide-y divide-gray-200 rounded hover:shadow-xl hover:-translate-y-1 group">
            <div class="relative overflow-hidden aspect-video">
                <div class="absolute inset-0 z-10 flex items-center justify-center transition-opacity duration-200 bg-black opacity-0 group-hover:opacity-50">
                </div>
                <div class="absolute z-20 px-4 py-2 text-xs font-light tracking-widest text-center text-white uppercase transition-opacity duration-100 -translate-x-1/2 border border-white rounded-full opacity-0 border-opacity-40 bottom-1/2 left-1/2 group-hover:opacity-100 bg-black/10 backdrop-blur-lg hover:bg-white hover:text-black">View Prototype</div>
                <img class="w-full h-auto" src="{{ asset('storage/prototypes/' . $project->slug . '/files/screens/' . $project->first_image) }}" alt="">
            </div>
            <div class="px-4 py-4 font-light text-gray-500 sm:px-6">
              {!! $project->name !!}
            </div>
        </a>
        @endforeach
        </div>
</div>

@endsection
