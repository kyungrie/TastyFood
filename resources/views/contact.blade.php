<x-header></x-header>
<x-navbar>
    <h1 class="font-bold text-white text-[4rem]">KONTAK KAMI</h1>
</x-navbar>

<section class="bg-[#ffffff] px-28 py-28">
    <h1 class="font-semibold text-[2rem]">KONTAK KAMI</h1>
    <div class="grid grid-cols-2 gap-5 pt-10">
        <div class="flex flex-col gap-4">
            <input type="text" placeholder="Subject" name="subject" id="subject" class="form-input block w-full rounded-md border-2 py-1.5 text-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <input type="text" placeholder="Name" name="name" id="name" autocomplete="given-name" class="form-input block w-full rounded-md border-2 py-1.5 text-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <input type="email" placeholder="E-mail" name="email" id="email" autocomplete="email" class="form-input block w-full rounded-md border-2 py-1.5 text-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <textarea placeholder="Message" name="message" id="message" class="form-textarea resize-none block w-full rounded-md border-2 py-1.5 text-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
    </div>
    <div class="flex justify-center pb-[2rem]">
        <button class="bg-black text-white p-3 px-96 font-bold mt-5 rounded-lg">KIRIM</button>
    </div>
</section>

<section class="bg-[#ffffff] px-28 py-28">
    <div class="flex justify-evenly">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 66.png') }}">
            <h1 class="font-bold text-[2rem]">EMAIL</h1>
            <p class="text-gray-500 text-[1.5rem]">tastyfood@gmail.com</p>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 67.png') }}">
            <h1 class="font-bold text-[2rem]">PHONE</h1>
            <p class="text-gray-500 text-[1.5rem]">+62 812 3456 7890</p>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 68.png') }}">
            <h1 class="font-bold text-[2rem]">LOCATION</h1>
            <p class="text-gray-500 text-[1.5rem]">Kota Bandung, Jawa Barat</p>
        </div>
    </div>
</section>
<x-footer></x-footer>
