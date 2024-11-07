<x-header />
<x-navbar title="GALERI KAMI" />

<div x-data="imageSlider" class="overflow-hidden relative m-5 bg-gray-100 rounded-md md:m-10">
        <div class="absolute top-5 right-5 z-10 px-2 text-sm text-center text-white bg-gray-600 rounded-full">
            <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
        </div>

        <button @click="previous()" class="flex absolute left-3 top-[8rem] z-10 justify-center items-center w-10 h-10 bg-gray-100 rounded-full shadow-md -translate-y-1/2 md:w-[3.5rem] md:h-[3.5rem] md:left-5 md:top-1/2">
            <i class="text-2xl font-bold text-gray-500 md:text-3xl fas fa-chevron-left"></i>
        </button>

        <button @click="forward()" class="flex absolute right-3 top-[8rem] z-10 justify-center items-center w-10 h-10 bg-gray-100 rounded-full shadow-md -translate-y-1/2 md:w-[3.5rem] md:h-[3.5rem] md:right-5 md:top-1/2">
            <i class="text-2xl font-bold text-gray-500 md:text-3xl fas fa-chevron-right"></i>
        </button>

        <div class="relative w-full h-80 md:h-[60vh] md:w-[100vw]">
            <template x-for="(image, index) in images">
                <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0">
                    <img :src="image" alt="image" class="object-cover h-[60vh] w-[100vw] rounded-xl">
                </div>
            </template>
        </div>
</div>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("imageSlider", () => ({
                currentIndex: 1,
                images: [
                    "<?php echo asset('images/ella-olsson-mmnKI8kMxpc-unsplash.jpg') ?>",
                    "<?php echo asset('images/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') ?>",
                    "<?php echo asset('images/anna-pelzer-IGfIGP5ONV0-unsplash.jpg') ?>",
                ],
                previous() {
                    if (this.currentIndex > 1) {
                        this.currentIndex = this.currentIndex - 1;
                    }
                },
                forward() {
                    if (this.currentIndex < this.images.length) {
                        this.currentIndex = this.currentIndex + 1;
                    }
                },
            }));
        });
    </script>


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
