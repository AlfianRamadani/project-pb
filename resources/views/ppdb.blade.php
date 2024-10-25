<x-layout>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-1 mx-auto">
            <x-social-media-side :socialMedia="$socialMedia" :created_at="$post->created_at"></x-social-media-side>
        </div>
        <div class="col-span-8">
            <h1 class="mb-4 text-3xl font-bold">{{ $post['title'] }}</h1>
            <p class="pb-2 mb-6 text-gray-600 border-b-[1px] border-black">{{
                \Carbon\Carbon::parse($post->created_at)->translatedFormat('l, d F Y') }}</p>

            <img src="{{ asset(Storage::url($post['image_url'])) }}" alt="Image" class="object-fill w-full mb-4 h-1/2">
            <!-- Konten Text -->
            <p>{{ $post['content'] }}</p>
        </div>
        <div class="col-span-3">

            <x-profil-side></x-profil-side>
        </div>
    </div>

</x-layout>
