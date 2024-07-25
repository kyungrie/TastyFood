    <x-header></x-header>

    <nav class="bg-transparent">
        <div class="m-20 px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                  <a href="/" class="text-gray-900 px-3 py-2 text-[2rem] font-bold">TASTY FOOD</a>
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="/" class="rounded-md px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-700 hover:text-white">HOME</a>
                  <a href="/about" class="rounded-md px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-700 hover:text-white">TENTANG</a>
                  <a href="/news" class="rounded-md px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-700 hover:text-white">BERITA</a>
                  <a href="/gallery" class="rounded-md px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-700 hover:text-white">GALERI</a>
                  <a href="/contact" class="rounded-md px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-700 hover:text-white">KONTAK</a>
                </div>
              </div>
            </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
            <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Tentang</a>
            <a href="/news" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Berita</a>
            <a href="/gallery" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Galeri</a>
            <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Kontak</a>
          </div>
        </div>
      </nav>

    <section class="m-20 -mt-[50rem] mb-[25rem]">
        <div class="bg-[#f4f4f4] sm:px-6 lg:px-8">
            <div class="max-h-[1px] w-[10rem] border-2 border-black"></div>
            <h1 class="text-[5rem]">HEALTHY</h1>
            <h1 class="text-[5rem] font-bold -mt-10">TASTY FOOD</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Perferendis explicabo vitae error sapiente repudiandae vel maxime, <br>
                unde veritatis, corrupti odit amet dolorum ab molestiae facilis. <br>
                Dignissimos quoeum ex assumenda.
            </p> <br>
                <a class="bg-black text-white p-3 px-20 font-bold mt-50 hover:scale-125" href="/about">TENTANG KAMI</a>
        </div>
        <img src="{{ asset('images/img-4-2000x2000.png') }}" class="size-[80rem] absolute left-[60rem] -top-[17rem] animate-slowspin" alt="">
    </section>

    <section class="bg-[#ffffff] py-24 ">
        <div class="text-center justify-center">
            <h1 class="font-semibold text-[3rem] mt-5">TENTANG KAMI</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Perferendis explicabo vitae error sapiente repudiandae vel maxime, <br>
                unde veritatis, corrupti odit amet dolorum ab molestiae facilis. <br>
                Dignissimos quoeum ex assumenda.
            </p>
            <div class="max-h-[1px] w-[10rem] border-2 border-black absolute left-[55rem] -bottom-[23rem]"></div>
        </div>
    </section>

    <section class="">
        <div class="grid grid-cols-4 gap-10 p-10" style="background-image: url('{{ asset('images/group-70.png') }}'); background-repeat: no-repeat;">
           <div class="">
            <img src="{{ asset('images/img-1.png') }}"  alt="CARD IMAGE" class="mb-[-60%] hover:scale-110">
            <div class="bg-white rounded-xl pb-12 px-4 flex flex-col gap-4 pt-[60%]">
                <h2 class="text-center text-[2rem] font-bold">LOREM IPSUM </h2>
                <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti, harum sint atque blanditiis totam modi? Unde porro nihil odit molestiae repudiandae dolor quasi iusto!</p>
            </div>
           </div>
           <div class="">
            <img src="{{ asset('images/img-2.png') }}"  alt="CARD IMAGE" class="mb-[-60%] hover:scale-110">
            <div class="bg-white rounded-xl pb-12 px-4 flex flex-col gap-4 pt-[60%]">
                <h2 class="text-center text-[2rem] font-bold">LOREM IPSUM </h2>
                <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti, harum sint atque blanditiis totam modi? Unde porro nihil odit molestiae repudiandae dolor quasi iusto!</p>
            </div>
           </div>
           <div class="">
            <img src="{{ asset('images/img-3.png') }}"  alt="CARD IMAGE" class="mb-[-60%] hover:scale-110">
            <div class="bg-white rounded-xl pb-12 px-4 flex flex-col gap-4 pt-[60%]">
                <h2 class="text-center text-[2rem] font-bold">LOREM IPSUM </h2>
                <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti, harum sint atque blanditiis totam modi? Unde porro nihil odit molestiae repudiandae dolor quasi iusto!</p>
            </div>
           </div>
           <div class="">
            <img src="{{ asset('images/img-4.png') }}"  alt="CARD IMAGE" class="mb-[-60%] hover:scale-110">
            <div class="bg-white rounded-xl pb-12 px-4 flex flex-col gap-4 pt-[60%]">
                <h2 class="text-center text-[2rem] font-bold">LOREM IPSUM </h2>
                <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti, harum sint atque blanditiis totam modi? Unde porro nihil odit molestiae repudiandae dolor quasi iusto!</p>
            </div>
           </div>
        </div>
    </section>
    <section class="py-20 px-40 h-[100vh] w-[100vw]">
        <h1 class="text-[3rem] font-semibold text-center">BERITA KAMI</h1>
        <div class="grid grid-cols-2 grid-rows-1 gap-5 h-full">
            <div class="grid grid-cols-1 grid-rows-2 bg-white rounded-xl shadow h-full">
                    <img class="rounded-t-lg w-[100%] h-[100%] object-cover" src="{{ asset('images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt="" />
                <div class="p-5 flex flex-col justify-between">
                    <div class="">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-black">LOREM IPSUM DOLOR SIT AMET, CONSECTUR ADIPISCING ELIT</h5>
                        </a>
                        <p class="mt-8 mb-3 font-normal text-gray-800 place-self-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ducimus illo rerum quidem sint, fugiat voluptatibus deleniti! Corporis sint reprehenderit rerum labore alias commodi porro, itaque pariatur quidem fugiat veniam ea soluta officiis eum modi autem quia minima molestias eaque esse est aperiam. Id quae rerum commodi? Quod, expedita earum.</p>
                    </div>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-yellow-500">
                        Baca selengkapnya
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-2">
                <div class="bg-white rounded-xl shadow h-full">
                        <img class="rounded-t-lg h-[50%] w-[100%] object-cover" src="{{ asset('images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt="" />
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-black">LOREM IPSUM</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-800 place-self-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero consectetur dignissimos maiores placeat nihil quibusdam aut aperiam aliquam deserunt?</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-yellow-500">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow h-full">
                        <img class="rounded-t-lg h-[50%] w-[100%] object-cover" src="{{ asset('images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt="" />
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-black">LOREM IPSUM</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-800 place-self-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero consectetur dignissimos maiores placeat nihil quibusdam aut aperiam aliquam deserunt?</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-yellow-500">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow h-full">
                        <img class="rounded-t-lg h-[50%] w-[100%] object-cover" src="{{ asset('images/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}" alt="" />
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-black">LOREM IPSUM</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-800 place-self-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero consectetur dignissimos maiores placeat nihil quibusdam aut aperiam aliquam deserunt?</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-yellow-500">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow h-full">
                        <img class="rounded-t-lg h-[50%] w-[100%] object-cover" src="{{ asset('images/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}" alt="" />
                    <div class="p-5 flex flex-col justify-between">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-black">LOREM IPSUM</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-800 place-self-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit libero consectetur dignissimos maiores placeat nihil quibusdam aut aperiam aliquam deserunt?</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-yellow-500">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white px-52 py-10">
        <h1 class="text-center font-semibold text-[3rem] pb-5">GALERI KAMI</h1>
        <div class="grid grid-cols-3 grid-rows-2 gap-2 h-[100vh]">
            <img class="rounded-xl size-full object-cover hover:scale-110" src="{{ asset('images/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="">
            <img class="rounded-xl size-full object-cover hover:scale-110" src="{{ asset('images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" alt="">
            <img class="rounded-xl size-full object-cover hover:scale-110" src="{{ asset('images/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="">
            <img class="rounded-xl size-full object-cover hover:scale-110" src="{{ asset('images/jonathan-borba-Gkc_xM3VY34-unsplash.jpg') }}" alt="">
            <img class="rounded-xl size-full object-cover hover:scale-110" src="{{ asset('images/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg') }}" alt="">
            <img class="rounded-xl size-full object-cover hover:scale-110" src="{{ asset('images/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}" alt="">
        </div>
        <div class="flex justify-center pb-[2rem]">
            <a class="bg-black text-white p-3 px-20 font-bold mt-5 hover:scale-125" href="/gallery">LIHAT LEBIH BANYAK</a>
        </div>
    </section>
    </div>



    <x-footer></x-footer>
