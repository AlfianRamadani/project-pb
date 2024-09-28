<header class="flex flex-wrap w-full py-3 text-sm bg-white sm:justify-start sm:flex-nowrap dark:bg-neutral-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between">
      <a class="flex-none text-xl font-semibold text-black focus:outline-none focus:opacity-80 dark:text-white" href="#" aria-label="Brand">{{config('myconfig.brand')}}</a>
      <div class="flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:ps-5">
        @foreach($socialMedia as $media)
        <a href="{{ $media->link }}" target="_blank" rel="noopener noreferrer" class="text-3xl">
            <i class="fa-brands fa-{{ strtolower($media->name) }}"></i>
        </a>
    @endforeach
      </div>
    </nav>
  </header>
