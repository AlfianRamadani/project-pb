@props(['created_at', 'socialMedia']) <!-- Accept social media data as a prop -->

<section class="flex flex-col gap-8 text-center">
    <div class="p-4 text-white bg-red-600 rounded-lg shadow-md">
        <div class="text-center">
            <span class="block text-4xl font-bold">{{ \Carbon\Carbon::parse($created_at)->translatedFormat('d') }}</span>
            <span class="block text-sm">{{ \Carbon\Carbon::parse($created_at)->translatedFormat('F') }}</span>
            <span class="block text-sm">{{ \Carbon\Carbon::parse($created_at)->translatedFormat('Y') }}</span>
        </div>
    </div>

    <!-- Loop through social media data -->

        @foreach($socialMedia as $media)
            <a href="{{ $media->link }}" target="_blank" rel="noopener noreferrer" class="text-3xl">
                <i class="fa-brands fa-{{ strtolower($media->name) }}"></i>
            </a>
        @endforeach
                
</section>
