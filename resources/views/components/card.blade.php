@props(['post'])

<div class="relative bg-white rounded-sm shadow-sm dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
    @if($post) {{-- Check if $post is not null before rendering --}}
        <img class="w-full h-full rounded-sm" src="{{ $post->image_url }}" alt="Card Image">
        <div class="absolute top-0 left-0 right-0">
            <div class="p-4 md:p-5">
                <h3 class="text-lg font-bold text-gray-800">{{ $post->title }}</h3> {{-- Display post title --}}
                <p class="mt-1 text-gray-800">{{ $post->excerpt }}</p> {{-- Display a brief description or excerpt --}}
                <p class="mt-5 text-xs text-gray-500 dark:text-neutral-500">
                    Last updated {{ $post->updated_at->diffForHumans() }} {{-- Show last updated time --}}
                </p>
            </div>
        </div>
    @else
        <div class="p-4 text-gray-500 md:p-5">No content available</div> {{-- Optional fallback for when $post is null --}}
    @endif
</div>
    