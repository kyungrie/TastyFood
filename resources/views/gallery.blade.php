<x-header />
<x-navbar title="GALERI KAMI" />

<section class="bg-[#f4f4f4]">
    <div class="m-10 relative md:h-[80vh]">
        <img src="{{ asset('images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" alt="image preview"
            class="object-cover w-full h-full rounded-xl">
        <a href=""
            class="absolute -left-5 top-[14vh] md:top-[35vh] size-10 md:size-16 rounded-full bg-gray-500 flex items-center justify-center cursor-pointer -rotate-90 duration-200 hover:scale-150">
            <span
                class="w-full h-1 origin-top-left -rotate-45 translate-y-2 bg-white rounded-full translate-x-1/4"></span>
            <span
                class="w-full h-1 origin-top-right rotate-45 translate-y-2 bg-white rounded-full -translate-x-1/4"></span>
        </a>
        <a href=""
            class="absolute -right-5 top-[13vh] md:top-[35vh] size-10 md:size-16 rounded-full bg-gray-500 flex items-center justify-center cursor-pointer rotate-90 duration-200 hover:scale-150">
            <span
                class="w-full h-1 origin-top-left -rotate-45 translate-y-2 bg-white rounded-full translate-x-1/4"></span>
            <span
                class="w-full h-1 origin-top-right rotate-45 translate-y-2 bg-white rounded-full -translate-x-1/4"></span>
        </a>
    </div>
</section>

<section class="bg-[#ffffff]">
    @if (count($pictures) > 0)
    <div class="grid grid-cols-2 gap-6 px-5 py-10 md:grid-cols-3 md:px-20">
    @foreach($pictures as $picture)
        <img src="{{asset('gallery-picture/' . $picture->getFilename()) }}" alt="{{ $picture->getFilename() }}"
            class="aspect-square w-[100%] object-cover rounded-xl object-center">
    @endforeach
    </div>
@else
    <div class="flex justify-center items-center h-[50vh]">
        <p class="text-6xl text-center">Belum ada gambar</p>
    </div>
@endif
</section>




<x-footer />
