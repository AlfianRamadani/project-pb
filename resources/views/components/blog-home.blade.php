@props(['mainPost', 'categories'])

<section class="flex flex-col mt-5">
    <div class="grid grid-cols-3 gap-4 w-full overflow-hidden max-h-[42rem]">
        @foreach ($mainPost as $item)
        <article>
            <x-card :custom="false" :post="$item"></x-card>
        </article>
        @endforeach
    </div>

    <div class="grid grid-cols-4 gap-4 py-10">
        @foreach ($categories as $category)

        <div>
            <h1 class="relative mb-4 text-2xl">
                {{ $category['category_name'] }}
                <span class="absolute left-0 -top-2 w-full h-[0.2rem] bg-red-700"></span>
            </h1>
            <article>
                <x-card :custom="1" :post='$category["posts"][0]'></x-card>
            </article>
            <div class="flex flex-col gap-4 px-5 py-5 overflow-hidden bg-stone-100 max-h-[30rem] h-96">


                <x-card-second :custom="1" :post='$category["posts"][1]'></x-card-second>
                <x-card-second :custom="1" :post='$category["posts"][1]'></x-card-second>
                <x-card-second :custom="1" :post='$category["posts"][1]'></x-card-second>
                {{-- <x-card-second :post='$category["posts"][2]'></x-card-second> --}}
                <div class="flex items-center justify-center h-10 mx-auto mt-auto text-center bg-red-800 w-28">
                    <a class="text-white" href="{{ route('list.post', ['category' => Str::slug($category['category_name'])]) }}">Read More</a>
                </div>

            </div>

        </div>
        @endforeach
    </div>
</section>
