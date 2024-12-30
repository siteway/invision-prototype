<div>
    <div class="mb-8">
        <div class="relative max-w-md mx-auto">
            <input
                wire:model.live="search"
                type="text"
                placeholder="Search projects..."
                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
            >
            @if($search)
                <button
                    wire:click="$set('search', '')"
                    class="absolute inset-y-0 right-0 flex items-center px-4 text-gray-500 hover:text-gray-700"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            @endif
        </div>
    </div>

    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
        @if($projects->isEmpty())
            <div class="col-span-full text-center py-12 text-gray-500">
                No projects found matching your search.
            </div>
        @endif

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

    <div class="mt-8">
        {{ $projects->links() }}
    </div>
</div>
