<x-layout>
  <h1 class="text-[10rem] font-semibold">{{ $list->category_name }}</h1>
  <div class="grid grid-cols-4 gap-4">
      @foreach ($list['posts'] as $item)
        <x-card-list :post="$item"></x-card-list>
      @endforeach

  </div>
</x-layout>
