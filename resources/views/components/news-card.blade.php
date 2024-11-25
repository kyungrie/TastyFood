<div class="overflow-hidden bg-white rounded-xl shadow-xl">
    <img src="{{ $src }}" alt="card image" class="h-[50%] w-[100%] object-cover">
    <div class="flex flex-col h-[50%] p-5">
        <h1 class="font-bold text-center md:text-2xl"> {{ $title }} </h1>
        <div class="overflow-y-hidden h-[50%] text-sm text-gray-500"> {{ $slot }} </div>
        <div class="flex flex-row justify-between items-center mt-auto">
            <a href="#" class="text-sm text-yellow-600">Lihat Selengkapnya</a>
            <i class="text-4xl text-gray-500 nf nf-md-dots_horizontal hover:scale-125"></i>
        </div>
    </div>
</div>
