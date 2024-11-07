<x-header />
<x-navbar title="TENTANG KAMI" />

<section class="bg-[#f4f4f4] px-5 md:px-32 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 w-[100vw] justify-between">
    <div class="">
        <h1 class="text-[3rem] font-semibold mb-10">TASTY FOOD</h1>
        <p class="text-lg font-semibold">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad dignissimos
            porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus tenetur enim
            vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit porro! Minus ea,
            corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
        <p class="text-lg mt-[2rem]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad dignissimos
            porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus tenetur enim
            vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit porro! Minus ea,
            corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
    </div>
    <div class="flex flex-row gap-2">
        <img src="{{ asset('images/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="" class="rounded-xl w-[50%]">
        <img src="{{ asset('images/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" alt=""
            class="rounded-xl object-cover w-[50%]">
    </div>
</section>
<section class="bg-[#ffffff] px-5 md:px-32 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 w-[100vw] justify-between">
    <div class="flex flex-row gap-3">
        <img src="{{ asset('images/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" alt=""
            class="rounded-xl object-cover size-[30vh] md:size-[40vh] w-[50%]">
        <img src="{{ asset('images/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" alt=""
            class="rounded-xl object-cover size-[30vh] md:size-[40vh] w-[50%]">
    </div>
    <div class="">
        <h1 class="text-[3rem] font-semibold mb-10">VISI</h1>
        <p class="md:text-[1.5rem] text-xl mt-[2rem]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad
            dignissimos porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus
            tenetur enim vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit
            porro! Minus ea, corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
    </div>
</section>
<section class="bg-[#ffffff] px-5 md:px-32 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 w-[100vw] justify-between">
    <div class="">
        <h1 class="text-[3rem] font-semibold mb-10">MISI</h1>
        <p class="md:text-[1.5rem] text-xl mt-[2rem]">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ad
            dignissimos porro iure laudantium fuga mollitia architecto nihil? Minus maxime explicabo, expedita possimus
            tenetur enim vero architecto aliquid pariatur excepturi ipsa at totam consectetur ea inventore suscipit
            porro! Minus ea, corporis at ducimus unde voluptates aperiam inventore quia quam. Provident.</p>
    </div>
    <div class="flex flex-row gap-3">
        <img src="{{ asset('images/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" alt=""
            class="rounded-xl object-cover w-full h-[40vh]">
    </div>
</section>

<x-footer />
