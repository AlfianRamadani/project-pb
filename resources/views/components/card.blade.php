@props(['custom', 'post' ])
@if($post) {{-- Check if $post is not null before rendering --}}

<a href="{{ $custom ? route('post.show', ['category' => Str::slug($post->category_name), 'slug' => $post->slug]) : route('post', ['slug' => $post->slug]) }}" class="block">

        <div class="relative bg-white rounded-sm shadow-sm dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="relative">
                <img class="w-full h-full rounded-sm" src="{{ asset(Storage::url($post->image_url)) }}" alt="Card Image">

                <!-- Overlay gradient for better text readability -->
                <div class="absolute inset-0 rounded-sm bg-gradient-to-t from-black to-transparent opacity-60"></div>

                <div class="absolute bottom-0 left-0 right-0">
                    <div class="p-4 md:p-5">
                        <p class="mt-5 text-xs text-gray-300 dark:text-neutral-500">
                            Terbit : {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y'); }} {{-- Show published date --}}
                        </p>
                        <h3 class="text-lg font-bold text-white">{{ $post->title }}</h3> {{-- Display post title --}}
                    </div>
                </div>
            </div>
        </div>
    </a>
@else
    <div class="p-4 text-gray-500 md:p-5">No content available</div> {{-- Optional fallback for when $post is null --}}
@endif
