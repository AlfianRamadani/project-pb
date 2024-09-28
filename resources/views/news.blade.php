    <x-layout>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-1 mx-auto">
                <x-social-media-side :socialMedia="$socialMedia" :created_at="$data->created_at"></x-social-media-side>
            </div>
            <div class="col-span-8">
                <h1 class="mb-4 text-3xl font-bold">{{ $data['title'] }}</h1>
                <p class="pb-2 mb-6 text-gray-600 border-b-[1px] border-black">{{
                    \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y') }}</p>
                <img src="{{ $data['image_url'] }}" alt="Image" class="w-full h-auto mb-4">
                <!-- Konten Text -->
                <p>{{ $data['content'] }}</p>
            </div>
            <div class="col-span-3">

                <x-profilSide></x-profilSide>
            </div>
        </div>

    </x-layout>
