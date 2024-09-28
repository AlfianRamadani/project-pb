@props(['mainPost'])

<section class="flex flex-col mt-5">
    <div class="grid grid-cols-3 gap-4 w-full overflow-hidden max-h-[42rem]">
        @foreach ($mainPost as $item)
            <article>
                <x-card :post="$item"></x-card>
            </article>
        @endforeach
    </div>

    <div class="grid grid-cols-4 gap-4 py-10">
        @foreach (['Pengumuman', 'Blog Guru', 'Fasilitas', 'Kegiatan'] as $category)
            <div>
                <h1 class="relative mb-4 text-2xl">
                    {{ $category }}
                    <span class="absolute left-0 -top-2 w-full h-[0.2rem] bg-red-700"></span>
                </h1>
                <article>
                    <x-card></x-card> {{-- You can also pass data to this card if needed --}}
                </article>
                <div class="min-h-96 bg-stone-100"></div>
            </div>
        @endforeach
    </div>
</section>
