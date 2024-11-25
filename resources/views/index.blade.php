    <x-header />

    <x-navbar-white />

    <section class="m-[5rem] md:mb-[28rem]">
        <div class="bg-[#f4f4f4] sm:px-6 lg:px-8  w-[50%]">
            <div class="max-h-[1px] w-[10rem] border-2 border-black"></div>
            <h1 class="text-5xl md:text-7xl">HEALTHY</h1>
            <h1 class="text-5xl font-bold md:text-7xl">TASTY FOOD</h1>
            <p class="max-w-[30rem]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Perferendis explicabo vitae error sapiente repudiandae vel maxime, <br>
                unde veritatis, corrupti odit amet dolorum ab molestiae facilis. <br>
                Dignissimos quoeum ex assumenda.
            </p> <br>
            <a class="inline-block p-3 font-bold text-white bg-black md:px-20 hover:scale-125" href="/about">TENTANG KAMI</a>
        </div>
        <img src="{{ asset('images/img-4-2000x2000.png') }}"
            class="md:size-[80rem] absolute md:left-[78rem] md:-top-[15rem] size-[20rem] left-[15rem] bottom-[35rem] animate-slowspin -z-10">
    </section>

    <section class="bg-[#ffffff] py-24">
        <div class="flex flex-col items-center">
            <h1 class="font-semibold text-[3rem] mt-5">TENTANG KAMI</h1>
            <p class="max-w-[80vw] md:max-w-[30vw] text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Perferendis explicabo vitae error sapiente repudiandae vel maxime,
                unde veritatis, corrupti odit amet dolorum ab molestiae facilis.
                Dignissimos quoeum ex assumenda.
            </p>
            <div class="max-h-[1px] w-[10rem] border-2 border-black mt-10"></div>
        </div>
    </section>

    <section id="menu-list"
        class="flex w-[100vw] h-[140vh] md:h-[80vh] justify-center items-center bg-cover" style="background-image: url('{{ asset('images/Group 70.png') }}'); background-repeat: no-repeat;">
        <div class="h-[100vh] md:h-[50vh] items-center justify-center grid grid-cols-2 md:grid-cols-4 place-items-center px-10 md:px-40 py-4 md:py-24 gap-y-16 gap-x-4 md:gap-6">
                <x-card src="{{asset('images/img-1.png')}}" title="Lorem ipsum">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                </x-card>
                <x-card src="{{asset('images/img-2.png')}}" title="Lorem ipsum">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                </x-card>
                <x-card src="{{asset('images/img-3.png')}}" title="Lorem ipsum">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                </x-card>
                <x-card src="{{asset('images/img-4.png')}}" title="Lorem ipsum">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                </x-card>
        </div>
    </section>

    <section id="news" class="px-5 py-10 my-20 md:px-20">
        <h1 class="my-5 text-5xl font-bold text-center">BERITA KAMI</h1>
        @if (count($news) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 md:grid-rows-1 gap-5 h-[220vh] md:h-[100vh]">
            {{-- <x-news-card src="{{ asset('news-picture/' . $news[0]->picture) }}" title="{{ $news[0]->title }}">
                {{ $news[0]->newscontent }}
            </x-news-card> --}}
            <div class="overflow-hidden bg-white rounded-xl shadow-2xl">
                <img src="{{ asset('news-picture/' . $news[0]->picture) }}" alt="card image" class="h-[50%] w-[100%] object-cover">
                <div class="flex flex-col h-[50%] p-5">
                    <h1 class="text-xl font-bold text-center">{{ $news[0]->title }}</h1>
                    <div class="h-[50%] text-sm text-gray-500 overflow-y-hidden"> {{ $news[0]->newscontent }} </div>
                    <div class="flex flex-row justify-between items-center mt-auto">
                        <a href="#" class="text-sm text-yellow-600">Lihat Selengkapnya</a>
                        <i class="text-4xl text-gray-500 nf nf-md-dots_horizontal hover:scale-125"></i>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 grid-rows-1 gap-5 md:grid-rows-2">
                @for ($i = 1; $i < count($news); $i++)
                    <x-news-card src="{{ asset('news-picture/' . $news[$i]->picture) }}"
                        title="{{ $news[$i]->title }}">
                        {{ $news[$i]->newscontent }}
                    </x-news-card>
                @endfor
            </div>
        </div>
    @else
        <div class="flex justify-center items-center h-[50vh]">
            <p class="text-6xl text-center">Belum ada berita</p>
        </div>
    @endif
        </div>
            <div class="flex justify-center">
                <a class="inline-block p-3 px-20 mt-5 font-bold text-white bg-black hover:scale-110 md:hover:scale-125" href="/news">
                    LIHAT LEBIH BANYAK
                </a>
            </div>
    </section>

    <section class="py-10 bg-white">
        <h1 class="text-center font-semibold text-[3rem] pb-5">GALERI KAMI</h1>
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
        <div class="flex justify-center mt-5">
            <a class="inline-block p-3 px-20 font-bold text-white bg-black hover:scale-110 md:hover:scale-125" href="/gallery">
                LIHAT LEBIH BANYAK
            </a>
        </div>
    </section>
    </div>



    <x-footer />
