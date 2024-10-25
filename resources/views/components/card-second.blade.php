@props(['post', 'custom'])
<a href="{{ $custom ? route('post.show', ['category' => Str::slug($post->category_name), 'slug' => $post->slug]) : route('post', ['slug' => $post->slug]) }}" class="block">

<article class="flex gap-4 flex-nowrap">
    <img class="object-fill h-20 w-28" src={{ asset(Storage::url($post->image_url)) }} alt="">
    <div>
        <time class="text-xs text-zinc-600">Terbit: {{\Carbon\Carbon::parse($post->created_at)->translatedFormat('d F
            Y') }}</time>
        <h2 class="text-sm font-bold text-zinc-700">{{ $post->title }}</h2>
    </div>
</article>
</a>
