<x-header />
<x-navbar title="BERITA KAMI" />

<section class="bg-[#f4f4f4] grid grid-cols-1 md:grid-cols-2 px-5 py-3 md:px-[3rem] md:py-[3rem] md:gap-14">
    <img src="{{ asset('images/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt=""
        class="rounded-xl object-cover w-full md:h-[80vh] h-[50vh]">
    <div class="">
            <h1 class="font-bold md:text-[2.5rem] text-2xl mt-[5rem]">APA SAJA MAKANAN KHAS NUSANTARA?</h1>

            <p class="md:text-[1.5rem] text-xl mt-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem natus labore amet
                quod iste impedit enim similique praesentium perspiciatis. Libero quidem voluptatem ipsam dolores, maiores
                natus ut inventore commodi minus.</p>

            <p class="md:text-[1.5rem] text-xl mt-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem natus labore amet
                quod iste impedit enim similique praesentium perspiciatis. Libero quidem voluptatem ipsam dolores, maiores
                natus ut inventore commodi minus.</p>

            <button class="bg-black text-white py-5 px-20 md:text-[1.5rem] mt-10 font-bold hover:scale-125">BACA SELENGKAPNYA</button>
        </div>
</section>

<section class="bg-[#ffffff] px-5 py-3 md:px-24 md:py-20">
    <h1 class="md:text-[3rem] text-4xl font-semibold mb-10">BERITA LAINNYA</h1>
    @if(count($news) > 0)
    <div class="grid grid-cols-2 h-[150vh] gap-3 md:grid-cols-4 md:grid-rows-2">
        @foreach($news as $new)
        <x-news-card src="{{ asset('news-picture/'.$new->picture) }}"  title="{{$new->title}}">
            {{ $new->newscontent }}
        </x-news-card>
        @endforeach
    </div>
    @else
    <div class="flex justify-center items-center h-[50vh]">
        <p class="text-6xl text-center">Belum ada berita</p>
    </div>
    @endif
</section>



<x-footer />
