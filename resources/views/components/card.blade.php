<div class="flex flex-col gap-0 px-4 pt-5 pb-20 mt-0 bg-white rounded-xl md:mt-20 md:gap-4">
    <img src="{{ $src }}" alt="image for card" class="hover:scale-125 md:-mt-56">
    <h2 class="text-2xl font-bold text-center"> {{ $title }} </h2>
    <p class="text-sm text-center line-clamp-2 md:line-clamp-6">
        {{ $slot }}
    </p>
</div>
